import "bootstrap/dist/css/bootstrap.min.css";

const Carousel = () => {
    return (
        <>
            <div className="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>
            <div className="carousel-inner">
                <div class="carousel-item active">
                    <svg
                        className="bd-placeholder-img"
                        width="100%"
                        height="100%"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                        preserveAspectRatio="xMidYMid slice"
                        focusable="false"
                    >
                        <rect width="100%" height="100%" fill="white" />
                    </svg>

                    <div className="container">
                        <div className="carousel-caption text-start">
                            <img
                                src="/images/drugs/STREPILS_EXTRA_BLACKCURRENT.jpg"
                                alt="Strepsils blackcurrant"
                            />
                            <div className="carousel-caption__right">
                                <h2>STREPSILS EXTRA BLACKCURRANT LOZENGES</h2>
                                <p>
                                    Strepsils Honey and Lemon Lozenges, contain
                                    a combination of two effective antiseptics
                                    (2, 4-Dichlorobenzyl alcohol 1.2mg,
                                    Amylmetacresol 0.6mg) to relieve the
                                    discomfort of sore throats in the soothing
                                    honey and lemon Lozenge format.
                                </p>
                            </div>
                            {/* <p>
                                <a className="btn btn-lg btn-primary" href="#">
                                    Sign up today
                                </a>
                            </p> */}
                        </div>
                    </div>
                </div>
                <div className="carousel-item" id="carousel">
                    <svg
                        className="bd-placeholder-img"
                        width="100%"
                        height="100%"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                        preserveAspectRatio="xMidYMid slice"
                        focusable="false"
                    >
                        <rect width="100%" height="100%" fill="white" />
                    </svg>

                    <div className="container">
                        <div className="carousel-caption">
                            <div className="carousel-caption__right">
                                <h2>STREPSILS HONEY & LEMON LOZENGES</h2>
                                <p>
                                    Strepsils Honey and Lemon Lozenges, contain
                                    a combination of two effective antiseptics
                                    (2, 4-Dichlorobenzyl alcohol 1.2mg,
                                    Amylmetacresol 0.6mg) to relieve the
                                    discomfort of sore throats in the soothing
                                    honey and lemon Lozenge format.
                                </p>
                            </div>
                            <img
                                src="/images/drugs/STREPSILS_HONEY_LEMON.jpg"
                                alt="Strepsils honey"
                            />
                            {/* <p>
                                <a className="btn btn-lg btn-primary" href="#">
                                    Learn more
                                </a>
                            </p> */}
                        </div>
                    </div>
                </div>
                <div className="carousel-item">
                    <svg
                        className="bd-placeholder-img"
                        width="100%"
                        height="100%"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                        preserveAspectRatio="xMidYMid slice"
                        focusable="false"
                    >
                        <rect width="100%" height="100%" fill="white" />
                    </svg>

                    <div className="container">
                        <div className="carousel-caption text-end">
                            <img
                                src="/images/drugs/Strepsils_Intensive_Orange_Sugar_Free_Lozenges.jpg"
                                alt="Strepsils Orange"
                            />
                            <div className="carousel-caption__right">
                                <h2>
                                    STREPSILS INTENSIVE ORANGE SUGAR FREE
                                    LOZENGES
                                </h2>
                                <p>
                                    If you require a sugar free lozenge, try our
                                    Strepsils Intensive Orange Sugar-Free
                                    Lozenges.Intensive Orange Sugar Free
                                    lozenges are the only sugar free lozenges
                                    containing flurbiprofen for fast, targeted,
                                    and long lasting relief. Suitable for?
                                    Intensive can be used to relieve sore
                                    throats in adults and children over the age
                                    of 12 years.
                                </p>
                            </div>
                            {/* <p>
                                <a className="btn btn-lg btn-primary" href="#">
                                    Browse gallery
                                </a>
                            </p> */}
                        </div>
                    </div>
                </div>
            </div>
            <button
                className="carousel-control-prev"
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide="prev"
            >
                <span
                    className="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                <span className="visually-hidden">Previous</span>
            </button>
            <button
                className="carousel-control-next"
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide="next"
            >
                <span
                    className="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                <span className="visually-hidden">Next</span>
            </button>
        </>
    );
};
export default Carousel;
