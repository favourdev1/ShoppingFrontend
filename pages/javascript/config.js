function calculatePercentageDiscount(originalPrice, discountedPrice) {
    if (originalPrice <= 0 || discountedPrice < 0) {
        console.error("Invalid input. Prices must be greater than zero.");
        return null;
    }

    const percentageDiscount = ((originalPrice - discountedPrice) / originalPrice) * 100;
    return percentageDiscount+"% off";
}
function increaseQuantity(max) {
    const quantityInput = document.getElementById('modal_quantity');
    
    // Convert the current value to a number
    const currentValue = parseInt(quantityInput.value, 10);

    if (currentValue === max || currentValue > max) {
        quantityInput.value = max;
        return;
    }

    // Increment the quantity
    // quantityInput.value = currentValue + 1;
}

function reduceQuantity(min) {
    const quantityInput = document.getElementById('modal_quantity');
    
    // Convert the current value to a number
    const currentValue = parseInt(quantityInput.value, 10);

    if (currentValue === min || currentValue < min) {
        quantityInput.value = min;
        return;
    }

    // Decrement the quantity
    // quantityInput.value = currentValue - 1;
}
