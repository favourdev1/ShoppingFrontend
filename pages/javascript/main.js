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
