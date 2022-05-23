import { useState } from "react";
import { seaPlaners } from "../seaPlaners";

function Laivas() {
  const [daiktas, setDaiktas] = useState(seaPlaners);

  return daiktas.map((daiktai, index) =>
    daiktai.type === "car" ? (
      <div key={index}>
        {daiktai.id} - {daiktai.type} - {daiktai.name}
      </div>
    ) : null  
  );
}

export default Laivas;
