@extends('layouts.app')

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./styles/css/style.css" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
            />
        <title>Hotel Miranda</title>
    </head>
    <body>
        <!-- HEADER -->
        <header class="header">
            <span class="header__span">We Make Your Feel Comfortable</span>
            <div class="header__div">
                <div class="header__div__hamburguer" id="hamburguerMenu">
                    <span class="header__div__hamburguer__span"></span>
                    <span class="header__div__hamburguer__span"></span>
                    <span class="header__div__hamburguer__span"></span>
                </div>
                <a href="./index.html">
                    <img
                        class="header__div__logo"
                        src="./assets/images/title.svg"
                        alt="Hotel Miranda"
                        />
                </a>
                <nav class="header__div__nav">
                    <ul class="header__div__nav__list">
                        <li class="header__div__nav__list__item">
                            <a
                                href="./pages/aboutUs.html"
                                class="header__div__nav__list__link"
                                >About Us</a
                            >
                        </li>
                        <li class="header__div__nav__list__item">
                            <a href="./pages/rooms.html" class="header__div__nav__list__link"
                               >Rooms</a
                            >
                        </li>
                        <li class="header__div__nav__list__item">
                            <a href="./pages/offers.html" class="header__div__nav__list__link"
                               >Offers</a
                            >
                        </li>
                        <li class="header__div__nav__list__item">
                            <a
                                href="./pages/contact.html"
                                class="header__div__nav__list__link"
                                >Contact</a
                            >
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__icons">
                <img
                    src="assets/images/icons/human.svg"
                    class="header__icons__icon"
                    alt="User Icon"
                    />
                <img
                    src="assets/images/icons/lupa.svg"
                    class="header__icons__icon"
                    alt="Search Icon"
                    />
            </div>
        </header>
        <!-- MAIN -->
        <main>
            <section class="info">
                <div class="info__div">
                    <span class="info__div__span">The ultimate luxury experience</span>
                    <h1 class="info__div__h1">The perfect base for you</h1>
                    <div class="info__div__buttons">
                        <button
                            class="info__div__buttons__button info__div__buttons__button--solid"
                            >
                            Take a tour
                        </button>
                        <button class="info__div__buttons__button">Learn more</button>
                    </div>
                </div>
                <div class="arrival">
                    <form action="" class="arrival__form">
                        <div class="arrival__form__div">
                            <label for="arrival" class="arrival__form__div__label"
                                   >Arrival Date</label
                            >
                            <input
                                type="date"
                                class="arrival__form__div__input"
                                id="arrival"
                                />
                        </div>
                        <div class="arrival__form__div">
                            <label for="departure" class="arrival__form__div__label"
                                   >Departure Date</label
                            >
                            <input
                                type="date"
                                class="arrival__form__div__input"
                                id="departure"
                                />
                        </div>
                        <div class="arrival__form__div">
                            <input
                                type="submit"
                                class="info__div__buttons__button info__div__buttons__button--solid"
                                value="Check availability"
                                />
                        </div>
                    </form>
                </div>
            </section>
            <section class="aboutus">
                <div class="aboutus__div">
                    <span class="aboutus__div__span">about us</span>
                    <h2 class="aboutus__div__h2">Discover our underground.</h2>
                    <p class="aboutus__div__p">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </p>
                    <button
                        class="info__div__buttons__button info__div__buttons__button--solid"
                        >
                        book now
                    </button>
                </div>

                <div class="aboutus__card">
                    <div class="aboutus__card__image">
                        <img src="assets/images/img01.jpg" alt="Our Team" />
                    </div>
                    <div class="aboutus__card__div">
                        <img
                            class="aboutus__card__div__icon"
                            src="assets/images/icons/team.svg"
                            alt="Team Ico"
                            />
                        <img
                            class="aboutus__card__div__iconBack"
                            src="assets/images/icons/team.svg"
                            alt="Team Ico Back"
                            />
                        <h3 class="aboutus__card__div__h3">strong team</h3>
                        <p class="aboutus__card__div__p">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>

                <div class="aboutus__card aboutus__card--dark">
                    <div class="aboutus__card__image">
                        <img src="assets/images/img02.jpg" alt="Our Team" />
                    </div>
                    <div class="aboutus__card__div">
                        <img
                            class="aboutus__card__div__icon"
                            src="assets/images/icons/calendar02.svg"
                            alt="Calendar Ico"
                            />
                        <h3 class="aboutus__card__div__h3">Luxury Room</h3>
                        <p class="aboutus__card__div__p">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor.
                        </p>
                    </div>
                </div>
            </section>

            <section class="rooms">
                <span class="rooms__span">rooms</span>
                <h2 class="rooms__h2">hand picked rooms</h2>

                <div class="rooms__icons">
                    <img
                        class="rooms__icons__item"
                        src="assets/images/icons/bed.svg"
                        alt="bed"
                        />
                    <img
                        class="rooms__icons__item"
                        src="./assets/images/icons/wifi.svg"
                        alt="wifi"
                        />
                    <img
                        class="rooms__icons__item"
                        src="assets/images/icons/car.svg"
                        alt="car"
                        />
                    <img
                        class="rooms__icons__item"
                        src="assets/images/icons/cold.svg"
                        alt="cold"
                        />
                    <img
                        class="rooms__icons__item"
                        src="assets/images/icons/gym.svg"
                        alt="gym"
                        />
                    <img
                        class="rooms__icons__item"
                        src="assets/images/icons/noSmoking.svg"
                        alt="no smoking"
                        />
                    <img
                        class="rooms__icons__item"
                        src="assets/images/icons/cocktail.svg"
                        alt="cocktail"
                        />
                </div>

                <div class="swiper main">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/room.webp" alt="Room Image" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/room02.jpg" alt="Room Image 02" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/room03.jpg" alt="Room Image 03" />
                        </div>
                    </div>

                    <div class="swiper-button-prev main"></div>
                    <div class="swiper-button-next main"></div>
                </div>

                <div class="rooms__div">
                    <h3 class="rooms__div__h3">Minimal duplex room</h3>
                    <p class="rooms__div__p">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore.
                    </p>
                    <p class="rooms__div__price"><span>$345</span>/Night</p>
                </div>
            </section>

            <section class="video">
                <span class="video__span">intro video</span>
                <h2 class="video__h2">meet with our luxury place.</h2>
                <p class="video__p">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat you have to understand this.
                </p>
                <video
                    class="video__video"
                    src="assets/images/video/video01.mp4"
                    autoplay
                    loop
                    muted
                    ></video>
                <button
                    class="info__div__buttons__button info__div__buttons__button--solid"
                    >
                    book now
                </button>
            </section>

            <section class="facilities">
                <span class="facilities__span">facilities</span>
                <h2 class="facilities__h2">core features</h2>

                <div class="facilities__div">
                    <div class="facilities__div__item">
                        <img
                            class="facilities__div__item__img"
                            src="assets/images/icons/rating.svg"
                            alt="rating"
                            />
                        <h3 class="facilities__div__item__h3">have high rating</h3>
                        <p class="facilities__div__item__p">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item">
                        <img
                            class="facilities__div__item__img"
                            src="assets/images/icons/time.svg"
                            alt="time"
                            />
                        <h3 class="facilities__div__item__h3">quiet hours</h3>
                        <p class="facilities__div__item__p">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item">
                        <img
                            class="facilities__div__item__img"
                            src="assets/images/icons/location.svg"
                            alt="location"
                            />
                        <h3 class="facilities__div__item__h3">best locations</h3>
                        <p class="facilities__div__item__p">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item">
                        <img
                            class="facilities__div__item__img"
                            src="assets/images/icons/cancellation.svg"
                            alt="cancellation"
                            />
                        <h3 class="facilities__div__item__h3">free cancellation</h3>
                        <p class="facilities__div__item__p">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item">
                        <img
                            class="facilities__div__item__img"
                            src="assets/images/icons/payment.svg"
                            alt="payment"
                            />
                        <h3 class="facilities__div__item__h3">payment options</h3>
                        <p class="facilities__div__item__p">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>

                    <div class="facilities__div__item">
                        <img
                            class="facilities__div__item__img"
                            src="assets/images/icons/offers.svg"
                            alt="offers"
                            />
                        <h3 class="facilities__div__item__h3">special offers</h3>
                        <p class="facilities__div__item__p">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna..
                        </p>
                    </div>
                </div>

                <div class="facilities__indicators">
                    <span class="facilities__indicators__item active"></span>
                    <span class="facilities__indicators__item"></span>
                    <span class="facilities__indicators__item"></span>
                    <span class="facilities__indicators__item"></span>
                    <span class="facilities__indicators__item"></span>
                    <span class="facilities__indicators__item"></span>
                </div>
            </section>
            <section class="food">
                <span class="food__span">menu</span>
                <h2 class="food__h2">our foods menu</h2>
                <img
                    class="food__image"
                    src="assets/images/icons/donut.svg"
                    alt="donut"
                    />

                <div class="swiper menu">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide menu">
                            <ul class="swiper-slide__list">
                                <li class="swiper-slide__list__item">
                                    <img
                                        class="swiper-slide__list__item__image"
                                        src="assets/images/foodlist.jpg"
                                        alt="egg & bacon"
                                        />
                                    <div class="swiper-slide__list__item__info">
                                        <h3 class="swiper-slide__list__item__info__title">
                                            Eggs & bacon
                                        </h3>
                                        <p class="swiper-slide__list__item__info__description">
                                            Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                            sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </li>
                                <li class="swiper-slide__list__item">
                                    <img
                                        class="swiper-slide__list__item__image"
                                        src="assets/images/foodlist02.webp"
                                        alt="tea or coffe"
                                        />
                                    <div class="swiper-slide__list__item__info">
                                        <h3 class="swiper-slide__list__item__info__title">
                                            tea or coffe
                                        </h3>
                                        <p class="swiper-slide__list__item__info__description">
                                            Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                            sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </li>
                                <li class="swiper-slide__list__item">
                                    <img
                                        class="swiper-slide__list__item__image"
                                        src="assets/images/foodlist03.png"
                                        alt="chia oatmeal"
                                        />
                                    <div class="swiper-slide__list__item__info">
                                        <h3 class="swiper-slide__list__item__info__title">
                                            chia oatmeal
                                        </h3>
                                        <p class="swiper-slide__list__item__info__description">
                                            Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                            sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide menu">
                            <ul>
                                <li class="swiper-slide__list__item">
                                    <img
                                        class="swiper-slide__list__item__image"
                                        src="assets/images/foodlist04.jpg"
                                        alt="fruit parfait"
                                        />
                                    <div class="swiper-slide__list__item__info">
                                        <h3 class="swiper-slide__list__item__info__title">
                                            fruit parfait
                                        </h3>
                                        <p class="swiper-slide__list__item__info__description">
                                            Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                            sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </li>
                                <li class="swiper-slide__list__item">
                                    <img
                                        class="swiper-slide__list__item__image"
                                        src="assets/images/foodlist05.jpg"
                                        alt="marmalades"
                                        />
                                    <div class="swiper-slide__list__item__info">
                                        <h3 class="swiper-slide__list__item__info__title">
                                            marmalade selection
                                        </h3>
                                        <p class="swiper-slide__list__item__info__description">
                                            Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                            sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </li>
                                <li class="swiper-slide__list__item">
                                    <img
                                        class="swiper-slide__list__item__image"
                                        src="assets/images/foodlist06.jpg"
                                        alt="cheese"
                                        />
                                    <div class="swiper-slide__list__item__info">
                                        <h3 class="swiper-slide__list__item__info__title">
                                            cheese plate
                                        </h3>
                                        <p class="swiper-slide__list__item__info__description">
                                            Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                            sed do eiusmod tempor.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="swiper-menu-nav">
                        <div class="swiper-button-prev menu"></div>
                        <div class="swiper-button-next menu"></div>
                    </div>
                </div>

                <div class="swiper food">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide food-slide">
                            <img src="assets/images/food.jpg" alt="food Image" />
                        </div>
                        <div class="swiper-slide food-slide">
                            <img src="assets/images/food02.jpg" alt="food Image 02" />
                        </div>
                        <div class="swiper-slide food-slide">
                            <img src="assets/images/food03.jpg" alt="food Image 03" />
                        </div>
                    </div>
                    <div class="swiper-pagination food"></div>
                </div>
            </section>
            <section class="statistics">
                <div class="statistics__div">
                    <img
                        class="statistics__div__image"
                        src="assets/images/icons/roket.svg"
                        alt="rocket"
                        />
                    <h2 class="statistics__div__h2">84k<span>+</span></h2>
                    <p class="statistics__div__p">projects are completed</p>
                </div>
                <div class="statistics__div">
                    <img
                        class="statistics__div__image"
                        src="assets/images/icons/team02.svg"
                        alt="team"
                        />
                    <h2 class="statistics__div__h2">10M<span>+</span></h2>
                    <p class="statistics__div__p">active backers around world</p>
                </div>
                <div class="statistics__div">
                    <img
                        class="statistics__div__image"
                        src="assets/images/icons/served.svg"
                        alt="served"
                        />
                    <h2 class="statistics__div__h2">02K<span>+</span></h2>
                    <p class="statistics__div__p">categories served</p>
                </div>
                <div class="statistics__div">
                    <img
                        class="statistics__div__image"
                        src="assets/images/icons/book.svg"
                        alt="book"
                        />
                    <h2 class="statistics__div__h2">100M<span>+</span></h2>
                    <p class="statistics__div__p">idea raised funds</p>
                </div>
            </section>
        </main>
        <footer>
            <div class="socials">
                <img class="socials__logo" src="assets/images/logoSolid.png" alt="Hotel Miranda">
                <p class="socials__description">
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
                </p>
                <ul class="socials__list">
                    <li class="socials__list__item"><img src="assets/images/icons/facebook.svg" alt="facebook"></li>
                    <li class="socials__list__item socials__list__item-solid"><img src="assets/images/icons/twitter.svg" alt="twitter"></li>
                    <li class="socials__list__item"><img src="assets/images/icons/behance.svg" alt="behance"></li>
                    <li class="socials__list__item"><img src="assets/images/icons/linkedin.svg" alt="linkedin"></li>
                    <li class="socials__list__item"><img src="assets/images/icons/youtube.svg" alt="youtube"></li>
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
                    <img class="contact__section__ico" src="assets/images/icons/phone.svg" alt="phone">
                    <div class="contact__section__info">
                        <p class="contact__section__info__title">phone number</p>
                        <p class="contact__section__info__description">+987 876 765 76 577</p>
                    </div>
                </div>

                <div class="contact__section">
                    <img class="contact__section__ico" src="assets/images/icons/mail.svg" alt="mail">
                    <div class="contact__section__info">
                        <p class="contact__section__info__title">Email</p>
                        <p class="contact__section__info__description">miranda-hotel@gmail.com</p>
                    </div>
                </div>

                <div class="contact__section">
                    <img class="contact__section__ico" src="assets/images/icons/map.svg" alt="map">
                    <div class="contact__section__info">
                        <p class="contact__section__info__title">location</p>
                        <p class="contact__section__info__description">calle san francisco 245, sevilla, españa</p>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>copyright Sheila Lara García - 2025</p>
                <p>Terms of Use | Privacy Environmental Policy</p>
            </div>
        </footer>
        <!-- JS -->
        <script type="module" src="./js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </body>
</html>
