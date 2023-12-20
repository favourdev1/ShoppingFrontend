// Retrieve the value of a cookie by key
function getCookie(key) {
    const cookies = document.cookie.split("; ");
    for (const cookie of cookies) {
        const [cookieKey, value] = cookie.split("=");
        if (cookieKey === key) {
            return decodeURIComponent(value);
        }
    }
    return null;
}

