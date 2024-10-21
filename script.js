$(document).ready(function() {
    // Function to load products from buy.json
    function loadProducts() {
        $.getJSON('buy.json', function(data) {
            let productList = $('#product-list');
            productList.empty(); // Clear existing content

            $.each(data.products, function(index, product) {
                productList.append(`
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="${product.image}" class="card-img-top" alt="${product.name}">
                            <div class="card-body">
                                <h5 class="card-title">${product.name}</h5>
                                <p class="card-text">${product.description}</p>
                                <p class="card-text">Price: ${product.price}</p>
                                <a href="#" class="btn btn-primary">Buy 1 Get 1 Free</a>
                            </div>
                        </div>
                    </div>
                `);
            });
        }).fail(function() {
            $('#product-list').html('<p>Failed to load products. Please try again later.</p>');
        });
    }

    // Call the function to load products on page load
    loadProducts();
});
