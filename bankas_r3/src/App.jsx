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

  const [clients, setClients] = useState([]);

  useEffect(() => {
    axios
      .get("http://localhost/vienaragiai/r3_server/animals")
      .then((res) => setClients(res.data));
  }, [lastTimeUpdate]);

  return (
    <div className="App">
      <header className="App-header"></header>
    </div>
  );
}

export default App;
