import React, { useState, useEffect } from 'react';
 
export default function Register(props) {
 
    const [values, setValues] = useState({
        email: '',
        name: '',
        password: '',
        password_confirmation: ''
    })
 
    const handleSubmit = async (event) => {
 
        event.preventDefault();
 
        // make the AJAX request
        const response = await fetch('/register', {
            method: 'POST',
            body: JSON.stringify(values),
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
 
        // parse the response as JSON
        const response_data = await response.json();
 
        // if the response code is not 2xx (success)
        if (Math.floor(response.status / 100) !== 2) {
            switch (response.status) {
                case 422:
                    // handle validation errors here
                    console.log('VALIDATION FAILED:', response_data.errors);
                    break;
                default:
                    console.log('UNKNOWN ERROR', response_data);
                    break;
            }
        }
 
        // // with axios
        // try {
        //     // make the AJAX request
        //     const response = await axios.post('/register', values);
        //     // get the (already JSON-parsed) response data
        //     const response_data = response.data;
        // } catch (error) {
        //     // if the response code is not 2xx (success)
        //     switch (error.response.status) {
        //         case 422:
        //             // handle validation errors here
        //             console.log('VALIDATION FAILED:', error.response.data.errors);
        //             break;
        //         case 500:
        //             console.log('UNKNOWN ERROR', error.response.data);
        //             break;
        //     }
        // }
    }
 
    const handleChange = (event) => {
        setValues(previous_values => {
            return ({...previous_values,
                [event.target.name]: event.target.value
            });
        });
    }
 
    return (
        <div className="main">
            <section className="signup">
            {/* <!-- <img src="images/login-form-background.jpg" alt=""> --> */}
                <div className="container">
                    <div className="signup-content">
                        <form  id="signup-form" className="signup-form" action="/register" method="post" onSubmit={ handleSubmit }>
                            <h2 className="form-title">Create account</h2>
                            <div className="form-group">
                                <input
                                type="text"
                                className="form-input"
                                name="name"
                                id="name"
                                placeholder="Your Name"
                                value="{{ old('name') }}"
                                />
                            </div>
                            <div className="form-group">
                                <input
                                type="email"
                                className="form-input"
                                name="email"
                                id="email"
                                placeholder="Your Email"
                                value="{{ old('email') }}"
                                />
                            </div>
                            <div className="form-group">
                                <input
                                type="string"
                                className="form-input"
                                name="number"
                                id="number"
                                placeholder="Phone Number"
                                />
                            </div>
                            <div className="form-group">
                                <input
                                type="text"
                                className="form-input"
                                name="password"
                                id="password"
                                placeholder="Password"
                                value=""
                                />
                                <span
                                toggle="#password"
                                className="zmdi zmdi-eye field-icon toggle-password"
                                ></span>
                            </div>
                            <div className="form-group">
                                <input
                                type="password"
                                className="form-input"
                                name="re_password"
                                id="re_password"
                                placeholder="Repeat your password"
                                value=""
                                />
                            </div>
                            <div className="form-group">
                                <input
                                type="checkbox"
                                name="agree-term"
                                id="agree-term"
                                className="agree-term"
                                />
                                <label for="agree-term" className="label-agree-term"
                                ><span><span></span></span>I agree all statements in
                                <a href="#" className="term-service">Terms of service</a></label
                                >
                            </div>
                            <div className="form-group">
                                <input
                                type="submit"
                                name="submit"
                                id="submit"
                                className="form-submit"
                                value="Sign up"
                                />
                            </div>
                            </form>
                        <p className="loginhere">
                        Have already an account ?
                        <a href="/login" className="loginhere-link">Login here</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    );
}