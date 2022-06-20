import "./App.css";
import { useState } from "react";
import Pokemons from "./ND/Pokemons";

function App() {
  // const [pokemon, setPokemon] = useState([]);

  // const getData = () => {
  //   // let pokemons = [];
  //   fetch("https://pokeapi.co/api/v2/pokemon")
  //     .then((response) => response.json())
  //     .then((data) => {
  //       // console.log("My data here", data.results);
  //       setPokemon(data.results);
  //     });
  // };
  // getData();

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
          ))}
        </div> */}
      </header>
    </div>
  );
}

export default App;

// import "./styles.css";

// export default function App() {
//   return (
//     <>
//       <h2>Užduotis su vienu API</h2>
//       <ol className="App" style={{ textAlign: "left" }}>
//         <li>
//           Gauti visus duomenis iš{" "}
//           <a href="https://pokeapi.co/api/v2/pokemon">
//             https://pokeapi.co/api/v2/pokemon
//           </a>{" "}
//           API ir išrenderinti Pokemons komponente.
//           <strong> Nenaudoti bibliotekų. </strong> Pvz.{" "}
//           <a href="https://reactjs.org/docs/faq-ajax.html">
//             https://reactjs.org/docs/faq-ajax.html{" "}
//           </a>
//         </li>
//         <li>
//           Pokemons komponente turėtų būti panaudotas Pokemon komponentas, kuris
//           per props gauna <strong>name</strong> ir <strong>url</strong> iš API.
//         </li>
//       </ol>
//     </>
//   );
// }
