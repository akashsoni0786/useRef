import React from "react";
import { contxtname } from "./Context";
import "./App.css";
import { Button } from "@mui/material";
import { useNavigate } from "react-router-dom";

const Result = () => {
  const contxt = React.useContext(contxtname);
  const navigate = useNavigate();
  return (
    <div>
      <div className="resdiv">
        {contxt.points == 0 ? (
          <img
            alt=""
            src="https://c.tenor.com/mnueLjmmE7kAAAAC/total-loser-luser.gif"
          />
        ) : (
          <>
            {contxt.points == 5 ? (
              <img
                alt=""
                src="https://c.tenor.com/ZfoXZiKQ3NsAAAAi/baby-cute.gif"
              />
            ) : (
              <img
                alt=""
                src="https://c.tenor.com/7hq-VrYHlTkAAAAM/tic-tac-keep-it-up.gif"
              />
            )}
          </>
        )}
        <p>You score total {contxt.points} points out of 5.</p>
        <Button variant="contained" onClick={()=>{navigate("/category")}}>Retest</Button>
      </div>
    </div>
  );
};

export default React.memo(Result);
