import './App.css';
import React, { useState, useEffect } from 'react';

function App() {

    const dogsArray = [ 'Bobikas', 'Lupis', 'Tūzikas', 'Au', 'Šamba', 'Šarikas'];
    const [dogs, setDogs] = useState(dogsArray);

    // const sortDogs = () => {
    //     setDogs(dogy => dogy.slice(1)); // funkcija atimti viena elementa
    // }

    

    const dogsSortFunction = (a, b) => a.length - b.length; 

    const sortDogs = () => {
        console.log(dogs);
        let sortedDogs = dogs.sort(dogsSortFunction);
        setDogs(sortedDogs);
        console.log(dogs);
        console.log('DOGSaaaaa');
    }
    // const sortDogs = () => {
    //     setDogs(dogs => dogs.sort(function(a,b){
    //         b.length - a.length;
    //         return b.length - a.length; 
    //     }))
    //     dogsArray.sort(function(a, b){
    //         // let a = a(a.service.value);
    //         // let b = b(b.service.value);
    //         // a.length - b.length  // ASCENDING
    //         b.length - a.length;     // DESCENDING
    //         return b.length - a.length;
          
    // }
    
   
    return (
      <div className="App">
        <header className="App-header">
            <h1>ND: REACT BASE LIST</h1>
            <div>
            {
                dogs.map((dogs,i) => <div key={i}>{dogs}</div>)
            }
         </div>
         <button onClick={sortDogs}>Surikiuoti sunis!</button>
        </header>
      </div>
    );
}
  
export default App;
  