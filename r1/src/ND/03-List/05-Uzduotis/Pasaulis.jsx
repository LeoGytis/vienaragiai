import Akvariumas from "./Akvariumas";
import Garazas from "./Garazas";
import Namas from "./Namas";
import Narvas from "./Narvas";


function Pasaulis() {

  return (
    <>
      <Namas isPair={'porinis'}></Namas>
      <Garazas isPair={'porinis'}></Garazas>
      <Narvas isPair={'porinis'}></Narvas>
      <Akvariumas isPair={'porinis'}></Akvariumas>
    <br></br>
      <Namas isPair={'neporinis'}></Namas>
      <Garazas isPair={'neporinis'}></Garazas>
      <Narvas isPair={'neporinis'}></Narvas>
      <Akvariumas isPair={'neporinis'}></Akvariumas>
    </>
  );
}

export default Pasaulis;
