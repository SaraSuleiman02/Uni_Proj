var pass = document.getElementById("pass-validate");
var msg = document.getElementById("message");
var strength = document.getElementById("strength");
var rest = document.getElementById("restriction");
var form = document.getElementById("form");
var confirm = document.getElementById("Confirm");



pass.addEventListener('input', () => {
    // Show message and restrictions if password is not empty
    if (pass.value.length > 0) {
        msg.style.display = "block";
        rest.style.display = "block";
    } else {
        msg.style.display = "none";
        rest.style.display = "none";
    }

    //------------------------- Restrictions ----------------------------
    const hasLowercase = /[a-z]/.test(pass.value);
    const hasUppercase = /[A-Z]/.test(pass.value);
    const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(pass.value);
    const hasDigit = /\d/.test(pass.value);

    // Hide all restriction messages initially
    document.querySelectorAll('#restriction li').forEach(item => {
        item.style.display = 'none';
    });

    // Show only the restriction messages for the requirements that are not met
    if (pass.value.length < 8) {
        rest.querySelector('li:nth-child(1)').style.display = 'block';
    }
    if (!hasLowercase || !hasUppercase) {
        rest.querySelector('li:nth-child(2)').style.display = 'block';
    }
    if (!hasDigit) {
        rest.querySelector('li:nth-child(3)').style.display = 'block';
    }
    if (!hasSpecial) {
        rest.querySelector('li:nth-child(4)').style.display = 'block';
    }

    // password strength message
    if (pass.value.length < 8 || !hasLowercase || !hasUppercase || !hasSpecial || !hasDigit) {
        strength.innerHTML = "weak";
        msg.style.color = "red"; // Set color to red
        pass.style.borderColor = "red";
    } else {
        strength.innerHTML = "strong";
        msg.style.color = "green"; // Set color to green
        pass.style.borderColor = "green";
    }
});

//to prevent form submission if the password is weak 
form.addEventListener('submit', function (event) {
    const hasLowercase = /[a-z]/.test(pass.value);
    const hasUppercase = /[A-Z]/.test(pass.value);
    const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(pass.value);
    const hasDigit = /\d/.test(pass.value);


    if (pass.value !== confirm.value) {
        event.preventDefault();
        alert("Passwords do not match");
    }

    if (pass.value.length < 8 || !hasLowercase || !hasUppercase || !hasSpecial || !hasDigit) {
        // Password is weak, prevent form submission
        event.preventDefault();
        alert("Please ensure your password meets the requirements.");
    }



});
