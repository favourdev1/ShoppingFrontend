
const formData = new FormData(document.getElementById("loginForm"));
const alertHub = new AlertHub();



// Append your form data
document.getElementById("loginForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    const formData = new FormData(event.target);

    axios.post(apiUrl + "login", formData, {
        headers: {
            'Accept': 'application/json',
        }
    })
        .then(response => {
            // console.log("Response Data:", response.data);
            var message = response.data.message
            var token = response.data.token

            sessionStorage.setItem('token', token)

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


            setTimeout(() => {
                window.location.href="../index.php"
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
        });
})