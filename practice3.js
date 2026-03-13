function verifyPassword() {
    const password1 = document.getElementById('password1').value;
    const password2 = document.getElementById('password2').value;

    if (password1.length < 8) {
        alert("Password must be at least 8 characters long.");
        return;
    }

    if (password1 !== password2) {
        alert("Passwords do not match. Please try again.");
        return;
    }

    alert("Passwords match! Your password has been set.");
}