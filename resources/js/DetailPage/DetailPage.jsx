import { useEffect, useState } from "react";
import DrugsToCart from "./DrugsToCart";

export default function DetailPage() {
    // Take the id from the url using the meta tag
    const id = document.querySelector("meta[name=drug-id]");

    const [pharmacyItems, setPharmacyItems] = useState([]);
    const [pharmacyCities, setPharmacyCities] = useState([]);
    const [cart, setCart] = useState([]);
    const [selectedCity, setSelectedCity] = useState("all");
    const loadDrugs = async () => {
        const response = await fetch(
            `http://www.ipillgood.test/api/pharmacy-items/${id.content}`
        );

        const data = await response.json();

        // let select = document.getElementById("selectCity");
        // var select = document.getElementById("selectCity");
        const newPharmacyCities = ["all"];
        // go through all pharmacy Items, get distinct pharmacyItem.pharmacy.city into an array
        // MAGIC HERE
        data.forEach((pharmacyItem) => {
            if (!newPharmacyCities.includes(pharmacyItem.pharmacy.city)) {
                newPharmacyCities.push(pharmacyItem.pharmacy.city);
            }
        });
        // Optional: Clear all existing options first:
        // select.innerHTML = "";
        // Populate list with options:
        // for(var i = 0; i < newPharmacyCities.length; i++) {
        //     var opt = newPharmacyCities[i];
        //     select.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";
        // }
        // console.log(newPharmacyCities);
        // set that array we got as pharmacyCities
        setPharmacyCities(newPharmacyCities);

        setPharmacyItems(data);
        console.log(data);
    };

    useEffect(() => {
        loadDrugs();
    }, []);

    const addItemToCart = (drug_id) => {
        setCart([...cart, drug_id]);
    };

    const removeItemFromCart = (drug_id) => {
        // prepare a copy of the current state
        // of the cart (so that we don't change it)
        const copy = [...cart];

        // try to find the first occurence of this
        // book_id in the copy
        const found_at_index = copy.indexOf(drug_id);

        // if found...
        if (found_at_index !== -1) {
            // ...remove it from the array
            // (this changes the array which is why we
            // did not want to do it on `cart`)
            copy.splice(found_at_index, 1);
        }

        // update the state with the new "cart" array,
        // sans the first found occurence of this book_id
        setCart(copy);
    };

    const changeSelect = (e) => {
        e.preventDefault();
        setSelectedCity(e.target.value);
    };

    return (
        <>
            <select
                id="selectCity"
                value={selectedCity}
                onChange={changeSelect}
            >
                {pharmacyCities.map((city) => {
                    return <option value={city}>{city}</option>;
                })}
            </select>
            {pharmacyItems
                .filter(
                    (pharmacyItem) =>
                        selectedCity == pharmacyItem.pharmacy.city ||
                        selectedCity == "all"
                )
                .map((pharmacyItem) => {
                    return (
                        <div className="pharmacy__basket" key={pharmacyItem.id}>
                            <span className="pharmacy__basket__name">
                                <a
                                    href={`/pharmacy-page/${pharmacyItem.pharmacy.id}`}
                                >
                                    <h4>{pharmacyItem.pharmacy.name}</h4>
                                </a>
                                <span className="pharmacy__basket__address">
                                    Address
                                </span>
                                <span className="pharmacy__basket__street">
                                    {pharmacyItem.pharmacy.address_line}
                                </span>
                                <span className="pharmacy__basket__city">
                                    {pharmacyItem.pharmacy.city}
                                </span>
                                <span className="pharmacy__basket__telephone">
                                    + {pharmacyItem.pharmacy.telephone_number}
                                </span>
                            </span>
                            <span className="pharmacy__basket__hours">
                                Hours:{" "}
                                {pharmacyItem.pharmacy.work_hours_open_at} -{" "}
                                {pharmacyItem.pharmacy.work_hours_close_at}
                            </span>
                            <div className="pharmacy__basket__order">
                                <DrugsToCart
                                    key={pharmacyItem.id}
                                    drug={pharmacyItem.drug_id}
                                    drugPrice={pharmacyItem.drug_price}
                                    drugQuantity={pharmacyItem.drug_quantity}
                                    cartItems={cart.length}
                                    addItemToCart={addItemToCart}
                                    removeItemFromCart={removeItemFromCart}
                                    pharmacy_id={pharmacyItem.pharmacy.id}
                                />
                            </div>
                        </div>
                    );
                })}
        </>
    );
}
