import { useEffect, useState } from "react";
import Cart from "./Cart";
import DetailPage from "./DetailPage";

export default function DrugsToCart({cartItems, drug, drugPrice, drugQuantity, addItemToCart, removeItemFromCart}) {
  const [amountInCart, setAmountInCart] = useState(0);
  const [price, setPrice] = useState(drugPrice);

  const addToCart = () => {
      setAmountInCart(Math.min(drugQuantity, amountInCart + 1));

      addItemToCart(drug.id);

      // want to set the max price equal to the amount in stock
      if (drugQuantity !== amountInCart){
        setPrice(price + drugPrice);

      } 
  }

  const removeFromCart = () => {
      setAmountInCart(Math.max(0, amountInCart - 1));

      removeItemFromCart(drug.id)

      setPrice(Math.max(drugPrice, price - drugPrice))
  }



      return (

          <>
              
              In Stock: {drugQuantity}pcs
              <div className="pharmacy__basket__order-to-cart">
                <button className="pharmacy__basket__order__remove" onClick={ removeFromCart }>-</button>
                <button className="pharmacy__basket__order__add" onClick={ addToCart }>+</button> 
              </div>
              <span>Price: {price}kc</span>
              
              <button className="pharmacy__basket__button">{amountInCart ? `Add ${amountInCart + 1} To Cart`  : 'Add To Cart'}</button>                 
          </>

      )

}