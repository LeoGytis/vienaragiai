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

  return (
    <div className="App">
      <header className="App-header">
        <h3>ND: REACT BASE LIST</h3>
        <h4>3 UZDUOTIS</h4>
        <div>
          {dogs.map((dog, index) => {
            if (index % 2 === 0)
              return (
                <div className="dogCage1" key={index}>
                  {dog}
                </div>
              );

            return (
              <div className="dogCage2" key={index}>
                {dog}
              </div>
            );
          })}
        </div>
        <button onClick={sortDogs}>Surikiuoti sunis!</button>
      </header>
    </div>
  );
}

export default App;
