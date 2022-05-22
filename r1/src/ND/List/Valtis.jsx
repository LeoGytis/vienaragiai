import { useState } from "react";
import { seaPlaners } from "./seaPlaners";

function Valtis() {
  const [daiktas, setDaiktas] = useState(seaPlaners);

  return daiktas.map((daiktai, index) =>
    daiktai.type === "man" ? (
      <div key={index}>
        {daiktai.id} - {daiktai.type} - {daiktai.name}
      </div>
    ) : null  
  );
}

export default Valtis;
