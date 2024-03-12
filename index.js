
window.addEventListener('load', function () {

    const radioBody1 = document.querySelector("#radio-body-1")
    const radioButton1 = document.querySelector("#radio-button-1")
    const radioBody2 = document.querySelector("#radio-body-2")
    const radioButton2 = document.querySelector("#radio-button-2")

    const burgerButton = document.getElementById('burgerButton');
    const menu = document.getElementById('menu');
    const hr1 = document.getElementById('hr1')
    const hr2 = document.getElementById('hr2')
    const hr3 = document.getElementById('hr3')

    const vodicButton = document.getElementById("vodic")
    const vodicMenu = document.getElementById("vodic-menu")
    const vodicArrow = document.getElementById("vodic-arrow")
    const pustolovineButton = document.getElementById("pustolovine")
    const pustolovineMenu = document.getElementById("pustolovine-menu")
    const pustolovineArrow = document.getElementById("pustolovine-arrow")

    const vodicHamburger = document.getElementById('vodic-hamburger')
    const vodicHamburgerMenu = document.getElementById('vodic-hamburger-menu')
    const vodicHamburgerArrow = document.getElementById('vodic-hamburger-arrow')
    const pustolovineHamburger = document.getElementById('pustolovine-hamburger')
    const pustolovineHamburgerMenu = document.getElementById('pustolovine-hamburger-menu')
    const pustolovineHamburgerArrow = document.getElementById('pustolovine-hamburger-arrow')

    burgerButton.addEventListener('click', function () {
        menu.classList.toggle('active');
        this.classList.toggle('active');
        hr1.classList.toggle('active')
        hr2.classList.toggle('active')
        hr3.classList.toggle('active')
    });

    radioBody1.addEventListener("click", () => {
        if (radioButton1.checked && !radioButton2.checked) {
            radioBody1.classList.remove("section-form__radio-body__selected")
            radioButton1.classList.remove("section-form__radio__selected")
            radioButton1.checked = false
        } else if (!radioButton1.checked && !radioButton2.checked) {
            radioBody1.classList.add("section-form__radio-body__selected")
            radioButton1.classList.add("section-form__radio__selected")
            radioButton1.checked = true
        } else if (!radioButton1.checked && radioButton2.checked) {
            radioBody1.classList.add("section-form__radio-body__selected")
            radioButton1.classList.add("section-form__radio__selected")
            radioButton1.checked = true
            radioBody2.classList.remove("section-form__radio-body__selected")
            radioButton2.classList.remove("section-form__radio__selected")
            radioButton2.checked = false
        }
    })
    radioBody2.addEventListener("click", () => {
        if (radioButton2.checked && !radioButton1.checked) {
            radioBody2.classList.remove("section-form__radio-body__selected")
            radioButton2.classList.remove("section-form__radio__selected")
            radioButton2.checked = false
        } else if (!radioButton2.checked && !radioButton1.checked) {
            radioBody2.classList.add("section-form__radio-body__selected")
            radioButton2.classList.add("section-form__radio__selected")
            radioButton2.checked = true
        } else if (!radioButton2.checked && radioButton1.checked) {
            radioBody2.classList.add("section-form__radio-body__selected")
            radioButton2.classList.add("section-form__radio__selected")
            radioButton2.checked = true
            radioBody1.classList.remove("section-form__radio-body__selected")
            radioButton1.classList.remove("section-form__radio__selected")
            radioButton1.checked = false
        }
    })

    vodicButton.addEventListener("click", () => {
        if (pustolovineMenu.classList.contains("header__pustolovine-menu__shown")) {
            pustolovineMenu.classList.toggle("header__pustolovine-menu__shown")
            pustolovineArrow.classList.toggle("header__item__arrow__show")
        }
        vodicMenu.classList.toggle("header__vodic-menu__shown")
        vodicArrow.classList.toggle("header__item__arrow__show")
    })
    pustolovineButton.addEventListener("click", () => {
        if (vodicMenu.classList.contains("header__vodic-menu__shown")) {
            vodicMenu.classList.toggle("header__vodic-menu__shown")
            vodicArrow.classList.toggle("header__item__arrow__show")
        }
        pustolovineMenu.classList.toggle("header__pustolovine-menu__shown")
        pustolovineArrow.classList.toggle("header__item__arrow__show")
    })


    vodicHamburger.addEventListener("click", () => {
        if (pustolovineHamburgerArrow.classList.contains("header__item__arrow__show")) {
            pustolovineHamburgerMenu.classList.toggle("header__pustolovine-hamburger-menu__show")
            pustolovineHamburgerArrow.classList.toggle("header__item__arrow__show")
        }
        vodicHamburgerMenu.classList.toggle("header__vodic-hamburger-menu__show")
        vodicHamburgerArrow.classList.toggle("header__item__arrow__show")
    })
    pustolovineHamburger.addEventListener("click", () => {
        if (vodicHamburgerArrow.classList.contains("header__item__arrow__show")) {
            vodicHamburgerMenu.classList.toggle("header__vodic-hamburger-menu__show")
            vodicHamburgerArrow.classList.toggle("header__item__arrow__show")
        }
        pustolovineHamburgerMenu.classList.toggle("header__pustolovine-hamburger-menu__show")
        pustolovineHamburgerArrow.classList.toggle("header__item__arrow__show")
    })
});



