import './App.css';
import { useState } from 'react';
import randColor from './Functions/randColor';

function App() {
    const [spalva, setSpalva] = useState('crimson');
    const [skaicius, setSkaicius] = useState(1);

    const cats = ['Pilkis', 'Murka', 'Rainis'];
    const [kv, setKv] = useState([]);

    const stebuklas = () => {
        console.log('Stebuklu stebuklas');
        setSpalva('yellow');
        return kitasStebuklas;
    }

    const kitasStebuklas = (a) => {
        console.log('Kitas stebuklu stebuklas ' + a);
        // const newColor = spalva === 'crimson' ? 'skyblue' : 'crimson';
        // setSpalva(newColor);
        setSpalva((oldColor) => oldColor === 'crimson' ? 'skyblue' : 'crimson');
        console.log(spalva);
    }

    const suma = () => {
        setSkaicius(skaicius + 1);
    }

    // const add = () => {
    //     setNr(n => n + 1);
    // }

    const addKv = () => setKv(kvM => [...kvM, randColor()]); // funkcija prideti elementa i masyva
    
    const remKV = () => setKv(kvM => kvM.slice(1)); // grazinti kopija be vieno (pirmo) gabaliuko

    return (
      <div className="App">
        <header className="App-header">
         <h1 style={{color:spalva}}>Pamoka 009<br></br>{skaicius}</h1>
         <div className='kvc'>
            {
                //  cats.map((cat,i) => <div key={i}>{cat}</div>)
                kv.map((c, i) => <div key={i} className="kv" style={{background: c}}>{i}</div>)
            }
         </div>
         <button onClick={addKv}>Prideti []</button>
         <button onClick={remKV}>Atimit</button>
         <button onClick={suma}>Prideti skaiciu</button>
         <button onClick={stebuklas}>Mygtukas -BE- parametru</button>
         <button onClick={() => kitasStebuklas('Abra-kadabra')}>Mygtukas -SU- parametru</button>

        </header>
      </div>
    );
  }
  
  export default App;
  