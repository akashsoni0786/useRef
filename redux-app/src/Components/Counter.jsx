import React, { useState } from "react";
import { useDispatch, useSelector } from "react-redux";

function Counter() {
  // reading
  const count = useSelector((store) => {
    return store;
  });
  const [incCount, setIncCount] = useState();
  // update
  const dispatch = useDispatch();
  const handleIncrement = () => {
    dispatch({ type: "INCREMENT" });
  };
  const handleDecrement = () => {
    dispatch({ type: "DECREMENT" });
  };

  const updateByN = () => {
    dispatch({ type: "INCREEMENTBYN", payload: incCount });
  };
  return (
    <div>
      <input
        value={incCount}
        onChange={(e) => {
          setIncCount(e.target.value);
        }}
      ></input>
      <button onClick={updateByN}>Submit</button>
      <div>
        <button onClick={handleIncrement}>+</button>
        <h3>{count}</h3>
        <button onClick={handleDecrement}>-</button>
      </div>
    </div>
  );
}

export default Counter;

/***
 * components -> UI
 * hook -> logic
 * redux -> global state managment
 *
 * **/
