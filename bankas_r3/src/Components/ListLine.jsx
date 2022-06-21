import { useContext } from "react";
import DataContext from "./DataContext";

function ListLine({ client }) {
  const { setDeleteClient, setModalClient } = useContext(DataContext); // kam cia tas modalas?

  const remove = () => {
    setDeleteClient(client);
  };

  const edit = () => {
    setModalClient(client);
  };

  return (
    <li className="list-group-item">
      <div className="one-client">
        <div className="one-client__content">
          <b>{client.name + " " + client.surname + ": "} </b>
          <br />
          {client.account_nr}
          <br />
          {client.social_id}
        </div>
        <span>Funds: {client.funds}€</span>

        <div className="one-client__buttons">
          <button
            type="button"
            className="btn btn-outline-success mr-3"
            onClick={edit}
          >
            Edit
          </button>
          <button
            type="button"
            className="btn btn-outline-danger"
            onClick={remove}
          >
            Delete
          </button>
        </div>
      </div>
    </li>
  );
}

export default ListLine;
