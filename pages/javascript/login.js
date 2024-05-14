const formData = new FormData(document.getElementById("loginForm"));
const alertHub = new AlertHub();



// Append your form data
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission

    const formData = new FormData(event.target);

    hideDialog(false)
    axios.post(apiUrl + "/login", formData, {
            headers: {
                'Accept': 'application/json',
            }
        })
        .then(response => {
            // console.log("Response Data:", response.data);
            var message = response.data.message
            var token = response.data.data.token
            var userId = response.data.data.userId
            var isAdmin = false;
            if (response.data.data.isAdmin) {
                isAdmin = response.data.data.isAdmin;
            }


            // Calculate the expiration date for one day from now
            const expirationDate = new Date();
            expirationDate.setDate(expirationDate.getDate() + 1);

            // Format the expiration date in the required UTC format
            const formattedExpiration = expirationDate.toUTCString();
            try {
                // Set the cookie with the calculated expiration date
                document.cookie = "token=" + token + "; expires=" + formattedExpiration + "; path=/";
                document.cookie = "userId=" + userId + "; expires=" + formattedExpiration + "; path=/";
                document.cookie = "isAdmin=" + isAdmin + "; expires=" + formattedExpiration + "; path=/";

                // Log the current document.cookie value for debugging
                console.log("Cookies set:", document.cookie);

            } catch (error) {
                console.log(error)
            }

            alertHub.showAlert({
                title: "",
                description: response.data.message + "!     ",
                position: "top-right", // Available positions: top-right, bottom-right, top-left, bottom-left
                type: "success", // Available types: primary, info, success, warning, danger, dark
                timeout: 5, // Timeout in seconds (optional)
                closeButton: false, // Show a close button (optional)
                closeButtonSize: 20, // Size of the close button icon (optional)
                animation: "fade-in", // Choose an animation: fade-in, slide-in, slide-in-right, slide-in-left (optional)
            });

            console.log(isAdmin)
            console.log("Cookies set:", document.cookie);
            setTimeout(() => {
                if (isAdmin) {
                    window.location.href = "../dashboard/index.php"
                } else {
                    window.location.href = "../index.php"
                }
            }, 1000);

        })
        .catch(error => {

            if (error.response) {
                console.error("Error Status:", error.response.status);

                alertHub.showAlert({
                    title: "",
                    description: error.response.data.message + "    ",
                    position: "top-right", // Available positions: top-right, bottom-right, top-left, bottom-left
                    type: "danger", // Available types: primary, info, success, warning, danger, dark
                    timeout: 5, // Timeout in seconds (optional)
                    closeButton: false, // Show a close button (optional)
                    closeButtonSize: 20, // Size of the close button icon (optional)
                    animation: "fade-in", // Choose an animation: fade-in, slide-in, slide-in-right, slide-in-left (optional)
                });
                console.error("Error Data:", error.response.data.message);
            } else if (error.request) {
                // The request was made, but no response was received
                console.error("No response received");
            }
        })
        .finally(function() {
            hideDialog(true)
        });

})