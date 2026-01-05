document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("#info-modal .btn-close").forEach(function (btn) {
        btn.addEventListener("click", function () {
            setCookie("hazard_modal_closed", "1", 30); // 30 Tage
            document.getElementById("info-modal").style.display = "none";
        });
    });
});

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === " ") c = c.substring(1);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length);
    }
    return null;
}