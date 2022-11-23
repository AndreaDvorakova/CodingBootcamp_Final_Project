import React, { useState, useEffect } from "react";

export default function App() {
    const [drugs, setDrugs] = useState([]);
    const [offset, setOffset] = useState(0);
    const [page, setPage] = useState(1);

    const loadDrugs = async () => {
        const response = await fetch(
            `/api/drugs?offset=${offset}&limit=9`
        );
        const data = await response.json();
        setDrugs(data);
    };

    useEffect(() => {
        loadDrugs();
    }, [offset]);

    const plusOffset = () => {
        setOffset(Math.min(45, offset + 9));
        setPage(Math.min(5, page + 1));
    };

    const minusOffset = () => {
        setOffset(Math.max(0, offset - 9));
        setPage(Math.max(1, page - 1));
    };

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
            <div className="page">
                <div className="page__inner">
                    <img
                        src="/left_arrow_icon.png"
                        alt="left arrow"
                        onClick={minusOffset}
                    />
                    <p>Page {page}</p>
                    <img
                        src="/right_arrow_icon.png"
                        alt="right arrow"
                        onClick={plusOffset}
                    />
                </div>
            </div>
        </>
    );
}
