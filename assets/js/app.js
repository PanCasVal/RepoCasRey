document.addEventListener('DOMContentLoaded', () => {
    const year = document.getElementById('year');
    if (year) {
        year.textContent = new Date().getFullYear();
    }

    const buttons = document.querySelectorAll('.product-footer button');
    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            button.textContent = 'Agregado';
            button.disabled = true;
        });
    });
});
