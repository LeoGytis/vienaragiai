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

  const isLowerCase = (value) =>  value.charAt(0) !== value.charAt(0).toLowerCase(); // Tikrina ar pirmoji raide didzioji

  return (
    <div className="App">
      <header className="App-header">
        <h3>ND: REACT BASE LIST</h3>
        <h4>4 UZDUOTIS</h4>
        <div>
          {dogs.map((dog, index) => {
            if (!isLowerCase(dog)) return null; 
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
        <div>{}</div>
        <button onClick={sortDogs}>Surikiuoti sunis!</button>
      </header>
    </div>
  );
}

export default App;
