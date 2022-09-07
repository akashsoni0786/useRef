import React from "react";
import MyCarousel from "./Carousel";
import "./App.css";
import ArrowBackIosIcon from "@mui/icons-material/ArrowBackIos";
import ArrowForwardIosIcon from "@mui/icons-material/ArrowForwardIos";
import { IconButton } from "@mui/material";
import { Link, useNavigate } from "react-router-dom";
import { contxtname } from "./Context";
import Footer from "./Footer";
import Backdrop from "@mui/material/Backdrop";
import Box from "@mui/material/Box";
import Modal from "@mui/material/Modal";
import Fade from "@mui/material/Fade";
import Typography from "@mui/material/Typography";
import CancelIcon from "@mui/icons-material/Cancel";
import SearchIcon from "@mui/icons-material/Search";
import InputBase from "@mui/material/InputBase";
import { styled, alpha } from "@mui/material/styles";
import Carousel from "react-material-ui-carousel";

const style = {
  position: "absolute",
  top: "50%",
  left: "50%",
  transform: "translate(-50%, -50%)",
  width: "40%",
  bgcolor: "background.paper",
  border: "2px solid #000",
  boxShadow: 24,
  p: 4,
};
const Search = styled("div")(({ theme }) => ({
  position: "relative",
  borderRadius: theme.shape.borderRadius,
  backgroundColor: alpha(theme.palette.common.white, 0.15),
  "&:hover": {
    backgroundColor: alpha(theme.palette.common.white, 0.25),
  },
  marginRight: theme.spacing(2),
  marginLeft: 0,
  width: "100%",
  [theme.breakpoints.up("sm")]: {
    marginLeft: theme.spacing(3),
    width: "auto",
  },
}));

