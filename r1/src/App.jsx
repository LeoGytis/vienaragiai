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
  const [figura, setFigura] = useState("rutulys");
  const [skaicius, setSkaicius] = useState(0);

  const changeFigure = () => {
    setFigura((oldFigure) =>
      oldFigure === "rutulys" ? "kvadratas" : "rutulys"  //tikrina className='{figura}'
    );
  };

  //keicia {skaicius} propsa
  const randomNumber = () => setSkaicius(Math.floor(Math.random() * (25 - 5) ) + 5);
  const addNumber = () => setSkaicius((number) =>  number + 1);
  const minusNumber = () => setSkaicius((number) =>  number - 3);
  

  return (
    <div className="App">
      <header className="App-header">
        <div className={figura}>{skaicius}</div>
        <button onClick={changeFigure}>Change</button>
        <button onClick={randomNumber}>Random</button>
        <button onClick={addNumber}>Plus</button>
        <button onClick={minusNumber}>Minus</button>
        <button onClick={addCube}>Add</button>
      </header>
    </div>
  );
}

export default App;
