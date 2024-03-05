<div
    class="modal fade"
    id="addAddressModal"
    tabindex="-1"
    aria-labelledby="addAddressModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body p-6">
                <div class="d-flex justify-content-between mb-5">
                    <!-- heading -->
                    <div>
                        <h5
                            class="h6 mb-1"
                            id="addAddressModalLabel"
                        >New Shipping Address</h5>
                        <p class="small mb-0">Add new shipping address for your order delivery.</p>
                    </div>
                    <div>
                        <!-- button -->
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                </div>
                <!-- row -->

                <form id="addressForm">
                    <div class="row g-3">
                        <div class="col-12">
                            <label
                                for="firstname"
                                class="form-label small"
                                style="font-size:12px"
                            >First Name</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="First name"
                                aria-label="First name"
                                required=""
                                name="firstname"
                                id="firstname"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="lastname"
                                class="form-label small"
                                style="font-size:12px"
                            >Last Name</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Last name"
                                aria-label="Last name"
                                required=""
                                name="lastname"
                                id="lastname"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="city"
                                class="form-label small"
                                style="font-size:12px"
                            >City</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="City"
                                name="city"
                                id="city"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="address"
                                class="form-label small"
                                style="font-size:12px"
                            >Delivery Address</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Delivery Address"
                                name="delivery_address"
                                id="address"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="state"
                                class="form-label small"
                                style="font-size:12px"
                            >State</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="State"
                                name="state"
                                id="state"
                            />
                        </div>
                      
                        <div class="col-12">
                            <label
                                for="postal_code"
                                class="form-label small"
                                style="font-size:12px"
                            >Zip Code</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Zip Code"
                                name="postal_code"
                                id="postal_code"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="phone_number_1"
                                class="form-label small"
                                style="font-size:12px"
                            >Phone Number 1</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Phone Number 1"
                                name="phone_number_1"
                                id="phone_number_1"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                for="phone_number_2"
                                class="form-label small"
                                style="font-size:12px"
                            >Phone Number 2</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Phone Number 2"
                                name="phone_number_2"
                                id="phone_number_2"
                            />
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value="true"
                                    id="defaut_address"
                                    name="set_as_default"
                                />
                                <label
                                    class="form-check-label "
                                    style="font-size:12px"
                                    for="flexCheckDefault"
                                >Set as Default</label>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <button
                                type="button"
                                class="btn btn-outline-primary"
                                data-bs-dismiss="modal"
                            >Cancel</button>
                            <button
                                class="btn btn-primary"
                                type="button"
                                id="saveAddressBtn"
                            >Save Address</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
const alertHub = new AlertHub();
document.getElementById('saveAddressBtn').addEventListener('click', function() {
    validateAndSubmit();
});
token = getCookie('token')

function validateAndSubmit() {
    // Get form elements
    const form = document.getElementById('addressForm');
    const formElements = form.elements;

    // Flag to track validation status
    let isValid = true;

    // Validate each form field
    for (let i = 0; i < formElements.length; i++) {
        const element = formElements[i];

        // Check if the element is an input or select and is required
        if ((element.tagName === 'INPUT' || element.tagName === 'SELECT') && element.hasAttribute('required')) {
            if (element.value.trim() === '') {
                isValid = false;
                alertHub.showAlert({
                    title: "",
                    description: 'Please fill in all required fields.',
                    position: "top-right",
                    type: "danger",
                    timeout: 7,
                    closeButton: false,
                    closeButtonSize: 20,
                    animation: "fade-in",
                });

                break;
            }
        }
    }

    // If all fields are valid, submit the form
    if (isValid) {
        submitForm();
    }
}

function submitForm() {

    // Get the form data
    const formData = new FormData(document.getElementById('addressForm'));

    // Make an Axios POST request to your backend API
    axios.post('<?= $apiUrl ?>' + '/addresses/add/<?= $userId ?>', formData, {
            headers: {
                'Accept': 'application/json',
                'token': token,
                'Authorization': 'Bearer ' + token
            }
        })
        .then(response => {
            var status = response.data.status; // Access the status directly from the response object
      

                alertHub.showAlert({
                    title: "",
                    description: "Address successfully save!" + '',
                    position: "top-right",
                    type: "success",
                    timeout: 7,
                    closeButton: false,
                    closeButtonSize: 20,
                    animation: "fade-in",
                });
                location.reload()
       
        })
        .catch(error => {
            var errorMessage = error.response.data.message; // Access the error message from the response data
            alertHub.showAlert({
                title: "",
                description: errorMessage + " ",
                position: "top-right",
                type: "danger",
                timeout: 7,
                closeButton: false,
                closeButtonSize: 20,
                animation: "fade-in",
            });
        });



}
</script>