const SearchIconWrapper = styled("div")(({ theme }) => ({
  padding: theme.spacing(0, 2),
  height: "100%",
  position: "absolute",
  pointerEvents: "none",
  display: "flex",
  alignItems: "center",
  justifyContent: "center",
}));
const txtstyle = {
  color: "gray",
  fontWeight: "900",
  "&:hover": {
    color: "orange",
  },
};
const StyledInputBase = styled(InputBase)(({ theme }) => ({
  color: "inherit",
  "& .MuiInputBase-input": {
    padding: theme.spacing(1, 1, 1, 0),
    paddingLeft: `calc(1em + ${theme.spacing(4)})`,
    transition: theme.transitions.create("width"),
    width: "100%",
    [theme.breakpoints.up("md")]: {
      width: "20ch",
    },
  },
}));
const Home = () => {
  const contxt = React.useContext(contxtname);
  const [open, setOpen] = React.useState(false);
  const navigate = useNavigate();
  const handleOpen = () => setOpen(true);
  const handleClose = () => setOpen(false);

  React.useEffect(() => {
    setTimeout(()=>handleOpen(),5000)
  }, []);
  const goleft = () => {
    document.getElementById("sweetcarousel").scrollLeft -= 220;
  };
  const goright = () => {
    document.getElementById("sweetcarousel").scrollLeft += 220;
  };
  const sendtocategorypage = (e) => {
    contxt.setCat_Products(e.target.id);
  };
  const sendtocategorypage2 = (e) => {
    contxt.setCat_Products(e.target.textContent);
  };
  var search_val = [];
  const search_products = (e) => {
    navigate("/search");
    var searchtext = e.target.value;

    contxt.products.map((i) => {
      if (i.pname.toLowerCase().includes(searchtext)) {
        search_val = [...search_val, i];
        contxt.setSearchtxtar(search_val);
      }
    });
  };
  return (
    <>
      <div style={{ position: "relative" }}>
        <Modal
          aria-labelledby="transition-modal-title"
          aria-describedby="transition-modal-description"
          open={open}
          onClose={handleClose}
          closeAfterTransition
          BackdropComponent={Backdrop}
          BackdropProps={{
            timeout: 500,
          }}
        >
          <Fade in={open}>
            <Box sx={style}>
              <IconButton
                onClick={handleClose}
                sx={{
                  position: "absolute",
                  top: "0px",
                  right: "0px",
                  cursor: "pointer",
                  color: "red",
                }}
              >
                <CancelIcon />
              </IconButton>

              <Box>
                <Typography
                  id="transition-modal-title"
                  variant="h6"
                  component="h2"
                  sx={{ fontSize: "2.5vw" }}
                >
                  Our offer week .........
                </Typography>
                <img
                  alt=""
                  style={{ width: "30vw" }}
                  src="https://i.pinimg.com/originals/7f/af/c2/7fafc2c3a9624a13fc635c20fc3f82be.jpg"
                />
              </Box>
              <Typography
                id="transition-modal-title"
                variant="h6"
                sx={{ fontSize: "2.5vw" }}
              >
                Apply "AKASH100" and get 100 rupees off
              </Typography>
            </Box>
          </Fade>
        </Modal>
      </div>
      <div style={{ marginTop: "20px" }}>
        <MyCarousel />
        <p className="heading">Gifts</p>
        <div className="galary">
          <img
            onClick={sendtocategorypage}
            id="Cards"
            className="giftimg"
            alt=""
            src="https://image3.jdomni.in/banner/13092021/2E/F3/6F/7DAF227462847F96373FF8DED7_1631511930019.png?output-format=webp"
          />
          <img
            onClick={sendtocategorypage}
            id="Cups"
            className="giftimg"
            alt=""
            src="https://image1.jdomni.in/banner/13092021/A1/96/F1/4972881467BACD90D7C227FA0A_1631511943612.jpg?output-format=webp"
          />
          <img
            onClick={sendtocategorypage}
            id="Keyrings"
            className="giftimg"
            alt=""
            src="https://image2.jdomni.in/banner/13092021/44/BE/15/D2E65FCFFE8A7A2E55E6221BC6_1631511976146.jpg?output-format=webp"
          />
          <img
            onClick={sendtocategorypage}
            id="Gift hampers"
            className="giftimg"
            alt=""
            src="https://image3.jdomni.in/banner/13092021/60/5D/EA/043698C307F1B51374586D0C0B_1631512135393.jpg?output-format=webp"
          />
        </div>
        <p className="heading">Toys zone </p>
        <div className="sweetcarouselparent">
          <div className="carouselbtn" onClick={goleft}>
            <ArrowBackIosIcon sx={{ color: "white", marginLeft: "8px" }} />
          </div>
          <div id="sweetcarousel" className="sweetscarousel">
            <div className="sweetcard">
              <Link to="/category">
                <img
                  onClick={sendtocategorypage}
                  id="Quality Plastics"
                  className="sweetpic"
                  alt=""
                  src="https://image3.jdomni.in/banner/13092021/BD/F4/D4/F119514FF17943652D09C807E7_1631513171400.png?output-format=webp"
                />
              </Link>
              <Link to="/category" style={{ textDecoration: "none" }}>
                <p onClick={sendtocategorypage2} className="sweetname">
                  Quality Plastics
                </p>
              </Link>
            </div>
            <div className="sweetcard">
              <Link to="/category">
                <img
                  onClick={sendtocategorypage}
                  id="Remote Controls"
                  className="sweetpic"
                  alt=""
                  src="https://image1.jdomni.in/banner/13092021/27/30/C7/E602B85AA7FE7354D0B673286F_1631513200598.png?output-format=webp"
                />
              </Link>
              <Link to="/category" style={{ textDecoration: "none" }}>
                <p onClick={sendtocategorypage2} className="sweetname">
                  Remote Controls
                </p>
              </Link>
            </div>

            <div className="sweetcard">
              <Link to="/category">
                <img
                  onClick={sendtocategorypage}
                  id="Barbies"
                  className="sweetpic"
                  alt=""
                  src="https://image2.jdomni.in/banner/13092021/2D/35/29/92C6727DAE46474DE8736ED6EF_1631513272343.png?output-format=webp"
                />
              </Link>
              <Link to="/category" style={{ textDecoration: "none" }}>
                <p onClick={sendtocategorypage2} className="sweetname">
                  Barbies
                </p>
              </Link>
            </div>

            <div className="sweetcard">
              <Link to="/category">
                <img
                  onClick={sendtocategorypage}
                  id="Mini Soft Toys"
                  className="sweetpic"
                  alt=""
                  src="https://image3.jdomni.in/banner/13092021/03/19/C5/050E71F460F7127CD9ED626B89_1631513349155.png?output-format=webp"
                />
              </Link>
              <Link to="/category" style={{ textDecoration: "none" }}>
                <p onClick={sendtocategorypage2} className="sweetname">
                  Mini Soft Toys
                </p>
              </Link>
            </div>

            <div className="sweetcard">
              <Link to="/category">
                <img
                  onClick={sendtocategorypage}
                  id="Cards"
                  className="sweetpic"
                  alt=""
                  src="https://image3.jdomni.in/banner/13092021/2E/F3/6F/7DAF227462847F96373FF8DED7_1631511930019.png?output-format=webp"
                />
              </Link>
              <Link to="/category" style={{ textDecoration: "none" }}>
                <p onClick={sendtocategorypage2} className="sweetname">
                  Cards
                </p>
              </Link>
            </div>

            <div className="sweetcard">
              <Link to="/category">
                <img
                  onClick={sendtocategorypage}
                  id="Cups"
                  className="sweetpic"
                  alt=""
                  src="https://image1.jdomni.in/banner/13092021/A1/96/F1/4972881467BACD90D7C227FA0A_1631511943612.jpg?output-format=webp"
                />
              </Link>
              <Link to="/category" style={{ textDecoration: "none" }}>
                <p onClick={sendtocategorypage2} className="sweetname">
                  Cups
                </p>
              </Link>
            </div>

            <div className="sweetcard">
              <Link to="/category">
                <img
                  onClick={sendtocategorypage}
                  id="Keyrings"
                  className="sweetpic"
                  alt=""
                  src="https://image2.jdomni.in/banner/13092021/44/BE/15/D2E65FCFFE8A7A2E55E6221BC6_1631511976146.jpg?output-format=webp"
                />
              </Link>
              <Link to="/category" style={{ textDecoration: "none" }}>
                <p onClick={sendtocategorypage2} className="sweetname">
                  Keyrings
                </p>
              </Link>
            </div>

            <div className="sweetcard">
              <Link to="/category">
                <img
                  onClick={sendtocategorypage}
                  id="Gift hampers"
                  className="sweetpic"
                  alt=""
                  src="https://image3.jdomni.in/banner/13092021/60/5D/EA/043698C307F1B51374586D0C0B_1631512135393.jpg?output-format=webp"
                />
              </Link>
              <Link to="/category" style={{ textDecoration: "none" }}>
                <p onClick={sendtocategorypage2} className="sweetname">
                  Gift hampers
                </p>
              </Link>
            </div>
          </div>
          <div onClick={goright} className="carouselbtn">
            <ArrowForwardIosIcon sx={{ color: "white", marginLeft: "5px" }} />
          </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <div className="aboutdiv">
          <div className="aboutcontent">
            <p className="heading"> About Us </p>

            <p className="aboutus">
              We Kids Fun Zone at Malad West, Mumbai, Maharashtra, offer you the
              largest range of toys and personalized gifts at extremely
              affordable prices. A moment of celebration for your loved ones
              with a gift that touches their heart, undoubtedly makes the
              occasion memorable. We are also the ideal place source for the
              perfect game or toy for your child. We strive to present before
              you the best and trendy collection.
            </p>
          </div>

          <img
            style={{ borderRadius: "20px" }}
            alt=""
            src="https://image3.jdomni.in/banner/13092021/68/B0/35/0A2D9E59B97B325C110A4D261E_1631509385662.jpg?output-format=webp"
          />
        </div>
        <p className="heading">Gallery</p>
        <div className="galary">
          <img
            className="galaryimg"
            alt=""
            src="https://image3.jdomni.in/banner/13092021/32/91/D5/4519D7A04326DEF1A98C83F455_1631513645119.jpg?output-format=webp"
          />
          <img
            className="galaryimg"
            alt=""
            src="https://image2.jdomni.in/banner/13092021/07/9B/1D/8BC0FEA57199836272E2A37DD4_1631513645238.jpg?output-format=webp"
          />
          <img
            className="galaryimg"
            alt=""
            src="https://image1.jdomni.in/banner/13092021/A6/F7/54/672C56375C03A35D08321177B4_1631513644556.jpg?output-format=webp"
          />
        </div>
        <p className="heading">Testimonials</p>
        <div className="backtestimonial">
          <Carousel>
            <Box
              sx={{
                backgroundColor: "transparent",
                paddingTop: "20vh",
                textAlign: "center",
                zIndex: "2",
                fontFamily: "'Happy monkey',cursive",
              }}
            >
              <img alt="" style={{width:"40px"}} src="https://cdn-icons-png.flaticon.com/512/1948/1948377.png"/>
              <Typography
                sx={{ textAlign: "center", fontSize: "20px", color: "black" }}
              >
                My child is really happy with the toys I got for him from this
                store. Thank you!
              </Typography>

              <Typography
                sx={{
                  textAlign: "center",
                  fontSize: "20px",
                  fontWeight: "bolder",
                }}
              >
                " Vaibhav Tiwari "
              </Typography>
              <img alt="" style={{width:"40px",marginTop:"40px"}} src="https://cdn-icons-png.flaticon.com/512/1948/1948377.png"/>
            </Box>

            <Box
              sx={{
                backgroundColor: "transparent",
                paddingTop: "20vh",
                textAlign: "center",

                fontFamily: "'Happy monkey',cursive",
              }}
            ><img alt="" style={{width:"40px"}} src="https://cdn-icons-png.flaticon.com/512/1948/1948377.png"/>
              <Typography sx={{ textAlign: "center", fontSize: "20px" }}>
                I always buy Diwali gifts for my employees from here! They
                really have a wide range of products. Certainly the best in this
                market.
              </Typography>
              <Typography
                sx={{
                  textAlign: "center",
                  fontSize: "20px",
                  fontWeight: "bolder",
                }}
              >
                " Arvind Singh "
              </Typography>
              <img alt="" style={{width:"40px",marginTop:"40px"}} src="https://cdn-icons-png.flaticon.com/512/1948/1948377.png"/>
            </Box>

            <Box
              sx={{
                backgroundColor: "transparent",
                paddingTop: "20vh",
                textAlign: "center",

                fontFamily: "'Happy monkey',cursive",
              }}
            >
              <img alt="" style={{width:"40px"}} src="https://cdn-icons-png.flaticon.com/512/1948/1948377.png"/>
              <Typography sx={{ textAlign: "center", fontSize: "20px" }}>
                I have been in association with them for a year now. And mark my
                words the gift quality of products will never let you down.
              </Typography>
              <Typography
                sx={{
                  textAlign: "center",
                  fontSize: "20px",
                  fontWeight: "bolder",
                }}
              >
                " Kamal Rai "
              </Typography>
              <img alt="" style={{width:"40px",marginTop:"40px"}} src="https://cdn-icons-png.flaticon.com/512/1948/1948377.png"/>
              <Typography sx={{ textAlign: "center", fontSize: "20px" }}></Typography>
            </Box>
          </Carousel>
        </div>
        <p className="heading">Contact Us</p>

        <div className="contactusform">
          <div className="contactusfomat">
            <div className="inputss">
              <input className="inputofcontact" placeholder="Enter name" />
              <input
                className="inputofcontact"
                placeholder="Enter mobile number"
                type="Number"
              />
              <input className="inputofcontact" placeholder="Enter mail id" />
            </div>

            <textarea
              className="inputofcontactmsg"
              placeholder="Enter message"
            />
          </div>
          <div className="sendbtn">Submit</div>
        </div>
        <Footer />
      </div>
    </>
  );
};

export default Home;
