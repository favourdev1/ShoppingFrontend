// fetch shipping cost using axios query 
// and update the shipping cost in the checkout page


    var radioButtons = document.querySelectorAll('input[name="flexRadioDefault"]');
    var selectedAddressId = document.querySelector('input[name="flexRadioDefault"]:checked').dataset.addressId;
 

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            selectedAddressId = this.dataset.addressId;
            fetchShippingCost();
            console.log(selectedAddressId);
        });
    });



function fetchShippingCost() {
    var formData = new FormData();
    hideDialog(false);
    console.log(selectedAddressId);
    formData.append('address', selectedAddressId);

    axios.post(endPoint + ShippingCostRoute, formData, {
        headers: payloadRequest // Pass the headers as options
    })
    .then(response => {
        if (response.data.status === "success") {
            var shippingCost = response.data.data.shipping_cost;
            var shippingCostElement = document.getElementById('shippingCost');
            shippingCostElement.innerHTML = "$" +shippingCost;
            console.log(shippingCost);
        } else {
            console.log(response.data.message);
        }
    })
    .catch(error => {
        // Handle the error
        console.log(error);
    })
    .finally(function() {
        hideDialog(true)
    });
}

