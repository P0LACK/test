document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const errorContainer = document.getElementById("error");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        errorContainer.textContent = "";

        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();

        if (!username || !password) {
            errorContainer.textContent = "Please enter both username and password";
            return;
        }

        if (username === "admin" && password === "admin") {
            window.location.href = "../index.php";
        } else {
            errorContainer.textContent = "Invalid username or password";
        }
    });
});