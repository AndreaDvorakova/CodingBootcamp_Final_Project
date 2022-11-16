import { useEffect, useState } from "react";
import DrugsToCart from "./DrugsToCart";

export default function DetailPage() {
    // Take the id from the url using the meta tag
    const id = document.querySelector('meta[name=drug-id]')

    const [pharmacyItems, setPharmacyItems] = useState([]);
    const [cart, setCart] = useState([]);
    const loadDrugs = async () => {
            const response = await fetch(`http://www.ipillgood.test/api/pharmacy-items/${id.content}`)
        
            const data = await response.json();
        
            setPharmacyItems(data);
            console.log(data);

      }

    useEffect(()=>{
        loadDrugs()
    }
    , [])

    const addItemToCart = (drug_id) => {
        setCart([
          ...cart,
          drug_id
        ])
      }

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
    setCart(copy)
    }



      return (
        <>
        {
            pharmacyItems.map((pharmacyItem, i) => {
                return (
                   <div className="pharmacy__basket" key={i}> 
                        <span className="pharmacy__basket__name"><a href={`/pharmacy-page/${pharmacyItem.pharmacy.id}`}><h4>{pharmacyItem.pharmacy.name}</h4></a>
                            <span className="pharmacy__basket__address">Address</span>
                            <span className="pharmacy__basket__street">{pharmacyItem.pharmacy.address_line}</span>
                            <span className="pharmacy__basket__city">{pharmacyItem.pharmacy.city}</span>
                            <span className="pharmacy__basket__telephone">{pharmacyItem.pharmacy.telephone_number}</span>
                        </span> 
                        <span className="pharmacy__basket__hours">Hours: {pharmacyItem.pharmacy.work_hours_open_at} - {pharmacyItem.pharmacy.work_hours_close_at}</span>
                        <div className="pharmacy__basket__order">
                            <DrugsToCart 
                                key={pharmacyItem.id}
                                drug={pharmacyItem.drug_id}
                                drugPrice={pharmacyItem.drug_price}
                                drugQuantity={pharmacyItem.drug_quantity}
                                cartItems={cart.length}
                                addItemToCart={addItemToCart}
                                removeItemFromCart={removeItemFromCart} />

                        </div>
                   </div>             
                )                
            })
        }
        </>
      )

}