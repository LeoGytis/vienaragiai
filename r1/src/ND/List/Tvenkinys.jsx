import { Fragment } from "react";
import Daiktas from "./Daiktas";

function Tvenkinys() {
  return (
    <>
      <div style={{ color: "yellowgreen" }}>{Daiktas("porinis")}</div>
      <div style={{ color: "skyblue" }}>{Daiktas("neporinis")}</div>
    </>
  );
}

export default Tvenkinys;
