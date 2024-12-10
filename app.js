// Initialize Telegram Web App
const tg = window.Telegram.WebApp;

// Display user info
document.addEventListener("DOMContentLoaded", () => {
    const userInfo = document.getElementById("user-info");
    const user = tg.initDataUnsafe.user;

    if (user) {
        userInfo.textContent = `Hello, ${user.first_name} (${user.username})!`;
    } else {
        userInfo.textContent = "Hello, guest!";
    }
});

// Close app when button clicked
document.getElementById("close-btn").addEventListener("click", () => {
    tg.close();
});
