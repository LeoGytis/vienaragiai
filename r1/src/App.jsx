import "./App.css";
import { useState } from "react";

function App() {
  const dogsArray = ["Bobikas", "Lupis", "Tūzikas", "auau", "Šamba", "Šarikas"];
  const [dogs, setDogs] = useState(dogsArray);

  const dogsSortFunction = (a, b) => b.length - a.length;
  const sortDogs = () => {
    dogs.sort(dogsSortFunction);
    setDogs([...dogs]);
  };

  const countDogs = () => {
    return dogs.map((dog, i) => (
      <div className="dogCage1" key={i}>
        {" "}
        <span>{i + " - "}</span> {dog}
      </div>
    )); // Iskelia sunis i ekrana
  };

  const isLowerCase = (value) =>  value.charAt(0) !== value.charAt(0).toLowerCase(); // Tikrina ar pirmoji raide didzioji

  return (
    <div className="App">
      <header className="App-header">
        <h3>ND: REACT BASE LIST</h3>
        <div>
          {dogs.map((dog, index) => {
            if (!isLowerCase(dog)) return null; //Ka rasyt vietoj return ???
            if (index % 2 === 0)
              return (
                <div className="dogCage1" key={index}>
                  {dog + " " + dog.length}
                </div>
              );

            return (
              <div className="dogCage2" key={index}>
                {dog + " " + dog.length}
              </div>
            );
          })}
        </div>
        <div>{}</div>
        <button onClick={sortDogs}>Surikiuoti sunis!</button>
        <button onClick={countDogs}>Suskaiciuoti sunis!</button>
      </header>
    </div>
  );
}

export default App;
