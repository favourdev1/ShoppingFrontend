function addToCart(productId, quantity = 1, reload = false) {

    if (!isloggedIn) {
        window.location.href = loginPath
    }
    // Construct the data as an object
    var formData = new FormData();
    var quantity_value = quantity;

    formData.append('product_id', productId);
    formData.append('quantity', quantity_value);



    let responseMessage = ""
    let responseStatus = ""

    hideDialog(false)

    console.log(endPoint + addOrUpdateCartItemRoute + userId)
    axios.post(endPoint + addOrUpdateCartItemRoute + userId, formData, {
        headers: payloadRequest // Pass the headers as options
    })

    .then(response => {
            // Handle the success response
            console.log(response);
            responseMessage = response.data.message
            responseStatus = response.data.status

            if (response.data.status === 'success') {
                // Handle success scenario

                showAlert(responseMessage, responseStatus);

                if (reload) {

                    location.reload()
                }
            } else {
                // Handle error scenario
                console.error(response.data.message);
            }
        })
        .catch(error => {
            // Handle the erro
            responseMessage = error.response
            responseStatus = error.response.status
            showAlert(responseMessage, responseStatus);
            if (error.response && error.response.status === 401) {
                window.location = "<?php echo $loginPath ?>"
            }
        })

    .finally(function() {
        hideDialog(true)
    });

}

function movefromWishlistToCart(productId, quantity = 1, reload = false, event, ) {

    addToCart(productId, quantity, reload);
    addToWishlist(productId, reload, event, false);

}


function addEventListeners() {
    var wishlistButtons = document.querySelectorAll('.btn.btn-primary.btn-action.wishlist-page');
    wishlistButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            var productId = button.getAttribute('data-product-id');
            addToWishlist(productId, false, event);
        });
    });
}


function addEventListeners() {
    var wishlistButtons = document.querySelectorAll('.btn-action.wishlist-Btn');
    wishlistButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            var productId = button.getAttribute('data-product-id');
            addToWishlist(productId, false, event);
        });
    });
}



function addEventListeners() {
    var wishlistButtons = document.querySelectorAll('.btn-action.wishlist-Btn');
    wishlistButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            var productId = button.getAttribute('data-product-id');
            addToWishlist(productId, false, event);
        });
    });
}

// Call the function to add event listeners when the document is ready
document.addEventListener('DOMContentLoaded', function() {
    addEventListeners();
});


function addToWishlist(productId, reload = false, event, showAlertMessage = true) {

    if (!isloggedIn) {
        window.location.href = loginPath


    }

    // get the id of the element that was clicked when this function was called 
    var clickedElement = event.currentTarget;


    console.log(endPoint + addWishlistRoute)
    if (clickedElement.classList.contains('bg-dark') && clickedElement.classList.contains('text-white')) {
        clickedElement.classList.remove('bg-dark', 'text-white');
    } else {
        clickedElement.classList.add('bg-dark', 'text-white');
    }
    // Construct the data as an object
    var formData = new FormData();
    formData.append('product_id', productId);

    let responseMessage = ""
    let responseStatus = ""

    hideDialog(false)

    axios.post(endPoint + addWishlistRoute, formData, {
            headers: payloadRequest // Pass the headers as options
        })
        .then(response => {
            // Handle the success response
            console.log(response);
            responseMessage = response.data.message
            responseStatus = response.data.status

            if (response.data.status === 'success') {
                // Handle success scenario
                if (showAlertMessage) {
                    showAlert(responseMessage, responseStatus);

                }


                if (reload) {

                    location.reload()
                }
            } else {
                // Handle error scenario
                console.error(response.data.message);
            }
        })
        .catch(error => {
            // Handle the erro
            responseMessage = error.response
            responseStatus = error.status
            if (showAlertMessage) {
                showAlert(responseMessage, error);

            }
            if (error.response && error.response.status === 401) {
                window.location = "<?php echo $loginPath ?>"
            }
        })

    .finally(function() {
        hideDialog(true)
    });

}





//
//