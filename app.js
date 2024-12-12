// Initialize Telegram Web App
const tg = window.Telegram.WebApp;

// Display user info
document.addEventListener("DOMContentLoaded", () => {
    const userInfo = document.getElementById("user-info");
    const alertBox = document.getElementById("login-alert");
    const user = tg.initDataUnsafe.user;
    alertBox.classList.add("show");

    if (user) {
        userInfo.textContent = `Hello, ${user.first_name} `;
        alertBox.classList.add("alert-success");
    } else {
        userInfo.textContent = "Hello, guest!";
        alertBox.classList.add("alert-danger");
    }
});

// Close app when button clicked
document.getElementById("close-btn").addEventListener("click", () => {
    tg.close();
});
