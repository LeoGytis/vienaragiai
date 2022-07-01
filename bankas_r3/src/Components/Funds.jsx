import { useContext, useState, useEffect } from "react";
import DataContext from "./DataContext";

function Funds() {
  const { modalFunds, setModalFunds, setEditFunds } = useContext(DataContext);

  const [funds, setFunds] = useState("");

  const close = () => {
    setModalFunds(null);
  };

  useEffect(() => {
    if (null === modalFunds) return;
    setFunds(modalFunds.funds);
  }, [modalFunds]);

  const addFunds = () => {
    setEditFunds({
      funds,
      id: modalFunds.id,
    });
    setModalFunds(null);
  };

  const deductFunds = () => {
    setEditFunds({
      funds,
    });
    setModalFunds(null);
  };

  if (null === modalFunds) {
    return null;
  }

  return (
    <div className="modal">
      <div className="modal-dialog modal-dialog-centered">
        <div className="modal-content">
          <div className="modal-header">
            <h2 className="modal-title">Add or Deduct Funds</h2>
            <button type="button" className="close" onClick={close}>
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div className="modal-body">
            <div className="card mt-4">
              <div className="card-body d-flex justify-content-center">
                <div className="form-group">
                  <label className="font-weight-bold d-flex justify-content-center">
                    Funds: {funds}€
                  </label>
                  <input
                    type="text"
                    className="form-control"
                    onChange={(e) => setFunds(e.target.value)}
                  />
                  <small className="form-text text-muted">
                    (input sum of money to add or deduct)
                  </small>
                </div>
              </div>
            </div>
            <div className="modal-footer d-flex justify-content-center">
              <button type="button" className="btn btn-info" onClick={addFunds}>
                Add
              </button>
              <button
                type="button"
                className="btn btn-info"
                onClick={deductFunds}
              >
                Deduct
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Funds;
