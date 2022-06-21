import { useContext } from "react";
import { useState } from "react";
import DataContext from "./DataContext";

function Create() {
  const { setAddClient } = useContext(DataContext);

  const [name, setName] = useState("");
  const [surname, setSurname] = useState("");
  const [account_nr, setAccount_nr] = useState("");
  const [social_id, setSocial_id] = useState("");
  const [funds, setFunds] = useState("");

  const create = () => {
    setAddClient({ name, surname, account_nr, social_id, funds });
    setName(""); //paspaudus mygtuka isvalo input value
    setSurname("");
    setAccount_nr("");
    setSocial_id("");
    setFunds("");
  };

  return (
    <div className="col-4">
      <div className="card mt-4">
        <div className="card-header">
          <h2>Add new client</h2>
        </div>
        <div className="card-body">
          <div className="form-group">
            <label>Name:</label>
            <input
              type="text"
              className="form-control"
              value={name}
              onChange={(e) => setName(e.target.value)} //pasaudus i state irasoma nauja reiksme
            />
            <small className="form-text text-muted">
              Type name of the cliente.
            </small>
          </div>
          <div className="form-group">
            <label>Surname:</label>
            <input
              type="text"
              className="form-control"
              value={surname}
              onChange={(e) => setSurname(e.target.value)}
            />
            <small className="form-text text-muted">
              Type last name of the cliente.
            </small>
          </div>
          <div className="form-group">
            <label>Accout number:</label>
            <input
              type="text"
              className="form-control"
              value={account_nr}
              onChange={(e) => setAccount_nr(e.target.value)}
            />
            <small className="form-text text-muted">
              Type in account nr of the cliente (LT80 0101 2255 3666 etc.).
            </small>
          </div>
          <div className="form-group">
            <label>Social ID number:</label>
            <input
              type="text"
              className="form-control"
              value={social_id}
              onChange={(e) => setSocial_id(e.target.value)}
            />
            <small className="form-text text-muted">Social ID code.</small>
          </div>

          <div className="form-group">
            <label>Starting funds:</label>
            <input
              type="text"
              className="form-control"
              value={funds}
              onChange={(e) => setFunds(e.target.value)}
            />
            <small className="form-text text-muted">
              How much does the client you have?
            </small>
          </div>
          <button type="button" className="btn btn-info" onClick={create}>
            Create
          </button>
        </div>
      </div>
    </div>
  );
}

export default Create;
