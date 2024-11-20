// Використання document.addEventListener('DOMContentLoaded', ...):

//    -  Найбезпечніший спосіб переконатися, що код запускається після повного завантаження DOM - це використовувати DOMContentLoaded подію.
//    -  Огорніть ваш код у функцію, яка буде викликана після завантаження DOM.

document.addEventListener('DOMContentLoaded', () => {
  const scrollToTopButton = document.getElementById('scrollToTopButton');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 800) { 
                scrollToTopButton.style.display = 'block';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });

        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });




      
  