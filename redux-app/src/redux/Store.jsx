import { createStore } from "redux";
import reducer  from "./DataReducer";
const store = createStore(reducer);
export default store;
