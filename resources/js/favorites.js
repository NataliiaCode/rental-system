// додавання товару в кошик
document.addEventListener('DOMContentLoaded', () => {
const formBuy = document.forms['buy']; // отримуємо форму з HTML

formBuy.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(formBuy); // зібрали дані форми (id, кількість - який товар )
    // передати дані з JS до PHP
    const response = await axios.post('/cart/add', formData); // у відповіді ми отримуємо те, що виводиться на сторінці, до я кої звертаємось
    updateCart(response.data); // оновити кошик на сайті
})


// видалення товару з кошика
const cartModalBody = document.getElementById('cart-modal-body');

cartModalBody.addEventListener('click', (event) => {
    const elem = event.target;
    if (elem.classList.contains('remove-product-btn')) {
        const formDelete = elem.closest('form'); // отримуємо форму з HTML

        formDelete.addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(formDelete); // зібрали дані форми (id - який товар видяляємо)
            // передати дані з JS до PHP
            const response = await axios.post('/cart/remove', formData);
            updateCart(response.data); // оновити кошик на сайті
        })
    }

})









const updateCart = (cart) => {
    document.getElementById('cart-modal-body').innerHTML = cart;
}



})

