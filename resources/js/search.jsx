import React from "react";
import ReactDOM from "react-dom/client";
import SearchBar from "./HomePage/SearchBar";

const search = ReactDOM.createRoot(document.querySelector("#search-bar"));
search.render(<SearchBar />);
