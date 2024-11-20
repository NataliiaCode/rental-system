@extends('layouts.app')
@section('content')


    <section class="section-full bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="mb-4">Контакти</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-warning">На головну</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Контакти</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">Зв'яжіться з нами</h2>
                    <p class="mb-4">Ви можете зв'язатися з нами будь-яким зручним для вас способом. Ми доступні 24/7 за
                        допомогою факсу чи електронної пошти. Ви також можете скористатися формою швидкого зв'язку нижче або
                        відвідати наш офіс особисто.</p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('sendEmail') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Ім'я</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Електронна пошта</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Повідомлення</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-warning">Надіслати</button>
                    </form>

                </div>
                {{-- <div class="col-lg-4 mt-lg-5"> --}}
                <div class="col-12 col-lg-4 mt-lg-5 p-3">
                    <h6 class="text-uppercase mb-3">Contact Information</h6>
                    <address class="text-muted d-flex flex-column">
                        <dl>
                            <dt>Headquarters:</dt>
                            <dd>795 Folsom Ave, Suite 600 San Francisco, CA 94107</dd>
                        </dl>
                        <dl>
                            <dt>Phone</dt>
                            <dd><a href="tel:+918547632521" class="text-warning">(91) 8547 632521</a></dd>
                        </dl>
                        <dl>
                            <dt>Fax</dt>
                            <dd><a href="tel:+911147521433" class="text-warning">(91) 11 4752 1433</a></dd>
                        </dl>
                        <dl>
                            <dt>Email</dt>
                            <dd><a href="mailto:info@canvas.com" class="text-warning">info@canvas.com</a></dd>
                        </dl>
                    </address>
                </div>


            </div>
        </div>
    </section>



@endsection

@section('title', 'Контакти')
