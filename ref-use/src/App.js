import { useEffect, useRef, useState } from "react";
import "./App.css";

function App() {
  const [val, setVal] = useState("");

  const prevval = useRef("");

  useEffect(() => {
    prevval.current = val;
  }, [val]);

  return (
    <div className="App">
      <header className="App-header">
        <input
          placeholder="Write here..."
          value={val}
          onChange={(e) => {
            setVal(e.target.value);
          }}
        />
        <p>Current value : {val}</p>
        <p>UseRef() value : {prevval.current}</p>
      </header>
    </div>
  );
}

export default App;
