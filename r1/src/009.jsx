import './App.css';
import Ezys from './Components/009/Ezys';
import Hello from './Components/009/Hello';
import Kurmis from './Components/009/Kurmis';
import Zaltys from './Components/009/Zaltys';
import ZirB from './Components/009/ZirB';
import Zuikis from './Components/009/Zuikis';

function App() {
  return (
    <div className="App">
      <header className="App-header">
      <Zaltys txt1='Zaltys susiranges rangos' txt2='Samanose zaliose' spalva='yellowgreen'></Zaltys>  
        {/* <Ezys tekstas1='Ezys gyvena miske' tekstas2='Ir renka obuolius'></Ezys> */}
      <ZirB skaicius={1}></ZirB>
      <Zuikis tekstas='Zuiki, zuiki ilgaausi!' gyvunai='Zebrai ir Bebrai'></Zuikis>
      <Hello spalva="greenyellow" size='22' skaicius={4}></Hello>
      </header>
    </div>
  );
}

export default App;
