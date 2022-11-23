import React, { useState, useRef, useEffect } from "react";
import ReactDOM from "react-dom/client";
import "bootstrap/dist/css/bootstrap.min.css";
import { dropRight } from "lodash";

const SearchBarDropdown = () => {
    const [drugs, setDrugs] = useState([]);
    const [searchQuery, setSearchQuery] = useState("");

    const loadDrugs = async () => {
        const response = await fetch(
            `/api/drugs?name=${searchQuery}`
        );
        const data = await response.json();
        setDrugs(data);
    };

    const ulRef = useRef();
    const inputRef = useRef();
    useEffect(() => {
        inputRef.current.addEventListener("click", (event) => {
            event.stopPropagation();
            ulRef.current.style.display = "flex";
            OnInputChange();
        });
        document.addEventListener("click", (event) => {
            ulRef.current.style.display = "none";
        });
        if (searchQuery) {
            loadDrugs();
        }
    }, []);

    const OnInputChange = (event) => {
        setSearchQuery(event.target.value);
        loadDrugs();
    };

    return (
        <>
            <input
                type="text"
                placeholder="Search"
                ref={inputRef}
                id="search-bar"
                value={searchQuery}
                onChange={OnInputChange}
            />
            <ul className="list-group" id="results" ref={ulRef}>
                {drugs.map((drug, index) => {
                    return (
                        <a href={`/drugs/${drug.id}/detail`}>
                            <button
                                type="button"
                                key={index}
                                className="navigation__search-bar_button"
                                onClick={(e) => {
                                    inputRef.current.value = drug.name;
                                }}
                            >
                                <img
                                    className="navigation__search-bar_image"
                                    src={`/images/drugs/${drug.image}`}
                                />
                                {drug.name}
                            </button>
                        </a>
                    );
                })}
            </ul>
            {/* <button className="navigation__search-bar_button">Search</button> */}
        </>
    );
};

export default SearchBarDropdown;
