import { useContext } from "react";
import DataContext from "./DataContext";

function ListLine({ client }) {
  const { setDeleteClient, setModalClient, setModalFunds } =
    useContext(DataContext); // kam cia tas modalas?

  const remove = () => {
    setDeleteClient(client);
  };

  const edit = () => {
    setModalClient(client);
  };

  const funds = () => {
    setModalFunds(client);
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
        <div className="d-flex flex-column bd-highlight text-center mb-3">
          <span className="font-weight-bold mt-3 mb-2">{client.funds}€</span>
          <button
            type="button"
            className="btn btn-outline-info p-1"
            onClick={funds}
          >
            Funds
          </button>
        </div>

        <div className="one-client__buttons">
          <button type="button" className="btn btn-info mr-3" onClick={edit}>
            Edit
          </button>
          <button
            type="button"
            className="btn btn-outline-secondary"
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
