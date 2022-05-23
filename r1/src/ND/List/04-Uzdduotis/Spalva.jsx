import { useState } from "react";
import { seaPlaners } from "../seaPlaners";

function Spalva() {
  
    return (
      <>
        {seaPlaners
          .sort((a, b) => a.color.localeCompare(b.color))
          .map((s, index) => (
            <div style={{ color: "goldenrod" }} key={s.id}>
              {" "}
              {s.color} - {s.name}{" "}
            </div>
          ))}
      </>
    );
  }

export default Spalva;