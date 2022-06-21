import { useState, useEffect } from "react";
import "./App.scss";
import "./bootstrap.css";
import DataContext from "./Components/DataContext";
import List from "./Components/List";
import Create from "./Components/Create";
import Edit from "./Components/Edit";

// import Create from "./Components/Create";
import axios from "axios";

function App() {
  const [lastTimeUpdate, setLastTimeUpdate] = useState(Date.now()); // timeris

  const [clients, setClients] = useState([]);
  const [addClient, setAddClient] = useState(null);
  const [deleteClient, setDeleteClient] = useState(null);
  const [editClient, setEditClient] = useState(null);

  const [modalClient, setModalClient] = useState(null);

  useEffect(() => {
    axios.get("http://bankas2.lt/api/home").then((res) => setClients(res.data));
  }, [lastTimeUpdate]);

  useEffect(() => {
    if (addClient === null) return;
    axios
      .post("http://bankas2.lt/api/addclient", addClient)
      .then(() => setLastTimeUpdate(Date.now()));
  }, [addClient]);

  useEffect(() => {
    console.log(deleteClient);
    if (deleteClient === null) return;
    axios
      .delete("http://bankas2.lt/api/delete/" + deleteClient.id)
      .then(() => setLastTimeUpdate(Date.now()));
  }, [deleteClient]);

  return (
    <DataContext.Provider
      value={{
        clients,
        setAddClient,
        setDeleteClient,
        modalClient,
        setModalClient,
        setEditClient,
      }}
    >
      <div className="container">
        <div className="row">
          <Create />
          <List />
        </div>
      </div>
      <Edit></Edit>
    </DataContext.Provider>
  );
}

export default App;
