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
                <h1 class="title__h1">new details</h1>
                <div class="title__div">
                    <p class="title__div__p">Home | <span>Blog</span></p>
                </div>
            </section>

            <section class="contactList">
                <div class="contactList__section">
                    <img class="contactList__section__ico" src="../assets/images/icons/map.svg" alt="map">
                    <div class="contactList__section__info">
                        <p class="contactList__section__info__title">Hotel Address</p>
                        <p class="contactList__section__info__description">Calle Floridablanca, 20 San Lorenzo de El Escorial, España</p>
                    </div>
                </div>

                <div class="contactList__section">
                    <img class="contactList__section__ico" src="../assets/images/icons/phone.svg" alt="phone">
                    <div class="contactList__section__info">
                        <p class="contactList__section__info__title">phone number</p>
                        <p class="contactList__section__info__description">+987 876 765 76 577</p>
                    </div>
                </div>

                <div class="contactList__section">
                    <img class="contactList__section__ico" src="../assets/images/icons/mail.svg" alt="mail">
                    <div class="contactList__section__info">
                        <p class="contactList__section__info__title">Email</p>
                        <p class="contactList__section__info__description">miranda-hotel@gmail.com</p>
                    </div>
                </div>
            </section>

            <section class="map">
                <img class="map__image" src="/assets/images/map.png" alt="map">
            </section>

            <section class="formSection">
                <form class="formSection__form" action="">
                    <div class="formSection__form__item">
                        <img class="formSection__form__item__ico" src="../assets/images/icons/user02.svg" alt="ico">
                        <input class="formSection__form__item__input" type="text" name="name" id="name" placeholder=" ">
                        <label class="formSection__form__item__label" for="name">Your full name</label>
                    </div>
                    <div class="formSection__form__item">
                        <img class="formSection__form__item__ico" src="../assets/images/icons/phone02.svg" alt="ico">
                        <input class="formSection__form__item__input" type="text" name="number" id="number" placeholder=" ">
                        <label class="formSection__form__item__label" for="number">Add your phone number</label>
                    </div>
                    <div class="formSection__form__item">
                        <img class="formSection__form__item__ico" src="../assets/images/icons/mail02.svg" alt="ico">
                        <input class="formSection__form__item__input" type="text" name="email" id="email" placeholder=" ">
                        <label class="formSection__form__item__label" for="email">Enter email address</label>
                    </div>
                    <div class="formSection__form__item">
                        <img class="formSection__form__item__ico" src="../assets/images/icons/subject.svg" alt="ico">
                        <input class="formSection__form__item__input" type="text" name="subject" id="subject" placeholder=" ">
                        <label class="formSection__form__item__label" for="subject">Enter subject</label>
                    </div>
                    <div class="formSection__form__item area">
                        <img class="formSection__form__item__ico" src="../assets/images/icons/pencil.svg" alt="ico">
                        <textarea class="formSection__form__item__textarea" name="message" id="message" placeholder=" "></textarea>
                        <label class="formSection__form__item__label" for="message">Tell us what you need</label>
                    </div>
                    <input type="submit" value="send" class="info__div__buttons__button info__div__buttons__button--solid formSection__form__item__submit">
                </form>
            </section>
        </main>
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
