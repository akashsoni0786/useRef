import { Route, Routes } from 'react-router-dom';
import './App.css';
import Counter from './Components/Counter';
import Home from './Pages/Home';

function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/tool" element={<Home />} />
        <Route path="/reducer" element={<Counter />} />
      </Routes>
    </div>
  );
}

export default App;
