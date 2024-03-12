document.querySelector('.section-contact__content__form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Validation flags
    let isValid = true;

    // Check name field
    const nameInput = document.querySelector('.section-form__input[name="name"]');
    const nameWarning = nameInput.closest('.section-form__input-section').querySelector('.section-form__input-warning');
    let regexName = /^[a-zA-Zа-яА-Я\sćĆčČšŠđĐžŽ]{3,}$/;

    if (!regexName.test(nameInput.value.trim())) {
        nameWarning.classList.remove('display-none'); 
        nameWarning.classList.add('display-block');
        // Show warning
        isValid = false;
    } else {
        nameWarning.classList.remove('display-block');
        nameWarning.classList.add('display-none'); // Hide warning
    }

    // Add event listener to name input
    nameInput.addEventListener('input', function() {
        const nameValue = nameInput.value.trim();
        if (regexName.test(nameValue)) {
            nameWarning.classList.remove('display-block');
            nameWarning.classList.add('display-none'); // Hide warning
        }
    });

    // Check email field
    const emailInput = document.querySelector('.section-form__input[name="email"]');
    const emailWarning = emailInput.closest('.section-form__input-section').querySelector('.section-form__input-warning');

    // Function to validate email format
    function isValidEmail(email) {
        return /\S+@\S+\.\S+/.test(email);
    }

    if (!emailInput.value.trim() || !isValidEmail(emailInput.value.trim())) {
        emailWarning.classList.remove('display-none'); 
        emailWarning.classList.add('display-block'); // Show warning
        isValid = false;
    } else {
        emailWarning.classList.remove('display-block');
        emailWarning.classList.add('display-none'); // Hide warning
    }

    // Add event listener to email input
    emailInput.addEventListener('input', function() {
        const emailValue = emailInput.value.trim();
        if (isValidEmail(emailValue)) {
            emailWarning.classList.remove('display-block');
            emailWarning.classList.add('display-none'); // Hide warning
        }
    });

    // Check phone field
    const phoneInput = document.querySelector('.section-form__input[name="phone"]');
    const phoneWarning = phoneInput.closest('.section-form__input-section').querySelector('.section-form__input-warning');

    if (!phoneInput.value.trim()) {
        phoneWarning.style.display = 'block'; // Show warning
        isValid = false;
    } else {
        phoneWarning.classList.remove('display-block');
        phoneWarning.classList.add('display-none'); // Hide warning
    }

    // Add event listener to phone input
    phoneInput.addEventListener('input', function() {
        const phoneValue = phoneInput.value.trim();
        if (phoneValue) {
            phoneWarning.classList.remove('display-block');
            phoneWarning.classList.add('display-none'); // Hide warning
        }
    });

    // Check message field
    const messageInput = document.querySelector('.section-form__input[name="message"]');
    const messageWarning = messageInput.closest('.section-form__input-section').querySelector('.section-form__input-warning');

    if (!messageInput.value.trim()) {
        messageWarning.classList.remove('display-none'); 
        messageWarning.classList.add('display-block'); // Show warning
        isValid = false;
    } else {
        messageWarning.classList.remove('display-block');
        messageWarning.classList.add('display-none'); // Hide warning
    }

    // Add event listener to message input
    messageInput.addEventListener('input', function() {
        const messageValue = messageInput.value.trim();
        if (messageValue) {
            messageWarning.classList.remove('display-block');
            messageWarning.classList.add('display-none'); // Hide warning
        }
    });

    // If all fields are valid, you can submit the form or take further action
    if (isValid) {
        // Here you can add code to submit the form or take further action
        // For now, let's just log a message
        console.log("Form submitted successfully!");
    }
});
