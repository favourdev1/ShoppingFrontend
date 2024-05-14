const signupForm = document.getElementById('signupform')
const formData = new FormData(signupForm);
const alertHub = new AlertHub();
const errorEl = document.getElementById('error')
errorEl.style.display = "none"


// Append your form data
signupForm.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission
    errorEl.style.display = "none"

    const formData = new FormData(event.target);

    axios.post(apiUrl + "/register", formData, {
            headers: {
                // 'Accept': 'application/json',
            }
        })
        .then(response => {
            // console.log("Response Data:", response.data);
            var message = response.data.message
            var token = response.data.token
            errorEl.style.display = "none"
                // sessionStorage.setItem('token', token)

            alertHub.showAlert({
                title: "",
                description: message + "!     ",
                position: "top-right", // Available positions: top-right, bottom-right, top-left, bottom-left
                type: "success", // Available types: primary, info, success, warning, danger, dark
                timeout: 5, // Timeout in seconds (optional)
                closeButton: false, // Show a close button (optional)
                closeButtonSize: 20, // Size of the close button icon (optional)
                animation: "fade-in", // Choose an animation: fade-in, slide-in, slide-in-right, slide-in-left (optional)
            });


            setTimeout(() => {
                window.location.href = "signin.php"
            }, 1000);

        })
        .catch(error => {



            if (error.response) {
                if (error.response.data.errors) {
                    const errors = error.response.data.errors;
                    var errorResp = ""
                    Object.values(errors).forEach(errorArray => {
                        errorArray.forEach(errorMessage => {
                            errorResp += errorMessage + " <br> "
                            console.log(errorMessage);
                        });
                    });

                    errorEl.innerHTML = errorResp
                    errorEl.style.display = "block"

                }


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