import { useEffect } from "react";
import { useState } from "react";
import "./App.scss";
import "./bootstrap.css";
import Create from "./Components/Create";
import DataContext from "./Components/DataContext";
import List from "./Components/List";
import axios from "axios";

function App() {
  const [lastTimeUpdate, setLastTimeUpdate] = useState(Date.now()); // timeris

  const [animals, setAnimals] = useState([]);
  const [createAnimal, setCreateAnimal] = useState(null);
  const [deleteAnimal, setDeleteAnimal] = useState(null);

  //useEffect pasileidzia tada kai uzsikrauna komponenetas
  useEffect(() => {
    axios
      .get("http://localhost/vienaragiai/react2_server/animals")
      .then((res) => setAnimals(res.data));
  }, [lastTimeUpdate]);

  useEffect(() => {
    if (null === createAnimal) return;
    axios
      .post("http://localhost/vienaragiai/react2_server/animals", createAnimal)
      .then(() => setLastTimeUpdate(Date.now()));
  }, [createAnimal]);

  useEffect(() => {
    console.log(deleteAnimal);
    if (null === deleteAnimal) return;
    axios
      .delete(
        "http://localhost/vienaragiai/react2_server/animals/" + deleteAnimal.id
      )
      .then(() => setLastTimeUpdate(Date.now()));
  }, [deleteAnimal]);

  return (
    <DataContext.Provider value={{ animals, setCreateAnimal, setDeleteAnimal }}>
      <div className="container">
        <div className="row">
          <Create />
          <List />
        </div>
      </div>
    </DataContext.Provider>
  );
}

export default App;
