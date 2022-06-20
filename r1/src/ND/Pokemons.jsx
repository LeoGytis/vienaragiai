import { useState } from "react";

function Pokemons() {
  const [pokemon, setPokemon] = useState([]);

  const getData = () => {
    fetch("https://pokeapi.co/api/v2/pokemon")
      .then((response) => response.json())
      .then((data) => {
        setPokemon(data.results);
      });
  };
  getData();

  return (
    <div className="App">
      <header className="App-header">
        <Pokemons></Pokemons>
        {/* <div>
          {pokemon.map((pokemon, i) => (
            <div key={i}>
              {pokemon.name}
              <a href={pokemon.url}> Linkas</a>
            </div>
          ))} */}
        {/* </div> */}
      </header>
    </div>
  );
}

export default Pokemons;
