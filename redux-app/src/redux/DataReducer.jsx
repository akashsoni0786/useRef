let initialState = 0;
const reducer = (state = initialState, action) => {
  switch (action.type) {
    case "INCREMENT":
      return state + 1;
    case "DECREMENT":
      return state - 1;
    case "INCREEMENTBYN":
      return state + Number(action.payload);
    case "DECREMENTBYN":
      return state - Number(action.payload);
    default:
      return state;
  }
};
export default reducer;

