import { seaPlaners } from "../seaPlaners";

function Akvariumas({ isPair }) {
  if (isPair === "porinis") {
    return seaPlaners.map((s, i) =>
      s.type === "fish" && s.id % 2 === 0 ? (
        <div key={i}>
          {s.id} - {s.type} - <span style={{ color: s.color }}>{s.name}</span>
        </div>
      ) : null
    );
  } else if (isPair === "neporinis") {
    return seaPlaners.map((s, i) =>
      s.type === "fish" && s.id % 2 ? (
        <div key={i}>
          {s.id} - {s.type} - <span style={{ color: s.color }}>{s.name}</span>
        </div>
      ) : null
    );
  }
}

export default Akvariumas;
