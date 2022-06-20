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
          <ul class="list-group">
            {animals.map((a) => (
              <li class="list-group-item" key="{a.id}>{a.animal}">
                {a.animal} weight: {a.weight}
              </li>
            ))}
          </ul>
        </div>
      </div>
    </div>
  );
}

export default List;
