import './App.css';
import { useState } from 'react';

function App() {

    // const cats = ['Pilkis', 'Murka', 'Rainis'];
    // const [kv, setKv] = useState([]);

    const dogs = ['Lupis', 'Tūzikas', 'Šamba', 'Šarikas', 'Bobikas'];
    const [sunys, setSunys] = useState(dogs);

    // const addKv = () => setSunys(dogs => [...dogs]); // funkcija prideti elementa i masyva

    const sortSunys = () => {
        setSunys(dogs => dogs.slice(1)); // funkcija prideti elementa i masyva
    }
   
    return (
      <div className="App">
        <header className="App-header">
            <h1>ND: REACT BASE LIST</h1>
            <div className=''>
            {
                dogs.map((dog,i) => <div key={i}>{dog}</div>)
            }
            <button onClick={sortSunys}>Surikiuoti sunis!</button>
         </div>
        </header>
      </div>
    );
}
  
export default App;
  