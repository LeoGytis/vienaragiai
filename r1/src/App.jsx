import './App.css';
import { useState } from 'react';

function App() {

    const dogsArray = [ 'Bobikas', 'Lupis', 'Tūzikas', 'auau', 'Šamba', 'Šarikas'];
    const [dogs, setDogs] = useState(dogsArray);

    const dogsSortFunction = (a, b) => b.length - a.length; 
    const sortDogs = () => {
        dogs.sort(dogsSortFunction);
        setDogs([...dogs])
    }
   
    const countDogs = () => {
        dogs.map((dog,i) => <div className="dogCage1" key={i}> <span>{i + " - "}</span> {dog}</div>) // Iskelia sunis i ekrana
    }

    function isLowerCase(value) {     // Tikrina ar pirmoji raide didzioji
        return value.charAt(0) !== value.charAt(0).toLowerCase();
    }

    function countLetters(array) {
        for (let i = 0; i < array.length; i++) {
            console.log('valio');
        }
    } 

    return (
      <div className="App">
        <header className="App-header">
            <h3>ND: REACT BASE LIST</h3>
            <div>
            {
               dogs.map((dog,index) => {
                if (!isLowerCase(dog)) { return 0; }   //Ka rasyt vietoj return ???
                if (index % 2 === 0) {
                 return ( <div className="dogCage1" key={index}>{dog}</div> ); 
                }
                return ( <div className="dogCage2" key={index}>{dog}</div> );
                })
            }
         </div>
         <div>
             {
                countLetters(dogs)    
             }
         </div>
         <button onClick={sortDogs}>Surikiuoti sunis!</button>
         <button onClick={countDogs}>Suskaiciuoti sunis!</button>
        </header>
      </div>
    );
}
  
export default App;
  