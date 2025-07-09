@extends('layouts.app')

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
            />
        <title>Hotel Miranda</title>
    </head>
    <body>

        <!-- MAIN -->
        <main>
            <section class="title">
                <span class="title__span">the ultimate luxury</span>
                <h1 class="title__h1">about us</h1>
                <div class="title__div">
                    <p class="title__div__p">Home | <span>About</span></p>
                </div>
            </section>
            <section class="sectionVideo">
                <video
                    class="sectionVideo__video"
                    src="../assets/images/video/video01.mp4"
                    autoplay
                    loop
                    muted
                    ></video>
                <h2 class="sectionVideo__h2">
                    Hello. Our hotel has been present for over 20 years. We make the best
                    for all our customers.
                </h2>
                <div class="sectionVideo__div">
                    <div class="sectionVideo__div__card">
                        <img
                            class="sectionVideo__div__card__img"
                            src="../assets/images/icons/breakfast.svg"
                            alt="breakfast"
                            />
                        <h3 class="sectionVideo__div__card__h3">breakfast</h3>
                    </div>
                    <div class="sectionVideo__div__card sectionVideo__div__card--solid">
                        <img
                            class="sectionVideo__div__card__img"
                            src="../assets/images/icons/airplane.svg"
                            alt="airplane"
                            />
                        <h3
                            class="sectionVideo__div__card__h3 sectionVideo__div__card__h3--solid"
                            >
                            airport pickup
                        </h3>
                    </div>
                    <div class="sectionVideo__div__card">
                        <img
                            class="sectionVideo__div__card__img"
                            src="../assets/images/icons/map02.svg"
                            alt="map"
                            />
                        <h3 class="sectionVideo__div__card__h3">city guide</h3>
                    </div>
                    <div class="sectionVideo__div__card sectionVideo__div__card--hidden">
                        <img
                            class="sectionVideo__div__card__img"
                            src="../assets/images/icons/bbq.svg"
                            alt="bbq"
                            />
                        <h3 class="sectionVideo__div__card__h3">bbq party</h3>
                    </div>
                    <div class="sectionVideo__div__card">
                        <img
                            class="sectionVideo__div__card__img"
                            src="../assets/images/icons/luxury.svg"
                            alt="luxuryRoom"
                            />
                        <h3 class="sectionVideo__div__card__h3">luxury room</h3>
                    </div>
                </div>
            </section>
            <section class="sectionRestaurant">
                <img
                    class="sectionRestaurant__image"
                    src="../assets/images/food.jpg"
                    alt="restaurant"
                    />
                <div class="sectionRestaurant__div">
                    <span class="sectionRestaurant__div__span">restaurant</span>
                    <h2 class="sectionRestaurant__div__h2">
                        get restaurant facilities & many other more
                    </h2>
                    <p class="sectionRestaurant__div__p">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip.
                    </p>
                    <button
                        class="info__div__buttons__button info__div__buttons__button--solid"
                        >
                        take a tour
                    </button>
                </div>
            </section>
            <section class="facilities facilities--dark">
                <span class="facilities__span facilities__span--dark">facilities</span>
                <h2 class="facilities__h2 facilities__h2--dark">core features</h2>

                <div class="facilities__div facilities__div--dark">
                    <div class="facilities__div__item facilities__div__item--dark">
                        <img
                            class="facilities__div__item__img"
                            src="../assets/images/icons/rating.svg"
                            alt="rating"
                            />
                        <h3
                            class="facilities__div__item__h3 facilities__div__item__h3--dark"
                            >
                            have high rating
                        </h3>
                        <p class="facilities__div__item__p facilities__div__item__p--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item facilities__div__item--dark">
                        <img
                            class="facilities__div__item__img"
                            src="../assets/images/icons/time.svg"
                            alt="time"
                            />
                        <h3
                            class="facilities__div__item__h3 facilities__div__item__h3--dark"
                            >
                            quiet hours
                        </h3>
                        <p class="facilities__div__item__p facilities__div__item__p--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item facilities__div__item--dark">
                        <img
                            class="facilities__div__item__img"
                            src="../assets/images/icons/location.svg"
                            alt="location"
                            />
                        <h3
                            class="facilities__div__item__h3 facilities__div__item__h3--dark"
                            >
                            best locations
                        </h3>
                        <p class="facilities__div__item__p facilities__div__item__p--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item facilities__div__item--dark">
                        <img
                            class="facilities__div__item__img"
                            src="../assets/images/icons/cancellation.svg"
                            alt="cancellation"
                            />
                        <h3
                            class="facilities__div__item__h3 facilities__div__item__h3--dark"
                            >
                            free cancellation
                        </h3>
                        <p class="facilities__div__item__p facilities__div__item__p--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item facilities__div__item--dark">
                        <img
                            class="facilities__div__item__img"
                            src="../assets/images/icons/payment.svg"
                            alt="payment"
                            />
                        <h3
                            class="facilities__div__item__h3 facilities__div__item__h3--dark"
                            >
                            payment options
                        </h3>
                        <p class="facilities__div__item__p facilities__div__item__p--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item facilities__div__item--dark">
                        <img
                            class="facilities__div__item__img"
                            src="../assets/images/icons/offers.svg"
                            alt="offers"
                            />
                        <h3
                            class="facilities__div__item__h3 facilities__div__item__h3--dark"
                            >
                            special offers
                        </h3>
                        <p class="facilities__div__item__p facilities__div__item__p--dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>

                <div class="facilities__indicators facilities__indicators--dark">
                    <span
                        class="facilities__indicators__item facilities__indicators__item--dark active"
                        ></span>
                    <span
                        class="facilities__indicators__item facilities__indicators__item--dark"
                        ></span>
                    <span
                        class="facilities__indicators__item facilities__indicators__item--dark"
                        ></span>
                    <span
                        class="facilities__indicators__item facilities__indicators__item--dark"
                        ></span>
                    <span
                        class="facilities__indicators__item facilities__indicators__item--dark"
                        ></span>
                    <span
                        class="facilities__indicators__item facilities__indicators__item--dark"
                        ></span>
                </div>
            </section>
            <section class="sectionCounter">
                <span class="sectionCounter__span">counter</span>
                <h2 class="sectionCounter__h2">some fun facts</h2>

                <div class="sectionCounter__div">
                    <div class="sectionCounter__div__item">
                        <img
                            class="sectionCounter__div__item__icon"
                            src="../assets/images/icons/happy.svg"
                            alt="happy user"
                            />
                        <div class="sectionCounter__div__item__div">
                            <h3 class="sectionCounter__div__item__div__h3">8000</h3>
                            <p class="sectionCounter__div__item__div__p">happy users</p>
                        </div>
                        <img
                            class="sectionCounter__div__item__arrow"
                            src="../assets/images/icons/rightArrow.svg"
                            alt="arrow"
                            />
                    </div>
                    <div class="sectionCounter__div__item">
                        <img
                            class="sectionCounter__div__item__icon"
                            src="../assets/images/icons/reviews.svg"
                            alt="reviews"
                            />
                        <div class="sectionCounter__div__item__div">
                            <h3 class="sectionCounter__div__item__div__h3">10M</h3>
                            <p class="sectionCounter__div__item__div__p">
                                reviews & appriciate
                            </p>
                        </div>
                        <img
                            class="sectionCounter__div__item__arrow"
                            src="../assets/images/icons/rightArrow.svg"
                            alt="arrow"
                            />
                    </div>
                    <div class="sectionCounter__div__item">
                        <img
                            class="sectionCounter__div__item__icon"
                            src="../assets/images/icons/world.svg"
                            alt="world"
                            />
                        <div class="sectionCounter__div__item__div">
                            <h3 class="sectionCounter__div__item__div__h3">8000</h3>
                            <p class="sectionCounter__div__item__div__p">happy users</p>
                        </div>
                        <img
                            class="sectionCounter__div__item__arrow"
                            src="../assets/images/icons/rightArrow.svg"
                            alt="arrow"
                            />
                    </div>
                </div>

                <div class="swiper counter">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide counter-slide">
                            <img src="../assets/images/facts.webp" alt="counter Image" />
                        </div>
                        <div class="swiper-slide facts-slide">
                            <img src="../assets/images/facts02.webp" alt="counter Image 02" />
                        </div>
                    </div>

                    <div class="swiper-pagination counter"></div>
                </div>
            </section>
        </main>
        <!-- FOOTER -->
        <footer>
            <div class="socials">
                <img
                    class="socials__logo"
                    src="../assets/images/logoSolid.png"
                    alt="Hotel Miranda"
                    />
                <p class="socials__description">
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing
                    eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
                </p>
                <ul class="socials__list">
                    <li class="socials__list__item">
                        <img src="../assets/images/icons/facebook.svg" alt="facebook" />
                    </li>
                    <li class="socials__list__item socials__list__item-solid">
                        <img src="../assets/images/icons/twitter.svg" alt="twitter" />
                    </li>
                    <li class="socials__list__item">
                        <img src="../assets/images/icons/behance.svg" alt="behance" />
                    </li>
                    <li class="socials__list__item">
                        <img src="../assets/images/icons/linkedin.svg" alt="linkedin" />
                    </li>
                    <li class="socials__list__item">
                        <img src="../assets/images/icons/youtube.svg" alt="youtube" />
                    </li>
                </ul>
            </div>

            <div class="services">
                <h3 class="services__title">Services.</h3>
                <ul class="services__list">
                    <div class="services__list__column">
                        <li class="services__list__column__item">resturent & bar</li>
                        <li class="services__list__column__item">swimming pool</li>
                        <li class="services__list__column__item">wellness & pa</li>
                        <li class="services__list__column__item">restaurant</li>
                        <li class="services__list__column__item">conference room</li>
                        <li class="services__list__column__item">coctail party house</li>
                    </div>
                    <div class="services__list__column">
                        <li class="services__list__column__item">gaming zone</li>
                        <li class="services__list__column__item">marrige party</li>
                        <li class="services__list__column__item">party planning</li>
                        <li class="services__list__column__item">tour consultancy</li>
                    </div>
                </ul>
            </div>

            <div class="contact">
                <h3 class="contact__title">Contact us</h3>

                <div class="contact__section">
                    <img
                        class="contact__section__ico"
                        src="../assets/images/icons/phone.svg"
                        alt="phone"
                        />
                    <div class="contact__section__info">
                        <p class="contact__section__info__title">phone number</p>
                        <p class="contact__section__info__description">
                            +987 876 765 76 577
                        </p>
                    </div>
                </div>

                <div class="contact__section">
                    <img
                        class="contact__section__ico"
                        src="../assets/images/icons/mail.svg"
                        alt="mail"
                        />
                    <div class="contact__section__info">
                        <p class="contact__section__info__title">Email</p>
                        <p class="contact__section__info__description">
                            miranda-hotel@gmail.com
                        </p>
                    </div>
                </div>

                <div class="contact__section">
                    <img
                        class="contact__section__ico"
                        src="../assets/images/icons/map.svg"
                        alt="map"
                        />
                    <div class="contact__section__info">
                        <p class="contact__section__info__title">location</p>
                        <p class="contact__section__info__description">
                            Calle Floridablanca, 20 San Lorenzo de El Escorial
                        </p>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>copyright Sheila Lara García - 2025</p>
                <p>Terms of Use | Privacy Environmental Policy</p>
            </div>
        </footer>
        <!-- JS -->
        <script type="module" src="../js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </body>
</html>

