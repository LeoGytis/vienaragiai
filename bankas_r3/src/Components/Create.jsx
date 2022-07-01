import { useContext } from "react";
import { useState } from "react";
import DataContext from "./DataContext";

function Create() {
  const { setAddClient } = useContext(DataContext);

  const [name, setName] = useState("");
  const [surname, setSurname] = useState("");
  const [social_id, setSocial_id] = useState("");

  const create = () => {
    setAddClient({ name, surname, social_id });
    setName(""); //paspaudus mygtuka isvalo input value
    setSurname("");
    setSocial_id("");
  };

  return (
    <div className="col-4 background-image">
      <div className="card mt-4">
        <div className="card-header">
          <h2>Add new client</h2>
        </div>
        <div className="card-body">
          <div className="form-group">
            <div class="alert alert-info text-center" role="alert"></div>

            <label>Name:</label>
            <input
              type="text"
              className="form-control"
              value={name}
              onChange={(e) => setName(e.target.value)} //pasaudus i state irasoma nauja reiksme
            />
          </div>
          <div className="form-group">
            <label>Surname:</label>
            <input
              type="text"
              className="form-control"
              value={surname}
              onChange={(e) => setSurname(e.target.value)}
            />
          </div>
          <div className="form-group">
            <label>Social ID number:</label>
            <input
              type="text"
              className="form-control"
              value={social_id}
              onChange={(e) => setSocial_id(e.target.value)}
            />
            <small className="form-text text-muted">(38505220088 etc.)</small>
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
