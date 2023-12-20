document.addEventListener('DOMContentLoaded', function () {
    const alertHub = new AlertHub();
    checkAuth();
    const token = getCookie('token');
    console.log(token);


    axios.get(apiUrl + "/products", {
        headers: {
            'Accept': '*/*',
            'Cookie': 'access_token=' + token,
            'Authorization': 'Bearer ' + token,
        }
    })
    .then(response => {
        var products = response.data.data;
        console.log(products);
        

            // Iterate over the products and create table rows
            console.log(products.length)
            // Clear existing rows in the table
            const tableBody = document.querySelector('.table tbody');
            tableBody.innerHTML = '';

            products.forEach(product => {
                const productname =  product.name.substring(0, 30)
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="product${product.id}" />
                            <label class="form-check-label" for="product${product.id}"></label>
                        </div>
                    </td>
                    <td><a href="#!"><img src="${product.imageUrl}" alt="" class="icon-shape icon-md" /></a></td>
                    <td><a href="#" class="text-reset">${productname }</a></td>
                    <td>${product.category}</td>
                    <td><span class="badge bg-light-primary text-dark-primary">${product.status}</span></td>
                    <td>${"$"+product.price}</td>
                    <td>${product.created_at}</td>
                    <td>
                        <div class="dropdown">
                            <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="feather-icon icon-more-vertical fs-5"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3"></i>Edit</a></li>
                            </ul>
                        </div>
                    </td>
                `;
    
                // Append the new row to the table
                tableBody.appendChild(newRow);
            });
        })
        .catch(error => {
            if (error.response) {
                console.error("Error Status:", error.response.status);
                console.error("Error Data:", error.response.data.message);
            } else if (error.request) {
                console.error("No response received");
            }
        });
});
