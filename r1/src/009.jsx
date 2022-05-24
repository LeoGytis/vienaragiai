import './App.css';
import Hello from './Components/009/Hello';
import Kurmis from './Components/009/Kurmis';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Hello spalva="crimson" size={14}></Hello>
        <Kurmis></Kurmis>
        <Hello spalva="skyblue" size={22}></Hello>
        <Hello spalva="yellow" size={33}></Hello>
      </header>
    </div>
  );
}

export default App;