async function displaySlider() {
    let slides = [
        {
            src: './assets/images/prednosti/Istrazivanje.jpg',
            heading: 'Istraživanje',
            desc: 'Otkrijte magiju plovidbe brodom dok istražujete netaknuta ostrva i živopisne gradove duž obale. Prepustite se avanturi i stvorite nezaboravne trenutke uz našu ekskluzivnu ponudu putovanja.'
        },
        {
            src: './assets/images/prednosti/Opustanje.jpg',
            heading: 'Opuštanje',
            desc: 'Opustite se na Jadranskom moru, uživajući u mirnom ritmu valova i bezbrižnom trenutku koji vas odvodi daleko od svakodnevnih briga.'
        },
        {
            src: './assets/images/prednosti/Provod.jpg',
            heading: 'Provod',
            desc: 'Uživajte u živopisnim večerima uz provod i izlaske, gde se spoj tradicionalne gostoljubivosti, ukusne hrane i energične muzike stapa u nezaboravno iskustvo koje će vas obasjati sjajem jadranskog noćnog neba.'
        },
        {
            src: './assets/images/prednosti/Plovidba.jpg',
            heading: 'Plovidba',
            desc: 'Plovite morem, osluškujte šum talasa dok vas vodi u avanturu punu tajni i otkrića.'
        },
        {
            src: './assets/images/prednosti/Plivanje.jpg',
            heading: 'Plivanje',
            desc: 'Plivajte na moru dok jedrite, osetite slani dodir vode na koži dok se prepuštate plesu talasa i igri sunčevih zraka na površini.'
        },
    ];
    let slider = document.querySelector(".section-plovila-2__card-2");

    let slideInterval;
    let sliderBrojac = 0;

    renderSlider();

    function renderSlider() {
        slider.innerHTML = `
            <div class="slider-img-container">
                <img class="section-plovila-2__card-2__image small-img" src="${slides[getPreviousIndex(sliderBrojac)].src}" data-index="${getPreviousIndex(sliderBrojac)}" />
                <img class="section-plovila-2__card-2__image current-slide" src="${slides[sliderBrojac].src}" data-index="${sliderBrojac}" />
                <img class="section-plovila-2__card-2__image small-img" src="${slides[getNextIndex(sliderBrojac)].src}" data-index="${getNextIndex(sliderBrojac)}" />
            </div>
            <p class="section-plovila-2__card__heading">${slides[sliderBrojac].heading}</p>
            <p class="section-plovila-2__card__paragraph">${slides[sliderBrojac].desc}</p>`;

        // Add event listeners to small images for switching to clicked image
        document.querySelectorAll(".small-img").forEach(smallImg => {
            smallImg.addEventListener("click", function () {
                clearInterval(slideInterval);
                sliderBrojac = parseInt(this.dataset.index);
                renderSlider();
            });
        });

        // Clear the previous interval and start a new one
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 10000);
        document.querySelector(".current-slide").classList.add("slide-animation");
    }

    function getNextIndex(currentIndex) {
        return (currentIndex + 1) % slides.length;
    }

    function getPreviousIndex(currentIndex) {
        return (currentIndex - 1 + slides.length) % slides.length;
    }

    function nextSlide() {
        sliderBrojac = getNextIndex(sliderBrojac);
        renderSlider();
    }

    function prevSlide() {
        sliderBrojac = getPreviousIndex(sliderBrojac);
        renderSlider();
    }

    let prevBtn = document.querySelector("#prev");
    let nextBtn = document.querySelector("#next");

    prevBtn.addEventListener("click", function () {
        clearInterval(slideInterval);
        prevSlide();
    });
    nextBtn.addEventListener("click", function () {
        clearInterval(slideInterval);
        nextSlide();
    });
}

displaySlider();


