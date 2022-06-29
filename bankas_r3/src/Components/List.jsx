import { useContext } from "react";
import DataContext from "./DataContext";
import ListLine from "./ListLine";

function List() {
  const { clients, message } = useContext(DataContext);

  return (
    <div className="col-8">
      <div className="card mt-4">
        <div className="card-header">
          <h2>List</h2>
        </div>
        <div className="card-body">
          <ul className="list-group">
            <div className="alert alert-info text-center" role="alert">
              {message}
            </div>
            {clients.map((value) => (
              <ListLine key={value.id} client={value}></ListLine>
            ))}
          </ul>
        </div>
      </div>
    </div>
  );
}

export default List;
