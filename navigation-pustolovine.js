window.addEventListener("load", function () {
    const navigationLink1 = document.getElementById("navigation-link-1");
    const navigationLink2 = document.getElementById("navigation-link-2");
    const navigationLink3 = document.getElementById("navigation-link-3");

    const headerLink1 = document.getElementById("header-link-1");
    const headerLink2 = document.getElementById("header-link-2");
    const headerLink3 = document.getElementById("header-link-3");

    const headerLinkHam1 = document.getElementById("header-link-hum-1");
    const headerLinkHam2 = document.getElementById("header-link-hum-2");
    const headerLinkHam3 = document.getElementById("header-link-hum-3");

    const headerLinkFooter1 = document.getElementById("header-link-footer-1");
    const headerLinkFooter2 = document.getElementById("header-link-footer-2");
    const headerLinkFooter3 = document.getElementById("header-link-footer-3");

    console.log(headerLinkFooter1);

    const blogPage1 = document.getElementById("blog-1");
    const blogPage2 = document.getElementById("blog-2");
    const blogPage3 = document.getElementById("blog-3");

    const burgerButton = document.getElementById("burgerButton");
    const menu = document.getElementById("menu");
    const hr1 = document.getElementById("hr1");
    const hr2 = document.getElementById("hr2");
    const hr3 = document.getElementById("hr3");

    const vodicMenu = document.getElementById("vodic-menu");
    const vodicArrow = document.getElementById("vodic-arrow");
    const pustolovineMenu = document.getElementById("pustolovine-menu");
    const pustolovineArrow = document.getElementById("pustolovine-arrow");

    const clickHandler = (link) => {
        // Get references to the video element and stop button
        const video = document.getElementById("pustolovineVideo");

        video.pause();

        if (link == "link-1") {
            navigationLink1.classList.add(
                "section-content__navigation__item__selected"
            );
            navigationLink2.classList.remove(
                "section-content__navigation__item__selected"
            );
            navigationLink3.classList.remove(
                "section-content__navigation__item__selected"
            );

            blogPage1.classList.add("section-content__blog__show");
            blogPage2.classList.remove("section-content__blog__show");
            blogPage3.classList.remove("section-content__blog__show");
        } else if (link == "link-2") {
            navigationLink1.classList.remove(
                "section-content__navigation__item__selected"
            );
            navigationLink2.classList.add(
                "section-content__navigation__item__selected"
            );
            navigationLink3.classList.remove(
                "section-content__navigation__item__selected"
            );

            blogPage1.classList.remove("section-content__blog__show");
            blogPage2.classList.add("section-content__blog__show");
            blogPage3.classList.remove("section-content__blog__show");
        } else if (link == "link-3") {
            navigationLink1.classList.remove(
                "section-content__navigation__item__selected"
            );
            navigationLink2.classList.remove(
                "section-content__navigation__item__selected"
            );
            navigationLink3.classList.add(
                "section-content__navigation__item__selected"
            );

            blogPage1.classList.remove("section-content__blog__show");
            blogPage2.classList.remove("section-content__blog__show");
            blogPage3.classList.add("section-content__blog__show");
        } else if (link == "link-4") {
            navigationLink1.classList.remove(
                "section-content__navigation__item__selected"
            );
            navigationLink2.classList.remove(
                "section-content__navigation__item__selected"
            );
            navigationLink3.classList.remove(
                "section-content__navigation__item__selected"
            );

            blogPage1.classList.remove("section-content__blog__show");
            blogPage2.classList.remove("section-content__blog__show");
            blogPage3.classList.remove("section-content__blog__show");
        } else if (link == "link-5") {
            navigationLink1.classList.remove(
                "section-content__navigation__item__selected"
            );
            navigationLink2.classList.remove(
                "section-content__navigation__item__selected"
            );
            navigationLink3.classList.remove(
                "section-content__navigation__item__selected"
            );

            blogPage1.classList.remove("section-content__blog__show");
            blogPage2.classList.remove("section-content__blog__show");
            blogPage3.classList.remove("section-content__blog__show");
        }
    };

    const handleHeader = (type) => {
        // Get references to the video element and stop button
        const video = document.getElementById("pustolovineVideo");
        const stopButton = document.getElementById("stopButton");

        video.pause();

        if (type == "vodic") {
            if (
                pustolovineMenu.classList.contains(
                    "header__pustolovine-menu__shown"
                )
            ) {
                pustolovineMenu.classList.toggle(
                    "header__pustolovine-menu__shown"
                );
                pustolovineArrow.classList.toggle("header__item__arrow__show");
            }
            vodicMenu.classList.toggle("header__vodic-menu__shown");
            vodicArrow.classList.toggle("header__item__arrow__show");
        } else if (type == "pustolovine") {
            if (vodicMenu.classList.contains("header__vodic-menu__shown")) {
                vodicMenu.classList.toggle("header__vodic-menu__shown");
                vodicArrow.classList.toggle("header__item__arrow__show");
            }
            pustolovineMenu.classList.toggle("header__pustolovine-menu__shown");
            pustolovineArrow.classList.toggle("header__item__arrow__show");
        }
    };

    const burgerHandler = () => {
        burgerButton.classList.toggle("active");
        menu.classList.toggle("active");
        hr1.classList.toggle("active");
        hr2.classList.toggle("active");
        hr3.classList.toggle("active");
    };
    navigationLink1.addEventListener("click", () => {
        clickHandler("link-1");
    });
    navigationLink2.addEventListener("click", () => {
        clickHandler("link-2");
    });
    navigationLink3.addEventListener("click", () => {
        clickHandler("link-3");
    });
    headerLink1.addEventListener("click", () => {
        clickHandler("link-1");
        handleHeader("pustolovine");
    });
    headerLink2.addEventListener("click", () => {
        clickHandler("link-2");
        handleHeader("pustolovine");
    });
    headerLink3.addEventListener("click", () => {
        clickHandler("link-3");
        handleHeader("pustolovine");
    });
    headerLinkFooter1.addEventListener("click", () => {
        clickHandler("link-1");
    });
    headerLinkFooter2.addEventListener("click", () => {
        clickHandler("link-2");
    });
    headerLinkFooter3.addEventListener("click", () => {
        clickHandler("link-3");
    });
    headerLinkHam1.addEventListener("click", () => {
        clickHandler("link-1");
        burgerHandler();
    });
    headerLinkHam2.addEventListener("click", () => {
        clickHandler("link-2");
        burgerHandler();
    });
    headerLinkHam3.addEventListener("click", () => {
        clickHandler("link-3");
        burgerHandler();
    });

    if (window.location.hash) {
        const fragment = window.location.hash.substring(1); // Remove the # symbol
        // Trigger click event on the corresponding navigation link based on the fragment
        if (fragment === "link-1") {
            clickHandler("link-1");
        } else if (fragment === "link-2") {
            clickHandler("link-2");
        } else if (fragment === "link-3") {
            clickHandler("link-3");
        } else if (fragment === "link-4") {
            clickHandler("link-4");
        } else if (fragment === "link-5") {
            clickHandler("link-5");
        }
    }
});
