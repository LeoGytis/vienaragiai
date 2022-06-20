import { useContext } from "react";
import { useState } from "react";
import DataContext from "./DataContext";

function Create() {
  const { setCreateAnimal } = useContext(DataContext);

  const [animal, setAnimal] = useState("");
  const [weight, setWeight] = useState("");

  const create = () => {
    setCreateAnimal({ animal, weight });
    setAnimal(""); //paspaudus mygtuka isvalo input value
    setWeight("");
  };

  return (
    <div className="col-5">
      <div className="card mt-4">
        <div className="card-header">
          <h2>Create</h2>
        </div>
        <div className="card-body">
          <div className="form-group">
            <label>Animal</label>
            <input
              type="text"
              className="form-control"
              value={animal}
              onChange={(e) => setAnimal(e.target.value)} //pasaudus i state irasoma nauja reiksme
            />
            <small className="form-text text-muted">
              Type anima you want to add (donkey etc.).
            </small>
          </div>
          <div className="form-group">
            <label>Animal weight</label>
            <input
              type="text"
              className="form-control"
              value={weight}
              onChange={(e) => setWeight(e.target.value)}
            />
            <small className="form-text text-muted">
              What is the weight og the animal?
            </small>
          </div>
          <button
            type="button"
            className="btn btn-outline-success"
            onClick={create}
          >
            Create
          </button>
        </div>
      </div>
    </div>
  );
}

export default Create;
