import "./App.css";
import { useState } from "react";

// import Bala from './ND/List/Bala';
// import Tvenkinys from './ND/List/02-Uzduotis/Tvenkinys';
// import Daiktas from './ND/List/02-Uzduotis/Daiktas';
// import Jura from './ND/List/03-Uzduotis/Jura';
// import Valtis from './ND/List/03-Uzduotis/Valtis';
// import Laivas from './ND/List/03-Uzduotis/Laivas';
// import Vandenynas from './ND/List/04-Uzdduotis/Vandenynas';

function App() {

  //1 uzduotis keicia figura
  const [figura, setFigura] = useState("rutulys");
  const changeFigure = () => {
    setFigura((oldFigure) =>
      oldFigure === "rutulys" ? "kvadratas" : "rutulys"  //tikrina className='{figura}'
    );
  };

  // 2-3 uzduotis - keicia {skaicius} propsa
  const [skaicius, setSkaicius] = useState(0);
  const randomNumber = () => setSkaicius(Math.floor(Math.random() * (25 - 5) ) + 5);
  const addNumber = () => setSkaicius((number) =>  number + 1);
  const minusNumber = () => setSkaicius((number) =>  number - 3);

  // 4 uzduotis - prideda kvadratelius
  const [kvadratas, setKvadratas] = useState([]);
  const addCube = () => setKvadratas(kvadratas => [...kvadratas, null]);
  const removeCube = () => setKvadratas(kvadratas => kvadratas.slice(1));

  // 5 uzduotis - add red, add blue ir reset.
  const [kv, setKv] = useState([]);
  const addRed = (color) => setKv(kv => [...kv, color]);
  const addBlue = (color) => setKv(kv => [...kv, color]);
  const reset = () => setKv(kv => []);
  

  return (
    <div className="App">
      <header className="App-header">
        <div className={figura}>{skaicius}</div>
        <div>
          {
            kvadratas.map((kv, i) => <div key={i} className="kvadratukas">{kv}</div> )
          }
        </div>
        <div>
          {
            kv.map((color, i) => <div key={i} className="kvadratukas" style={{background: color}}>{null}</div> )
          }
        </div>
        <button onClick={changeFigure}>Change</button>
        <button onClick={randomNumber}>Random</button>
        <button onClick={addNumber}>Plus</button>
        <button onClick={minusNumber}>Minus</button>
        <button onClick={addCube}>Add</button>
        <button onClick={removeCube}>Remove</button>
        <button onClick={() => addRed('red')}>Add Red</button>
        <button onClick={() => addBlue('blue')}>Add Blue</button>
        <button onClick={reset}>Reset</button>
      </header>
    </div>
  );
}

export default App;
