import React from "react";
import ReactDOM from "react-dom/client";
import PharmacySearcBar from "./PharmacyPage/PharmacySearcBar";

const searchBar = ReactDOM.createRoot(document.querySelector("#search_bar"));
searchBar.render(<PharmacySearcBar/>)
