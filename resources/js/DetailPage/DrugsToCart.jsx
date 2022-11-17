import axios from "axios";
import { useEffect, useState } from "react";
// import Cart from "./Cart";
// import DetailPage from "./DetailPage";

export default function DrugsToCart(props) {
  const {cartItems, drug, drugPrice, drugQuantity, addItemToCart, removeItemFromCart, pharmacy_id} = props;
  const [amountInCart, setAmountInCart] = useState(1);
  const [price, setPrice] = useState(drugPrice);
  const [inStock, setInStock] = useState(drugQuantity);

  const addToCart = () => {
      setAmountInCart(Math.min(drugQuantity, amountInCart + 1));

      addItemToCart(drug.id);

      // want to set the max price equal to the amount in stock
      if (drugQuantity !== amountInCart){
        setPrice(price + drugPrice);

      } 
      // set the stock amoount to zero if stock runs out
      setInStock(Math.max(0, inStock - 1));
  }

  const removeFromCart = () => {
      setAmountInCart(Math.max(0, amountInCart - 1));

      removeItemFromCart(drug.id)

      setPrice(Math.max(drugPrice, price - drugPrice))

      setInStock(Math.min(drugQuantity, inStock + 1));
  }
  // onClick will submit the current items to the Baskets table in the database and will use that to display on the cart page.
  const submitAddToCart = (e) => {
    e.preventDefault();

    const data = {
      drug_id: drug,
      drug_price: drugPrice,
      drug_quantity: amountInCart,
      total_price: price,
      pharmacy_id: pharmacy_id,
    }

    axios.post('/add-to-cart', data).then(res => {
      if(res.data.status === 201){
        swal("Success",res.data.message,"success");
      }else if(res.data.status === 409){
        swal("Warning",res.data.message,"warning");
      }else if(res.data.status === 401){
        swal("Error",res.data.message,"error");
      }else if(res.data.status === 404){
        swal("Warning",res.data.message,"warning");
      }
    });
  }


      return (

          <>
              
              In Stock: {inStock}pcs
              <div className="pharmacy__basket__order-to-cart">
                <button className="pharmacy__basket__order__remove" onClick={ removeFromCart }>-</button>
                <button className="pharmacy__basket__order__add" onClick={ addToCart }>+</button> 
              </div>
              <span>Price: {price}kc</span>
              
              <button className="pharmacy__basket__button" onClick={submitAddToCart}>{amountInCart > 1 ? `Add ${amountInCart}  To Cart`  : 'Add To Cart'}</button>                 
          </>

      )

}