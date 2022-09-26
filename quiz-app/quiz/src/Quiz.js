import React, { useState } from "react";
import "./App.css";
import Radio from "@mui/material/Radio";
import RadioGroup from "@mui/material/RadioGroup";
import FormControlLabel from "@mui/material/FormControlLabel";
import { questions } from "./data";
import { Button } from "@mui/material";
import { contxtname } from "./Context";
import { useNavigate } from "react-router-dom";
const style= {
  margin:"0px 50px",
  width:"100px"
}
const Quiz = () => {
  const contxt = React.useContext(contxtname);
  
  const navigate = useNavigate();
  const [ans, setAns] = useState(["", "", "", "", ""]);
  const [res, setRes] = useState("");
  const [serial, setSerial] = useState(1);

  let [time, setTime] = useState(50);

  React.useEffect(() => {
      let timer = setInterval(() => {
        setTime(time - 1);
      }, 1000)
      if(time === 0){
        navigate("/result");
        setTime(0);
      }
      else{
        return () => clearInterval(timer);
      }
      
  });


  const answers = (e, ind) => {
    if (e.target.checked) {
      let a = [...ans];
      a[ind - 1] = e.target.value;
      setAns(a);
    }
  };
  const submitans = () => {
    let score = 0;
    ans.map((i, index) => {
      if (questions[index].answer == i) {
        score = score + 1;
      }
    });
    setRes(score);
    contxt.setPoints(score);
    navigate("/result");
  };

let k=0;
  return (
    <div>
      <div className="headquiz"><h1>Quiz</h1>
      <h4>Left time: {time}</h4></div>
      {questions.map((i) => {
        if(i.category==contxt.category){
          
        // setSerial(serial+1);
        k=k+1;
          return (
          <div className="quesdiv">
            <div>
              <h3>
                {k}. {i.ques}
              </h3>
            </div>
            <div>
              <RadioGroup
                aria-labelledby="demo-radio-buttons-group-label"
                defaultValue="female"
                name="radio-buttons-group"
              >
                {i.options.map((optn) => {
                  return (
                    <FormControlLabel
                      value={optn}
                      control={
                        <Radio
                          onChange={(e) => {
                            answers(e, i.sno);
                          }}
                        />
                      }
                      label={optn}
                    />
                  );
                })}
              </RadioGroup>
            </div>
          </div>
        )};
      })}
      <Button variant="contained"  onClick={submitans}>
        Submit
      </Button>
      <Button variant="contained"sx={style} onClick={()=>{navigate("/category")}}>
        Quit
      </Button>
    </div>
  );

};

export default React.memo(Quiz);
