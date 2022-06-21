import { useContext, useState, useEffect } from "react";
import DataContext from "./DataContext";

function Edit() {
  const { modalClient, setModalClient, setEditClient } =
    useContext(DataContext);

  const [name, setName] = useState("");
  const [funds, setFunds] = useState("");

  const close = () => {
    setModalClient(null);
  };

  useEffect(() => {
    if (null === modalClient) return;
    setName(modalClient.name);
    setFunds(modalClient.funds);
  }, [modalClient]);

  const edit = () => {
    setEditClient({ name, funds, id: modalClient.id });
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
                  <small className="form-text text-muted">
                    Please enter some nice animal (small donkey etc.).
                  </small>
                </div>
                <div className="form-group">
                  <label>Animal weight</label>
                  <input
                    type="text"
                    className="form-control"
                    value={funds}
                    onChange={(e) => setFunds(e.target.value)}
                  />
                  <small className="form-text text-muted">
                    How much is the fish (Scooter).
                  </small>
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
