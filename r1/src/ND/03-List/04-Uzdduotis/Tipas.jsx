import { useState } from "react";
import { seaPlaners } from "../seaPlaners";

function Tipas() {
    // const [tipas, setTipas] = useState(seaPlaners);
    // const tipasSortFunction = (a, b) => b.type -  a.type;
    // tipas.sort(tipasSortFunction());
    // setTipas([...tipas]);
  
    return (
      <>
        {seaPlaners
          .sort((a, b) => a.type.localeCompare(b.type))
          .map((s, index) => (
            <div style={{ color: "yellowgreen" }} key={s.id}>
              {" "}
              {s.type} - {s.name}{" "}
            </div>
          ))}
      </>
    );
  }

export default Tipas;