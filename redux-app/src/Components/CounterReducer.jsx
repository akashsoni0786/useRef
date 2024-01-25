import React, { useReducer } from "react";
const Reducer = (state, action) => {
  switch (action) {
    case "INCREMENT":
      return state + 1;
    case "DECREMENT":
      return state - 1;
    case "INCREEMENTBY5":
      return state + 5;
    case "DECREMENTBY5":
      return state - 5;
    default:
      return state;
  }
};
const initalState = 0;
const CounterReducer = () => {
  const [cState, dispatch] = useReducer(Reducer, initalState);
  return (
    <div>
      <button
        onClick={() => {
          dispatch("INCREMENT");
        }}
      >
        Increment
      </button>
      <h2>{cState}</h2>
      <button
        onClick={() => {
          dispatch("DECREMENT");
        }}
      >
        Decrease
      </button>
    </div>
  );
};

export default CounterReducer;
