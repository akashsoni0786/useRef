import {
  Avatar,
  Button,
  Checkbox,
  Divider,
  IconButton,
  InputBase,
  Menu,
  MenuItem,
  Modal,
  Tooltip,
  Typography,
} from "@mui/material";
import React, { useState } from "react";
import "./Home.css";
import { v4 as uid } from "uuid";
import apicall from "./db.js";
import FavoriteBorderIcon from "@mui/icons-material/FavoriteBorder";
import FavoriteIcon from "@mui/icons-material/Favorite";
import ShareOutlinedIcon from "@mui/icons-material/ShareOutlined";
import SendOutlinedIcon from "@mui/icons-material/SendOutlined";
import { contextname } from "./Context";
import { useLocation } from "react-router-dom";
import DeleteForeverIcon from "@mui/icons-material/DeleteForever";
import EditIcon from "@mui/icons-material/Edit";
import { Box } from "@mui/system";
import MoreVertIcon from "@mui/icons-material/MoreVert";
import ThumbUpIcon from '@mui/icons-material/ThumbUp';
import ThumbUpOffAltIcon from '@mui/icons-material/ThumbUpOffAlt';
const SinglePost = (props) => {
  const label = { inputProps: { "aria-label": "Checkbox demo" } };
  const contxt = React.useContext(contextname);
  const [post_details, setDetails] = useState([]);
  const [commid, setCommid] = useState("");
  const location = useLocation();
  const [commentedited, setEditedComment] = useState("");
  const [commenttxt, setCommenttxt] = React.useState("");
  const { details } = location.state;
  const [open, setOpen] = React.useState(false);
  const [rmvtxt, setRmvtxt] = React.useState("");
  const handleOpen = () => setOpen(true);
  const handleClose = () => setOpen(false);
  let id_like = props.pid + "" + contxt.loginid;
  const addlike = async (e) => {
    if (e.target.checked) {
      let b = {
        id: id_like,
        userid: contxt.loginid,
        postid: props.pid,
        liked: true,
      };
  
      try {
        await apicall.post("/likes", b);
        let l =await apicall.get("/likes");
        contxt.setLikes(l);
      } catch (e) {
        console.log(e);
      }
    } else {
      try {
        await apicall.delete(`/likes/${id_like}`);
        let l = await apicall.get("/likes");
        contxt.setLikes(l);
      } catch (e) {
        console.log(e);
      }
    }
  };
  React.useEffect(() => {
    contxt.posts.map((i) => {
      if (i.id == details) {
        setDetails(i);
      }
    });
  }, [details]);

  React.useEffect(() => {
    window.scrollTo(0, 0);
   
  }, []);
 

  const shareit = async (e) => {
    let a;
    contxt.posts.map((i) => {
      if (i.id == e.target.id) {
        a = {
          id: uid(),
          title: i.title + " with " + i.author,
          author: contxt.login,
          contentimg: i.contentimg,
          content: i.content,
        };
      }
    });
    try {
      apicall.post("/posts", a);
      let allposts = await apicall.get("/posts");
      contxt.setPosts(allposts.data);
      alert("This post has been shared successfully");
    } catch (e) {
      console.log(e);
    }
  };
  const already = () => {
    alert("This post is shared already!");
  };
  const editComment = (e) => {
    
    contxt.comments.map(async (i) => {
      if (i.commentid === e.target.id) {
        let a = {
          // id:i.id,
          commentid: i.commentid,
          uid: i.uid,
          usrname: i.usrname,
          username: i.username,
          postid: i.postid,
          commentarea: commentedited,
        };
        try {
          await apicall.put(`/comments/${i.id}`, a);
          let allcomm = await apicall.get("/comments");
          contxt.setComments(allcomm.data)
        } catch (e) {
          console.log(e);
        }
        handleClose();
      }
    });
  };

  const delcomment = async (e) => {
    // alert(e.target.id)
    try {
      await apicall.delete(`/comments/${e.target.id}`);
      let allposts = await apicall.get("/comments");
      contxt.setComments(allposts.data);
    } catch (e) {
      console.log(e);
    }
  };
  const style = {
    position: "absolute",
    top: "50%",
    left: "50%",
    transform: "translate(-50%, -50%)",
    width: 400,
    bgcolor: "white",
    boxShadow: 24,
    p: 4,
  };

  const openforedit = (e) => {
    handleOpen();
    setCommid(e);
  };
  const commentit = async (e) => {
    if(rmvtxt !== ''){
    setRmvtxt('')
    let a = {
      commentid: uid(),
      uid: contxt.loginid,
      usrname: contxt.login,
      postid: post_details.id,
      username: contxt.login,
      commentarea: commenttxt,
    };
    try {
      await apicall.post("/comments", a);
      contxt.setComments([a,...contxt.comments]);
    } catch (e) {
      alert(e);
    }
  }
  else{
    alert("Field is empty");
  }
  };

  
  return (
    <>
      <div>
        <Modal
          open={open}
          onClose={handleClose}
          aria-labelledby="modal-modal-title"
          aria-describedby="modal-modal-description"
        >
          <Box sx={style}>
            <Typography id="modal-modal-title" variant="h6" component="h2">
              Edit comment
            </Typography>
            <Divider />
            <Box sx={{ height: "50px" }}></Box>
            <div className="postcontnt">
              <InputBase
                onChange={(e) => {
                  setEditedComment(e.target.value);
                }}
               
                sx={{ ml: 1, flex: 1 }}
                placeholder="Comment...."
                inputProps={{ "aria-label": "Comment...." }}
              />
              <i
                onClick={editComment}
                class="fa fa-paper-plane"
                aria-hidden="true"
                id={commid}
                style={{ cursor: "pointer" }}
              ></i>
            </div>
          </Box>
        </Modal>
      </div>
      <div className="homepage">
        <div className="postbox">
          <div className="upperarea">
            <div className="user_pic_post">
              
              <p className="post_username">Title : {post_details.title}</p>
             
            </div>
            
          </div>
          <img className="post_pic" alt="" src={post_details.contentimg} />
          <p className="post_txt">{post_details.content}</p>
          <div className="upperarea">
            <div className="user_pic_post">
              
              <p className="post_username">Author : {post_details.author}</p>
           
            </div>
            {post_details.author === contxt.login ? (
              <ShareOutlinedIcon
                onClick={already}
                id={post_details.id}
                sx={{ margin: "15px 5px", fontSize: "20px", cursor: "pointer" }}
              />
            ) : (
              <ShareOutlinedIcon
                onClick={shareit}
                id={post_details.pid}
                sx={{ margin: "15px 5px", fontSize: "20px", cursor: "pointer" }}
              />
            )}
          </div>
        </div>
      </div>
      <div className="homepagedown">
        <div className="postbox">
          <div className="postcontnt">
          <Checkbox
              onChange={addlike}
              {...label}
              icon={<ThumbUpOffAltIcon />}
              checkedIcon={<ThumbUpIcon sx={{ color: "#0A789B" }} />}
            />
            <InputBase
            id="commentarea"
              sx={{ ml: 1, flex: 1 }}
              placeholder="Comment...."
              inputProps={{ "aria-label": "Comment...." }}
              onChange={(e) => {
                setCommenttxt(e.target.value);
                setRmvtxt(e.target.value)
              }}
              value={rmvtxt}
            />
            <SendOutlinedIcon
              
              onClick={commentit}
              sx={{ margin: "5px 5px", cursor: "pointer" }}
            />
          </div>
        </div>
        {contxt.comments.map((i) => {
          if (post_details.id == i.postid) {
            return (
              <div className="postbox">
                <div className="postcontnt">
                  <p>
                    <b>{i.usrname}: </b> <span>{i.commentarea}</span>
                  </p>
                  {i.usrname == contxt.login && (
                    <p>
                      <i
                        style={{ cursor: "pointer" }}
                        onClick={()=>{openforedit(i.commentid)}}
                        class="fa fa-edit"
                        id={i.commentid}
                        aria-hidden="true"
                      ></i>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <i
                        style={{ cursor: "pointer" }}
                        onClick={delcomment}
                        class="fa fa-trash"
                        id={i.id}
                        aria-hidden="true"
                      ></i>
                    </p>
                  )}
                </div>
              </div>
            );
          }
        })}
      </div>
    </>
  );
};

export default SinglePost;
