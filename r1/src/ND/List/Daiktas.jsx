import { findAllByAltText } from "@testing-library/react";
import { useState } from "react";
import { seaPlaners } from "./seaPlaners";

function Daiktas(isPair) {
  const isPair = 'porinis';
  const [daiktas, setDaiktas] = useState(seaPlaners);

  // const arPorinis = (element) => element % 2 === 0;              //bandymas
  // const found = daiktas.find(element => element.id % 2 );        //bandymas
  // const found = daiktas.find(element => element.id % 2 === 0 );  //bandymas

  const getID = daiktas.map(array=>array.id);
  console.log(getID);

  // const arPorinis = (element) => element % 2 === 0 ? true : false; // funkcija iksti i retrun galima

  if (isPair === 'porinis') {
  return (
    daiktas.map((daiktai,index) =>  daiktai.id % 2 === 0 ? <div  key={index}>{daiktai.id} - {daiktai.name}</div> : null)
    // daiktas.map((daiktai,index) => <div  key={index}>{daiktai.id}{daiktai.name}</div>)
  );}
  else if (isPair === 'neporinis') {
     return (
  daiktas.map((daiktai,index) => daiktai.id % 2 !== 0 ? <div  key={index}>{daiktai.id} - {daiktai.name}</div> : <div>Null</div>));}
}


export default Daiktas;
