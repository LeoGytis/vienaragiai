import axios from "axios";
import { useEffect } from "react";
import { useState } from "react";
import { authConfig, login } from "../Functions/auth";

function Login({ setRefresh }) {
  const [loginData, setLoginData] = useState(null);
  const [name, setName] = useState("");
  const [pass, setPass] = useState("");

  const doLogin = () => {
    setLoginData({ name, pass });
  };

  useEffect(() => {
    if (loginData === null) return;
    axios
      .post("http://bankas2.lt/api/?url=login", loginData, authConfig())
      .then((res) => {
        if (res.data.token) {
          login(res.data.token);
          setRefresh((r) => !r);
          console.log("ISMETA");
        }
        console.log(res.data);
        console.log("NEISMETA");
      });
  }, [loginData, setRefresh]);

  return (
    <>
      <div className="nice-input">
        NAME:{" "}
        <input
          type="text"
          value={name}
          onChange={(e) => setName(e.target.value)}
        ></input>
      </div>
      <div className="nice-input">
        PASSWORD:{" "}
        <input
          type="password"
          value={pass}
          onChange={(e) => setPass(e.target.value)}
        ></input>
      </div>
      <button className="up" onClick={doLogin}>
        Login
      </button>
    </>
  );
}

export default Login;
