import { useState } from "react";
import { seaPlaners } from "../seaPlaners";

function Vardas() {
  
    return (
      <>
        {seaPlaners
          .sort((a, b) => a.name.localeCompare(b.name))
          .map((s, index) => (
            <div style={{ color: "skyblue" }} key={s.id}>
              {" "}
              {s.name}{" "}
            </div>
          ))}
      </>
    );
  }

export default Vardas;