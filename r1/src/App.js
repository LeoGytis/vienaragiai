import './App.css';
import Hello from './Components/009/Hello';
import Kurmis from './Components/009/Kurmis';

function App() {
  return (
    <div className="App">
      <header className="App-header">
      <Hello spalva="crimson" size='22' skaicius={4}></Hello>
      <Hello spalva="skyblue" size='12' skaicius={4}></Hello>
      <Hello spalva="greenyellow" skaicius={4}></Hello>
      <Kurmis></Kurmis>  
      </header>
    </div>
  );
}

export default App;
