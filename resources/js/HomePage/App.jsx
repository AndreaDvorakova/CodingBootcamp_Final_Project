import React, { useState, useEffect } from "react";

export default function App() {
    const [drugs, setDrugs] = useState([]);

    const loadDrugs = async () => {
        const response = await fetch(`http://www.ipillgood.test/api/drugs`);
        const data = await response.json();
        setDrugs(data);
    };

    useEffect(() => {
        loadDrugs();
    }, []);

    return (
        <>
            {drugs.map((drug, index) => {
                return (
                    <div className="products__drug">
                        <h4 className="product__drug_title">{drug.name}</h4>
                        <img
                            className="product__drug_image"
                            src={`/images/drugs/${drug.image}`}
                            alt={drug.name}
                        />
                        <a href={`/drugs/${drug.id}/detail`}>
                            <button className="product__drug_button">
                                Check availability
                            </button>
                        </a>
                    </div>
                );
            })}
        </>
    );
}
