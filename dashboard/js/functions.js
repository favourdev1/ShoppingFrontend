function formatCurrency(amount) {
    amount = parseFloat(amount);
    return amount.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}