import { useContext, useState, useEffect } from "react";
import DataContext from "./DataContext";

function Edit() {
  const { modalClient, setModalClient, setEditClient } =
    useContext(DataContext);

  const [name, setName] = useState("");
  const [surname, setSurname] = useState("");
  const [account_nr, setAccount_nr] = useState("");
  const [social_id, setSocial_id] = useState("");
  const [funds, setFunds] = useState("");

  const close = () => {
    setModalClient(null);
  };

  useEffect(() => {
    if (null === modalClient) return;
    setName(modalClient.name);
    setSurname(modalClient.surname);
    setAccount_nr(modalClient.account_nr);
    setSocial_id(modalClient.social_id);
    setFunds(modalClient.funds);
  }, [modalClient]);

  const edit = () => {
    setEditClient({
      name,
      surname,
      funds,
      account_nr,
      social_id,
      id: modalClient.id,
    });
    setModalClient(null);
  };

  if (null === modalClient) {
    return null;
  }

  return (
    <div className="modal">
      <div className="modal-dialog modal-dialog-centered">
        <div className="modal-content">
          <div className="modal-header">
            <h2 className="modal-title">Edit</h2>
            <button type="button" className="close" onClick={close}>
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div className="modal-body">
            <div className="card mt-4">
              <div className="card-body">
                <div className="form-group">
                  <label>Name</label>
                  <input
                    type="text"
                    className="form-control"
                    value={name}
                    onChange={(e) => setName(e.target.value)}
                  />
                </div>
                <div className="form-group">
                  <label>Last name</label>
                  <input
                    type="text"
                    className="form-control"
                    value={surname}
                    onChange={(e) => setSurname(e.target.value)}
                  />
                </div>
                <div className="form-group">
                  <label>Account number</label>
                  <input
                    type="text"
                    className="form-control"
                    value={account_nr}
                    onChange={(e) => setAccount_nr(e.target.value)}
                  />
                </div>
                <div className="form-group">
                  <label>Social ID number</label>
                  <input
                    type="text"
                    className="form-control"
                    value={social_id}
                    onChange={(e) => setSocial_id(e.target.value)}
                  />
                </div>
                <div className="form-group">
                  <label>Clients funds</label>
                  <input
                    type="text"
                    className="form-control"
                    value={funds}
                    onChange={(e) => setFunds(e.target.value)}
                  />
                </div>
              </div>
            </div>
          </div>
          <div className="modal-footer">
            <button
              type="button"
              className="btn btn-outline-success"
              onClick={edit}
            >
              Save changes
            </button>
            <button
              type="button"
              className="btn btn-outline-secondary"
              onClick={close}
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Edit;
