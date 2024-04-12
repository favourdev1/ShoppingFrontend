// fetch shipping cost using axios query 
// and update the shipping cost in the checkout page


var radioButtons = document.querySelectorAll('input[name="address"]');
var selectedAddressId = document.querySelector('input[name="address"]:checked').dataset.addressId;
console.log(selectedAddressId)
document.getElementById('shippingCost').innerHTML = "Calculating...";
document.getElementById('subTotalPrice').innerHTML = "Calculating...";
var itemSubTotalNum = document.getElementById('itemSubtotal').innerText;
const tax = document.getElementById('tax').innerText;
document.addEventListener('DOMContentLoaded', function() {
    hideDialog(false);

    fetchShippingCost();

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            selectedAddressId = this.dataset.addressId;
            fetchShippingCost();
            // console.log(selectedAddressId);
        });
    });



    function fetchShippingCost() {
        var shippingCostElement = document.getElementById('shippingCost');
        var formData = new FormData();
        hideDialog(false);

        formData.append('address', selectedAddressId);

        axios.post(endPoint + ShippingCostRoute, formData, {
                headers: payloadRequest // Pass the headers as options
            })
            .then(response => {

                if (response.data.status === "success") {
                    var shippingCost = response.data.data.shipping_cost;
                    shippingCostElement.innerHTML = "$" + shippingCost;
                    //sum the total 
                    let str = itemSubTotalNum;
                    let subtotalNum = 0;

                    console.log(str)
                    if (str.includes("$")) {
                        str = str.replace("$", ""); // Remove the dollar sign
                        str = str.replace(",", ""); // Remove the comma
                        subtotalNum = parseFloat(str); // Convert the string to a number
                        console.log(num); // Outputs: 4838
                    } else {
                        str = str.replace("$", ""); // Remove the dollar sign
                        str = str.replace(",", ""); // Remove the comma
                        subtotalNum = parseFloat(str);
                        subtotalNum = parseFloat(str);

                    }

                    console.log(subtotalNum);
                    var subTotalPrice = document.getElementById('subTotalPrice');
                    console.log(parseFloat(subtotalNum) + shippingCost + tax)
                    var totalPrice = parseFloat(subtotalNum) + parseFloat(shippingCost) + parseFloat(tax);
                    subTotalPrice.innerHTML = "$" + totalPrice;
                    console.log(totalPrice);
                } else {
                    showAlert(response.data.message, "error")
                    console.log(response.data.message);
                }
            })
            .catch(error => {
                // Handle the error
                var shippingCostElement = document.getElementById('shippingCost');

                showAlert("Error", "An error occured while fetching shipping cost", "error")
                shippingCostElement.innerHTML = "Not available";
                console.log(error);
            })
            .finally(function() {
                hideDialog(true)
            });
    }
})