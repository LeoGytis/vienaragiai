import { findAllByAltText } from "@testing-library/react";
import { useState } from "react";
import { seaPlaners } from "./seaPlaners";

function Daiktas() {

  const [daiktas, setDaiktas] = useState(seaPlaners);

  // let newArray = [];
  // const arPorinis = (element) => element % 2;

  // const found = daiktas.find(element => element.id % 2 );
  // console.log(found);

  const getID = daiktas.map(s=>s.id);
  console.log(getID);

    // // const found = daiktas.find(element => element.id > 8 );
    // console.log(found);
    // daiktas.find(x => x.id === daiktas.id).foo;
    // }

  return (
    daiktas.map((daiktai,index) => daiktai.id % 2 === 0 ? <div  key={index}>{daiktai.id}{daiktai.name}</div> : null)
    // daiktas.map((daiktai,index) => <div  key={index}>{daiktai.id}{daiktai.name}</div>)
  );
}


export default Daiktas;
