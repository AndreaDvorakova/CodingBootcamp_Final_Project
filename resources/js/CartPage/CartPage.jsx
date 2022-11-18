import { useState, useEffect } from "react";

export default function CartPage() {
    const [carts, setCarts] = useState([]);

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

    useEffect(()=>{
        loadCarts()
    }
    , [])

    return (
        <ul>
            
            {carts.map((cart) => {
                return (
                    <div key={cart.id} className="carts">
                       {/* { console.log(cart)} */}
                        <h3>Order: {cart.items[0].pharmacy.name}, {cart.items[0].pharmacy.city}</h3><br />
                        {cart.items.map((item, i) => {
                            console.log(cart.items);
                            return (
                                <ul key={i} className="carts__order">

                                    <li>Pills:<img
                                            className="cart__drug_image"
                                            src={`/images/drugs/${item.drug.image}`}
                                            alt={item.drug.name}
                                            /> 
                                            {item.drug.name} 
                                            Price: {item.drug_price}kc</li><br />

                                </ul>
                            )
                        })}
                        <button>Reserve</button>
                    </div>
                )
            })}
        </ul>
    )

}