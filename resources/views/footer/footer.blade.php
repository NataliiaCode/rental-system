<footer class="page-foot py-5 text-start bg-image mt-auto"
    style="background-image: url('{{ asset('images/bg-footer.jpg') }}'); background-repeat: no-repeat; background-position: center; background-size: cover;">



    <section class="footer-content">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-8">
                    {{-- <div class="row">
                        <div class="col-md-4"> --}}
                    <div class="row flex-lg-row flex-column"> <!-- Додано flex-lg-row та flex-column -->
                        <div class="col-md-4 mb-4"> <!-- Додано mb-4 -->
                            <img src="{{ asset('logo-1.png') }}" alt="Логотип" class="mb-3">
                            <p class="text-muted">Сервіс житлової нерухомості</p>
                            <p class="text-muted">© 2024 Company, Inc</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <h5 class="text-muted">Посилання</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="{{ route('home') }}"
                                        class="nav-link p-0 text-muted">Головна сторінка</a></li>
                                <li class="nav-item mb-2"><a href="{{ route('contacts') }}"
                                        class="nav-link p-0 text-muted">Контакти</a></li>
                                <li class="nav-item mb-2"><a href="{{ route('about') }}"
                                        class="nav-link p-0 text-muted">Про нас</a></li>
                                <li class="nav-item mb-2"><a href="{{ route('reviews.index') }}"
                                        class="nav-link p-0 text-muted">Відгуки</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4">
                            <h5 class="text-muted">Соціальні мережі</h5>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted"><i class="bi bi-facebook fs-4"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted"><i class="bi bi-messenger fs-4"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted"><i class="bi bi-twitter fs-4"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted"><i class="bi bi-telegram fs-4"></i></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
{{-- <div class="container">
    <footer class="py-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('logo-1.png') }}" alt="Логотип" class="mb-3">
                <p class="text-muted">Сервіс житлової нерухомості </p>
                <p class="text-muted">© 2024 Company, Inc</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-muted">Посилання</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0 text-muted">Головна</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('contacts') }}"
                            class="nav-link p-0 text-muted">Контакти</a></li>
                    <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0 text-muted">Про нас</a>
                    </li>
                    <li class="nav-item mb-2"><a href="{{ route('reviews.index') }}"
                            class="nav-link p-0 text-muted">Відгуки</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="text-muted">Соціальні мережі</h5>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="#" class="text-muted"><i class="bi bi-facebook fs-4"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted"><i class="bi bi-messenger fs-4"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted"><i class="bi bi-twitter fs-4"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted"><i class="bi bi-telegram fs-4"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </footer>
</div> --}}
