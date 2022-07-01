import { useState, useEffect } from "react";
import "./bootstrap.css";
import "./App.scss";
import DataContext from "./Components/DataContext";
import Login from "./Components/Login";
import Home from "./Components/Home";
import List from "./Components/List";
import Create from "./Components/Create";
import Funds from "./Components/Funds";
import Edit from "./Components/Edit";
import axios from "axios";
import { authConfig, logout } from "./Functions/auth";

function App() {
  axios.defaults.withCredentials = true;
  const [lastTimeUpdate, setLastTimeUpdate] = useState(Date.now()); // timeris

  const [clients, setClients] = useState([]);
  const [addClient, setAddClient] = useState(null);
  const [deleteClient, setDeleteClient] = useState(null);
  const [editClient, setEditClient] = useState(null);

  const [modalClient, setModalClient] = useState(null);
  const [message, setMessage] = useState("");

  const [modalFunds, setModalFunds] = useState(null);
  const [editFunds, setEditFunds] = useState(null);

  const [user, setUser] = useState(null);
  // const [refresh, setRefresh] = useState(true);

  useEffect(() => {
    axios.get("http://bankas2.lt/api/auth", authConfig()).then((res) => {
      if (res.data.user) {
        setUser(res.data.user);
      } else {
        setUser(null);
      }
    });
  }, [lastTimeUpdate]);

  useEffect(() => {
    axios.get("http://bankas2.lt/api/home").then((res) => setClients(res.data));
  }, [lastTimeUpdate]);

  useEffect(() => {
    if (addClient === null) return;
    axios.post("http://bankas2.lt/api/add", addClient).then(() => {
      setLastTimeUpdate(Date.now());
      setMessage("New client was created");
    });
  }, [addClient]);

  useEffect(() => {
    if (deleteClient === null) return;
    axios.delete("http://bankas2.lt/api/delete/" + deleteClient.id).then(() => {
      setLastTimeUpdate(Date.now());
      setMessage("New client was deleted");
    });
  }, [deleteClient]);

  useEffect(() => {
    if (editClient === null) return;
    axios
      .put("http://bankas2.lt/api/edit/" + editClient.id, editClient)
      .then(() => setLastTimeUpdate(Date.now()));
  }, [editClient]);

  useEffect(() => {
    if (editFunds === null) return;
    axios
      .put("http://bankas2.lt/api/editfunds/" + editFunds.id, editFunds)
      .then(() => setLastTimeUpdate(Date.now()));
  }, [editFunds]);

  return (
    <DataContext.Provider
      value={{
        message,
        clients,
        setAddClient,
        setDeleteClient,
        modalClient,
        setModalClient,
        setEditClient,
        modalFunds,
        setModalFunds,
        setEditFunds,
        setLastTimeUpdate,
      }}
    >
      <div className="container">
        <div className="row">
          {user ? (
            <>
              <Create />
              <List />
            </>
          ) : (
            <Login />
          )}
        </div>
      </div>
      <Funds></Funds>
      <Edit></Edit>
    </DataContext.Provider>
  );
}

export default App;
