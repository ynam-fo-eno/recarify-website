const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener("click", () => {
    container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
    container.classList.remove("active");
});


document.getElementById('signupForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const firstName = document.getElementById('firstName').value.trim();
    const secondName = document.getElementById('secondName').value.trim();
    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const month = document.getElementById('month').value.trim();
    const day = document.getElementById('day').value.trim();
    const year = document.getElementById('year').value.trim();

    if (password.length < 8) {
        alert('Password must be at least 8 characters long.');
        return;
    }

    if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }

    if (isNaN(day) || isNaN(year) || day < 1 || day > 31 || year.length !== 4 || month < 1 || month > 12) {

        alert('Please enter a valid birth date.');
        return;
    }

    alert('Sign-up successful!');
    this.reset();
});