import './App.css';
import Quiz from './Quiz';
import {Routes,Route} from "react-router-dom";
import Result from './Result';
import Home from './Home';
import Category from './Category';
function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Routes>
          <Route path="/" element={<Home />}/>
          <Route path="/category" element={<Category />}/>
          <Route path="/quiz" element={<Quiz />}/>
          <Route path="/result" element={<Result />}/>
        </Routes>
        
      </header>
    </div>
  );
}

export default App;
