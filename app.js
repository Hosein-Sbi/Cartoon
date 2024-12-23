// Initialize Telegram Web App
const tg = window.Telegram.WebApp;

// Display user info
document.addEventListener("DOMContentLoaded", () => {
    // const userInfo = document.getElementById("user-info");
    const alertBox = document.getElementById("login-alert");
    const user = tg.initDataUnsafe.user;
    // alertBox.classList.add("show");

    if (user) {
        // userInfo.textContent = `Hello, ${user.first_name} `;
        alertBox.classList.add("alert-success");
        alertBox.innerHTML = `<strong>Hello ${user.first_name}, </strong>Welcome to CarToonTv Mini App :)<button type="button" class="btn-close" data-bs-dismiss="alert"></button>`;
    } else {
        // userInfo.textContent = "Hello, guest!";
        alertBox.classList.add("alert-danger");
        alertBox.innerHTML = `<strong>Error: </strong>!اطلاعات شما در تلگرام یافت نشد<button type="button" class="btn-close" data-bs-dismiss="alert"></button>`;

    }
});

// Close app when button clicked
document.getElementById("close-btn").addEventListener("click", () => {
    tg.close();
});
