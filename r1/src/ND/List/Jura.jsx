import { useState } from "react";
import { seaPlaners } from "./seaPlaners";
import Valtis from "./Valtis";
import Laivas from "./Laivas";
import Sala from "./Sala";

function Jura() {
  const [daiktas, setDaiktas] = useState(seaPlaners);

  return (
     <><div>{
    daiktas.map((daiktai, index) =>
    daiktai.type === "fish" ? (
      <div key={index}>
        {daiktai.id} - {daiktai.type} - {daiktai.name}
      </div>
    ) : null  // Ar cia null return?
  )
    }
  </div>
  <div>
      {
          <Valtis></Valtis>
      }
  </div>
  <div>
      {
          <Laivas></Laivas>
      }
  </div>
  <div>
      {
          <Sala></Sala>
      }
  </div>
  </> 
  )
}

export default Jura;
