{{-- <div class="fixed-bottom d-flex justify-content-start mb-3 mr-3;" style="width: 100px;">
 
    <button type="button" class="btn btn-warning rounded-circle btn-lg" data-bs-toggle="collapse"
        data-bs-target="#speedDialMenu" aria-expanded="false" aria-controls="speedDialMenu">
        <i class="bi bi-envelope-fill"></i>
    </button>

    <div class="collapse" id="speedDialMenu">
        <div class="card card-body shadow-sm rounded bg-white p-2">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#callModal" class="text-decoration-none">
                        <i class="bi bi-envelope-fill"></i> Електронна пошта
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal"
                        class="text-decoration-none">
                        <i class="bi bi-whatsapp"></i> Написати в Whatsapp
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#telegramModal"
                        class="text-decoration-none">
                        <i class="bi bi-telegram"></i> Написати в Telegram
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> --}}
{{-- <div class="fixed-bottom d-flex justify-content-start mb-3 mr-3" style="width: 100px;">
    <button type="button" class="btn btn-warning rounded-circle btn-lg shadow-sm dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-envelope-fill"></i>
    </button>

    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
        <li>
            <a href="#" data-bs-toggle="modal" data-bs-target="#callModal" class="dropdown-item text-dark">
                <i class="bi bi-envelope-fill me-2"></i> Електронна пошта
            </a>
        </li>
        <li>
            <a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal" class="dropdown-item text-dark">
                <i class="bi bi-whatsapp me-2"></i> Написати в Whatsapp
            </a>
        </li>
        <li>
            <a href="#" data-bs-toggle="modal" data-bs-target="#telegramModal" class="dropdown-item text-dark">
                <i class="bi bi-telegram me-2"></i> Написати в Telegram
            </a>
        </li>
    </ul>
</div> --}}

<div class="fixed-bottom d-flex justify-content-start mb-3 mr-3" style="width: 100px;">
    <button type="button" class="btn btn-warning rounded-circle shadow-sm dropdown-toggle" data-bs-toggle="dropdown"
        aria-expanded="false" aria-label="Зв'язатися" style="width: 50px; height: 50px;">
        <i class="bi bi-envelope-fill"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="margin-left: auto;">
        <li>
            <a href="#" data-bs-toggle="modal" data-bs-target="#callModal" class="dropdown-item text-dark">
                <i class="bi bi-envelope-fill me-2"></i> Електронна пошта
            </a>
        </li>
        <li>
            <a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal" class="dropdown-item text-dark">
                <i class="bi bi-whatsapp me-2"></i> Написати в Whatsapp
            </a>
        </li>
        <li>
            <a href="#" data-bs-toggle="modal" data-bs-target="#telegramModal" class="dropdown-item text-dark">
                <i class="bi bi-telegram me-2"></i> Написати в Telegram
            </a>
        </li>
    </ul>
</div>




<!-- Модальне вікно для електронної пошти -->

{{-- <div class="modal fade" id="callModal" tabindex="-1" aria-labelledby="callModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="callModalLabel">Зворотній дзвінок</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="callForm" method="POST" action="#">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Ім'я *</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ім'я"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Номер телефону *</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+38 *"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="message" class="form-label">Повідомлення</label>
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Ваше повідомлення"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Відправити</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}
<div class="modal fade" id="callModal" tabindex="-1" aria-labelledby="callModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="callModalLabel">Зворотній дзвінок</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Якщо у вас є запитання, або ви не можете знайти об’єкт, який би зацікавив вас, залиште номер телефону
                    і ми Вам зателефонуємо.</p>
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="name" class="form-label">Ім’я *</label>
                        <input type="text" class="form-control" id="name" placeholder="Ім’я" required>
                        <div class="invalid-feedback">Будь ласка, введіть своє ім'я.</div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Телефон *</label>
                        <input type="tel" class="form-control" id="phone" placeholder="+38 *" required
                            pattern="^\+38 \(0\d{2}\) \d{3}-\d{2}-\d{2}$">
                        <div class="invalid-feedback">Будь ласка, введіть правильний номер телефону.</div>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Місто *</label>
                        <select class="form-select" id="city" required>
                            <option value="">Оберіть місто</option>
                            <option value="Київ">Київ</option>
                            <option value="Львів">Львів</option>
                            <option value="Запоріжжя">Запоріжжя</option>
                        </select>
                        <div class="invalid-feedback">Будь ласка, оберіть місто.</div>
                    </div>
                    <button type="submit" class="btn btn-warning">Надіслати</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Модальне вікно для Whatsapp -->

<div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="whatsappModalLabel">Написати в Whatsapp</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body text-center">
                <a href="whatsapp://send?phone=+380XXXXXXXXXX" class="btn btn-warning btn-lg">Написати</a>
                <!-- Замініть +380XXXXXXXXXX на ваш номер телефону -->
                <p class="text-muted mt-3">Напишіть "Ваше ім'я" і ми зателефонуємо Вам.</p>

            </div>
        </div>
    </div>
</div>






<!-- Модальне вікно для Telegram -->
<div class="modal fade" id="telegramModal" tabindex="-1" aria-labelledby="telegramModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="telegramModalLabel">Написати в Telegram</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <a href="tg://resolve?domain=ваш_telegram_користувач" class="btn btn-warning">Написати</a>
                <!-- Замініть ваш_telegram_користувач на ваш Telegram username -->
                <p class="text-muted mt-3">Напишіть "Ваше ім'я" і ми зателефонуємо Вам.</p>
            </div>
        </div>
    </div>
</div>
