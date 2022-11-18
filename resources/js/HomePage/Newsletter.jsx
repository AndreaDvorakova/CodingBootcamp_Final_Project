import axios from "axios";

const Newsletter = () => {
    const sendNewsletter = async () => {
        const response = await axios.get("/api/sendTestEmail");
        console.log(response.status);
    };

    return (
        <>
            <input
                className="newsletter__right_input"
                type="text"
                placeholder="email address"
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
