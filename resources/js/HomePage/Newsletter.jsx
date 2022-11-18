import axios from "axios";
import { useState } from "react";

const Newsletter = () => {
    const [email, setEmail] = useState("");
    const sendNewsletter = async () => {
        const response = await axios.post("/api/sendTestEmail", {
            email: email,
        });
        console.log(response.status);
    };

    return (
        <>
            <input
                className="newsletter__right_input"
                type="text"
                name="email"
                placeholder="email address"
                onChange={(e) => {
                    setEmail(e.target.value);
                }}
            />
            <button
                className="newsletter__right_button"
                onClick={(e) => {
                    e.preventDefault();
                    sendNewsletter();
                }}
            >
                Subscribe
            </button>
        </>
    );
};

export default Newsletter;
