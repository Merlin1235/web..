document.getElementById("myForm").addEventListener("submit", function(event) {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    if (username === "") {
        alert("Please enter your full name.");
        event.preventDefault();
        return;
    }

    if (email === "") {
        alert("Please enter your email address.");
        event.preventDefault();
        return;
    }

    if (password === "") {
        alert("Please enter a password.");
        event.preventDefault();
        return;
    }

    if (password !== confirm_password) {
        alert("Passwords do not match.");
        event.preventDefault();
        return;
    }
});