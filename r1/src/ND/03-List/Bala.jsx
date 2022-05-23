import { seaPlaners } from "./seaPlaners";

function Bala() {
  return seaPlaners.map(
    (
      bala,
      key,
      balaArray // map((element, index, array) =>
    ) => (
      <div key={key.toString()} className="bala">
        {bala.id} - {bala.type} - {bala.name} - {bala.color}
      </div>
    )
  );
}

export default Bala;
