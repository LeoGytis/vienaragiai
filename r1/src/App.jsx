import "./App.css";
import { useState } from "react";
import Pokemons from "./Components/Pokemons";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Pokemons></Pokemons>
      </header>
    </div>
  );
}

export default App;
