document.querySelector('.section-form__button').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission

    // Validation flags
    let isValid = true;

    // Check name field
    const nameInput = document.querySelector('.section-form__input[placeholder="Bogdan Bogdanovic"]');
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
    const emailInput = document.querySelector('.section-form__input[placeholder="bogdanbogdanovic@email.com"]');
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
    const phoneInput = document.querySelector('.section-form__input[placeholder="063-456-7890"]');
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

    // Check reservation date field
    const dateInput = document.querySelector('.section-form__input[placeholder="mm/dd/yyyy"]');
    const dateWarning = dateInput.closest('.section-form__input-section').querySelector('.section-form__input-warning');

    function isDateInPast(dateString) {
        const selectedDate = new Date(dateString);
        const currentDate = new Date();
        return selectedDate < currentDate;
    }

    if (isDateInPast(dateInput.value.trim())) {
        dateWarning.classList.remove('display-none'); 
        dateWarning.innerHTML = "Ne možete izabrati datum u prošlosti!";
        dateWarning.classList.add('display-block');// Show warning
        isValid = false;
    } else if (!dateInput.value.trim()) {
        dateWarning.classList.remove('display-none'); 
        dateWarning.innerHTML = "Morate izabrati datum. Dozvoljene su samo subote jer tada brodovi isplovljavaju!";
        dateWarning.classList.add('display-block');// Show warning
        isValid = false;
    } else {
        dateWarning.classList.remove('display-block');
        dateWarning.classList.add('display-none'); // Hide warning
    }

    // Add event listener to date input
    dateInput.addEventListener('input', function() {
        const dateValue = dateInput.value.trim();
        if (!isDateInPast(dateValue)) {
            dateWarning.classList.remove('display-block');
            dateWarning.classList.add('display-none'); // Hide warning
        }
    });

    // Check inclusive field
    const inclusiveInput = document.querySelector('.section-form__input-body select');
    const inclusiveWarning = inclusiveInput.closest('.section-form__input-section').querySelector('.section-form__input-warning');

    if (inclusiveInput.value === 'DA' || inclusiveInput.value === 'NE') {
        inclusiveWarning.classList.remove('display-block');
        inclusiveWarning.classList.add('display-none'); // Hide warning
    } else {
        inclusiveWarning.classList.remove('display-none'); 
        inclusiveWarning.classList.add('display-block');
        // Show warning
        isValid = false;
    }

    // Add event listener to inclusive input
    inclusiveInput.addEventListener('change', function() {
        if (inclusiveInput.value === 'DA' || inclusiveInput.value === 'NE') {
            inclusiveWarning.classList.remove('display-block');
            inclusiveWarning.classList.add('display-none'); // Hide warning
        }
    });


    // Check room number field
    let regexRoom = new RegExp('^[1-6]$')
    const roomInput = document.querySelector('.section-form__input[placeholder="2"]');
    const roomWarning = roomInput.closest('.section-form__input-section').querySelector('.section-form__input-warning');

    if (!regexRoom.test(roomInput.value.trim())) {
        roomWarning.classList.remove('display-none'); 
        roomWarning.classList.add('display-block');
        // Show warning
        isValid = false;
    } else {
        roomWarning.classList.remove('display-block');
        roomWarning.classList.add('display-none');
        // Hide warning
    }

    // Add event listener to room number input
    roomInput.addEventListener('input', function() {
        const roomValue = roomInput.value.trim();
        if (regexRoom.test(roomValue)) {
            roomWarning.classList.remove('display-block');
            roomWarning.classList.add('display-none'); // Hide warning
        }
    });


    // Check if skipper field is selected
    const skipperInput = document.querySelectorAll('.section-form__input-body select')[1];
    const skipperWarning = skipperInput.closest('.section-form__input-section').querySelector('.section-form__input-warning');

    if (skipperInput.value === 'DA' || skipperInput.value === 'NE') {
        skipperWarning.classList.remove('display-block');
        skipperWarning.classList.add('display-none');
        // Hide warning
    } else {
        skipperWarning.classList.remove('display-none'); 
        skipperWarning.classList.add('display-block');
        // Show warning
        isValid = false;
    }

    // Add event listener to skipper input
    skipperInput.addEventListener('change', function() {
        if (skipperInput.value === 'DA' || skipperInput.value === 'NE') {
            skipperWarning.classList.remove('display-block');
            skipperWarning.classList.add('display-none'); // Hide warning
        }
    });

    // Check if hostess field is selected
    const hostessInput = document.querySelectorAll('.section-form__input-body select')[2];
    const hostessWarning = hostessInput.closest('.section-form__input-section').querySelector('.section-form__input-warning');

    if (hostessInput.value === 'DA' || hostessInput.value === 'NE') {
        hostessWarning.classList.remove('display-block');
        hostessWarning.classList.add('display-none');
        // Hide warning
    } else {
        hostessWarning.style.display = 'block'; // Show warning
        isValid = false;
    }

    // Add event listener to hostess input
    hostessInput.addEventListener('change', function() {
        if (hostessInput.value === 'DA' || hostessInput.value === 'NE') {
            hostessWarning.classList.remove('display-block');
            hostessWarning.classList.add('display-none'); // Hide warning
        }
    });

    // Check if boat type is selected
    const boatTypeInputs = document.querySelectorAll('input[name="type"]');
    const boatTypeWarning = document.querySelector('#select-boat');

    let boatTypeValue; 

    let boatTypeSelected = false;
    boatTypeInputs.forEach(function(input) {
        if (input.checked) {
            boatTypeSelected = true;
            console.log(input)
            boatTypeValue = input.value
        }
    });
    if (!boatTypeSelected) {
        boatTypeWarning.style.display = 'block'; // Show warning
        isValid = false;
    } else {
        boatTypeWarning.classList.remove('display-block');
        boatTypeWarning.classList.add('display-none');
        // Hide warning
    }

    // Add event listener to boat type inputs
    boatTypeInputs.forEach(function(input) {
        input.addEventListener('change', function() {
            if (input.checked) {
                boatTypeWarning.classList.remove('display-block');
                boatTypeWarning.classList.add('display-none'); // Hide warning
            }
        });
    });

    // If all fields are valid, send email
    if (isValid) {
        const formData = new FormData(document.querySelector('form'));
        const email = formData.get('email');
        const name = formData.get('name')
        const type = formData.get('type');
        console.log(type)
        const date = formData.get('date')

        var parts = date.split("-");

        // Rearrange the parts to form the desired date format
        var formattedDate = parts[2] + "/" + parts[1] + "/" + parts[0];

        // Here you can add code to send an email using a server-side language like Node.js, PHP, etc.
        // Example: sendEmail(email, message);
        // You'll need to implement the sendEmail function or use a third-party email service.

        // For now, let's log the email content
        console.log("Email content:");
        console.log("To:", email);
        sendEmail(
            "veselinsevo@gmail.com", 
            "isidoraopresnik@gmail.com", 
            "veselinsevo@gmail.com", 
            `Uspesno ste poslali upit - ${name}, ${type}, ${formattedDate}`, 
            `
            Dragi ${name},

            Hvala vam što ste odabrali našu firmu za iznajmljivanje jedrilica i katamarana. Vaš upit je uspešno primljen.

            Detalji upita:

            Tip plovila: ${type}
            Datum rezervacije: ${date}
            Očekujte naš odgovor u narednih sat vremena kako bismo potvrdili vašu rezervaciju i pružili vam dodatne informacije o daljim koracima.

            U međuvremenu, slobodno nas kontaktirajte ukoliko imate bilo kakvih dodatnih pitanja ili zahteva.

            Srdačan pozdrav,
            MDSAILING
            mdsailing@gmail.com
            063505710

            `)
    }
});


