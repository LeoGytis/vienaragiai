import "./App.css";
import { useState } from "react";

function ClassState() {
    const [figura, setFigura] = useState("rutulys");
    const [skaicius, setSkaicius] = useState();
  
    const changeFigure = () => {
      setFigura((oldFigure) =>
        oldFigure === "rutulys" ? "kvadratas" : "rutulys"  //tikrina className='{figura}'
      );
    };
  
    const randomNumber = () => {
      setSkaicius((number) => {return Math.floor(Math.random() * (25 - 5) ) + 5})
    }
  
    return (
      <div className="App">
        <header className="App-header">
          <div className={figura}>{skaicius}</div>
          <button onClick={changeFigure}>Change</button>
          <button onClick={randomNumber}>Random</button>
        </header>
      </div>
    );
  }
  
  export default ClassState;