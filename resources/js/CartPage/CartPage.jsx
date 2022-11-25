import axios from "axios";
import { useState, useEffect } from "react";
import { redirect } from "react-router-dom";
import swal from "sweetalert";
import Swal from "sweetalert2";

export default function CartPage() {
    const [carts, setCarts] = useState([]);
    // const [show, setShow] = useState(true);

    const [confirmationDisplayed, setConfirmationDisplayed] = useState(false);
    const [confirmationData, setConfirmationData] = useState(null);

    const sendNotification = async (code) => {
        const response = await axios.post("/sendConfirmation", { code: code });
        console.log(response);
        // setConfirmationPhone(response.data.telephone_number)
        // setConfirmationData({
        //     sms_code: code,
        //     telephone_number: response.data.user.telephone_number,
        //     expiration_date: response.expiration_date,
        // });
        // setConfirmationDisplayed(true);
        return {
            sms_code: code,
            telephone_number: response.data.user.telephone_number,
            expiration_date: response.data.expiration,
        };
        // setConfirmationDisplayed(true);
    };

    const loadCarts = async () => {
        const response = await fetch("api/cart");
        const data = await response.json();

        const cartArray = [];
        for (const [pharmacyId, orderFromPharmacy] of Object.entries(data)) {
            cartArray.push({
                id: pharmacyId,
                items: orderFromPharmacy,
            });
        }
        console.log(cartArray);
        // for (let i = 0; i < cartArray.length; i++) {
        //     for (let j = 0; j < cartArray[i].items.length; j++) {
        //         console.log(cartArray[i].items[j].quantity);
        //     }
        // }
        // const [quantity, setQuantity] = useState()
        setCarts(cartArray);
    };

    const getTotalPrice = () => {
        let totalPrice = 0;
        carts.forEach((basket) => {
            totalPrice += getBasketPrice(basket);
        });
        return totalPrice;
    };

    const getBasketPrice = (basket) => {
        let basketPrice = 0;
        basket.items.forEach((drug) => {
            basketPrice += drug.drug_price * drug.quantity;
        });
        return basketPrice;
    };

    const addBasketQuantity = (e) => {
        e.preventDefault();

        const newCarts = [...carts];
        // targeting value of the quantity and increasing by 1
        newCarts[e.target.attributes["databasket"].value].items[
            e.target.attributes["dataitem"].value
        ].quantity += 1;

        setCarts(newCarts);
        //    console.log(carts);
    };

    const removeBasketQuantity = (e) => {
        e.preventDefault();
        const newCarts = [...carts];
        if (newCarts[e.target.attributes["databasket"].value].items[
            e.target.attributes["dataitem"].value
        ].quantity > 1){
        // targeting value of the quantity and decreasing by one.
        newCarts[e.target.attributes["databasket"].value].items[
            e.target.attributes["dataitem"].value
        ].quantity -= 1;

        setCarts(newCarts)};
    };

    const reserveInPharmacy = (e, basket) => {
        console.log("click");
        e.preventDefault();
        e.target.disabled = true;

        // console.log(basket);
        // const item_qties = basket.items.map((basket_item) => {
        //     return {
        //         id: basket_item.drug_id,
        //         qty: basket_item.quantity
        //     }
        // })

        const data = {
            total_price: getBasketPrice(basket),
            sms_code: Math.floor(100000 + Math.random() * 900000),
            order_status: 1,
            pharmacy_id: basket.items[0].pharmacy_id,
            // item_qties: item_qties
        };

        console.log(data.sms_code);

        axios.post(`/reservation`, data).then(async (res) => {
            swal("Loading...");
            if (res.data.status === 201) {
                // swal("Success", res.data.message, "success");
                const confirmationData = await sendNotification(data.sms_code);
                setCarts(carts.filter((cart) => cart.id !== basket.id));
                swal({
                    icon: 'success',
                    title: "Success!!",
                    text:
                        "Your Order no. " +
                        confirmationData.sms_code +
                        " was successful. SMS confirmation of your order has been sent to no. " +
                        confirmationData.telephone_number +
                        ". Please pick your order until " +
                        confirmationData.expiration_date
                });
            } else if (res.data.status === 409) {
                swal("Warning", res.data.message, "warning");
            } else if (res.data.status === 401) {
                swal("Error", res.data.message, "error");
            } else if (res.data.status === 404) {
                swal("Warning", res.data.message, "warning");
            }
        });

        // location.assign(
        //     `http://www.ipillgood.test/confirmation/${data.sms_code}`
        // );
    };
    // const reserveInPharmacy = async (pharmacyId) => {
    //     console.log("MAKING RESERVATION IN PHARMACY ID"+pharmacyId)
    // }
    const cancelReservation = (e, basket) => {
        e.preventDefault();
        const data = {
            total_price: 0,
            sms_code: Math.floor(100000 + Math.random() * 900000),
            order_status: 2,
            pharmacy_id: basket.items[0].pharmacy_id,
        }

        axios.post(`/reservation`, data).then(res => {
            Swal.fire({
                title: 'Canceled',
                icon: 'success',
                text: 'Your order has been canceled',
              })

        })


        setCarts(carts.filter(cart => cart.id !== basket.id));
    }

    useEffect(()=>{
        loadCarts()
    }
    , [])

    return (
        <div>
            {/* {console.log(carts)} */}
            {/* {confirmationDisplayed ? (
                <div>{confirmationData.sms_code}</div>
            ) : (
                <div>not confirmed yet</div>
            )} */}
            {carts.map((cart, j) => {
                return (
                    <div key={cart.id} className="cart">
                        { console.log(cart)}
                        <h3>
                            Order:                                 <a
                                    href={`/pharmacy-page/${cart.items[0].pharmacy.id}`}
                                >{cart.items[0].pharmacy.name} -{" "}
                            {cart.items[0].pharmacy.city}</a>
                        </h3>
                        <hr />
                        {cart.items.map((item, i) => {
                            // console.log(cart.items);
                            return (
                                <div key={item.id} className="cart__order">
                                    <div className="cart__order__detail">
                                        <img
                                            className="cart__order__detail_image"
                                            src={`/images/drugs/${item.drug.image}`}
                                            alt={item.drug.name}
                                        />
                                        <div className="cart__order__detail_info">
                                            <span>{item.drug.name}</span>
                                        </div>
                                        <span><strong>Qty: </strong>{item.quantity}</span>
                                        <div className="cart__order__detail_price">
                                        
                                            <strong>Price:</strong>{" "}
                                            {item.drug_price * item.quantity}kc
                                        </div>
                                        <div className="pharmacy__basket__order-to-cart">
                                            <button
                                                className="cart__order__detail_remove"
                                                dataitem={i}
                                                databasket={j}
                                                onClick={removeBasketQuantity}
                                            >
                                                -
                                            </button>
                                            <button
                                                className="cart__order__detail_add"
                                                dataitem={i}
                                                databasket={j}
                                                onClick={addBasketQuantity}
                                            >
                                                +
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            );
                        })}

                        <div className="cart__order__footer">
                            <div className="cart__order__buttons__total">
                                    <strong>Total: </strong>
                                    {getBasketPrice(cart)}kc
                            </div>
                            
                            <div className="cart__order__buttons">
                                
                                <button
                                    className="cart__order__buttons_cancel"
                                    onClick={(e) => {
                                        cancelReservation(e, cart);
                                    }}
                                >
                                    CANCEL
                                </button>
                                <button
                                    className="cart__order__buttons_reserve"
                                    onClick={(e) => {
                                        reserveInPharmacy(e, cart);
                                    }}
                                >
                                    RESERVE
                                </button>
                            </div>
                        </div>
                        
                        <hr />
                    </div>
                );
            })}
            {getTotalPrice() == 0 ? <img src={"/empty-cart.png"} alt="" /> : "Total:" + getTotalPrice()}
        </div>
    );
}