function sendEmail(username, to, from, subject, body) {
    let password = '8AB30CC9F6C57EBA274F812FE9BFF154E996'
    Email.send(
        {
            Host: "smtp.elasticemail.com",
            Username: username,
            Password: password,
            To: to,
            From: from,
            Subject: subject,
            Body: body
        }
    ).then(
        message => alert(message)
    )

}

document.querySelector('#phone').addEventListener('input', function(event) {
    let input = event.target.value.replace(/\D/g, ''); // Remove non-numeric characters
    let size = input.length;

    // Format phone number

    if (size >= 4 && size < 7) {
        input = input.substring(0, 3) + '-' + input.substring(3);
    } else if (size >= 7 && size <= 9) {
        input = input.substring(0, 3) + '-' + input.substring(3, 6) + '-' + input.substring(6);
    } else if (size > 9) {
        input = input.substring(0, 3) + '-' + input.substring(3, 6) + '-' + input.substring(6, 8) + '-' + input.substring(8);
    }

    event.target.value = input;
    // Allow backspace and delete keys
    if (event.inputType === 'deleteContentBackward' || event.inputType === 'deleteContentForward') {
        return;
    }
});



const datePicker = document.getElementById('date');

datePicker.addEventListener('change', function(event) {
    const selectedDate = new Date(datePicker.value);
    const dayOfWeek = selectedDate.getDay();

    if (dayOfWeek !== 6) { // If the selected day is not Saturday
        // Calculate the number of days to add to reach the nearest Saturday
        const daysToAdd = dayOfWeek < 6 ? 6 - dayOfWeek : 6; // If it's already Saturday, add 0 days

        // Create a new date object and set it to the nearest Saturday
        const nearestSaturday = new Date(selectedDate);
        nearestSaturday.setDate(selectedDate.getDate() + daysToAdd);

        // Update the value of the date picker to the nearest Saturday
        datePicker.value = nearestSaturday.toISOString().split("T")[0];

        // Inform the user
        alert("Poštovani, možete izabrati samo subote, jer tada brodovi isplovljavaju. Vaš datum rezervacije je pomeren na najbližu subotu. Hvala");
    }
});



// Function to validate email format
function isValidEmail(email) {
    const re = /\S+@\S+\.\S+/;
    return re.test(email);
}

