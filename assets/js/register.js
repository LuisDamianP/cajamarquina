document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    if (password !== confirmPassword) {
        event.preventDefault();
        document.getElementById('confirmPassword').classList.add('is-invalid');
    } else {
        document.getElementById('confirmPassword').classList.remove('is-invalid');
    }
});
