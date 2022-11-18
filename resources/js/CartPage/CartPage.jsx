import { useState, useEffect } from "react";

export default function CartPage() {
    const [carts, setCarts] = useState([]);
    // const [amountInCart, setAmountInCart] = useState(1);
    // const [price, setPrice] = useState(drugPrice);
    // const [inStock, setInStock] = useState(drugQuantity);
    

    const loadCarts = async() => {
        const response = await fetch('http://www.ipillgood.test/api/cart');
        const data = await response.json();
        console.log(data);
        const cartArray = []
        for (const [pharmacyId, orderFromPharmacy] of Object.entries(data)) {
            cartArray.push({
                id: pharmacyId,
                items: orderFromPharmacy
            })
        }
        console.log(cartArray);
        setCarts(cartArray);
    }

    // const addToCart = () => {
    //     setAmountInCart(Math.min(drugQuantity, amountInCart + 1));
  
    //     addItemToCart(drug.id);
  
    //     // want to set the max price equal to the amount in stock
    //     if (drugQuantity !== amountInCart){
    //       setPrice(price + drugPrice);
  
    //     } 
    //     // set the stock amoount to zero if stock runs out
    //     setInStock(Math.max(0, inStock - 1));
    // }

    // const removeFromCart = () => {
    //     setAmountInCart(Math.max(0, amountInCart - 1));
  
    //     removeItemFromCart(drug.id)
  
    //     setPrice(Math.max(drugPrice, price - drugPrice))
  
    //     setInStock(Math.min(drugQuantity, inStock + 1));
    // }

    const getTotalPrice = () => {
        let totalPrice = 0
        carts.forEach((basket) => {
            totalPrice += getBasketPrice(basket)
        })
        return totalPrice
    }

    const getBasketPrice = (basket) => {
        let basketPrice = 0
        basket.items.forEach((drug) => {
            basketPrice += drug.drug_price * drug.quantity
        });
        return basketPrice
    }

    const reserveInPharmacy = async (pharmacyId) => {
        console.log("MAKING RESERVATION IN PHARMACY ID"+pharmacyId)
    }

    useEffect(()=>{
        loadCarts()
    }
    , [])

    return (
        <div>
            
            {carts.map((cart) => {
                return (
                    <div key={cart.id} className="cart">
                       {/* { console.log(cart)} */}
                        <h3>Order: {cart.items[0].pharmacy.name} - {cart.items[0].pharmacy.city}</h3><hr />
                        {cart.items.map((item, i) => {
                            console.log(cart.items);
                            return (
                                <div key={i} className="cart__order">
                                    <div className="cart__order__detail"><img
                                            className="cart__order__detail_image"
                                            src={`/images/drugs/${item.drug.image}`}
                                            alt={item.drug.name}
                                            /> 
                                           <div className="cart__order__detail_info">
                                                <span>{item.drug.name}</span> 
                                                <span>Price: {item.drug_price}kc</span>
                                           </div>
                                           <div className="pharmacy__basket__order-to-cart">
                                                <button className="cart__order__detail_remove">-</button>
                                                <button className="cart__order__detail_add">+</button> 
                                            </div>

                                    </div>
                                </div>    
                            )
                        })}
                        Total: {getBasketPrice(cart)}
                        <div className="cart__order__buttons">
                            <button className="cart__order__buttons_cancel">CANCEL</button>
                            <button className="cart__order__buttons_reserve" onClick={() => reserveInPharmacy(cart.id)}>RESERVE</button>
                        </div>
                        <hr />
                    </div>
                )
            })}
            Total: {carts && getTotalPrice()}
        </div>
    )

}