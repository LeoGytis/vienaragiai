import { useContext } from "react";
import DataContext from "./DataContext";

function List() {
  const { animals } = useContext(DataContext);

  return (
    <div className="col-7">
      <div className="card mt-4">
        <div className="card-header">
          <h2>List</h2>
        </div>
        <div className="card-body">
          <ul className="list-group">
            {animals.map((a) => (
              <li className="list-group-item" key={a.id}>
                <b>{a.animal}:</b> Weight:{a.weight}kg
              </li>
            ))}
          </ul>
        </div>
      </div>
    </div>
  );
}

export default List;
