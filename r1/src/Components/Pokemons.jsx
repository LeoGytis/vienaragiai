import { useState } from "react";

function Pokemons() {
  const [pokemons, setPokemons] = useState([]);

  const getData = () => {
    fetch("https://pokeapi.co/api/v2/pokemon")
      .then((response) => response.json())
      .then((data) => {
        setPokemons(data.results);
      });
  };
  getData();

  return (
    <div>
      {pokemons.map((pokemon, i) => (
        <div key={i}>
          {pokemon.name}
          <a href={pokemon.url}> Link</a>
        </div>
      ))}
    </div>
  );
}

export default Pokemons;
