import { useState } from "react";
import { seaPlaners } from "./seaPlaners";

function Sala() {
  const [daiktas, setDaiktas] = useState(seaPlaners);

  return daiktas.map((daiktai, index) =>
    daiktai.type === "animal" ? (
      <div key={index}>
        {daiktai.id} - {daiktai.type} - {daiktai.name}
      </div>
    ) : null  
  );
}

export default Sala;
