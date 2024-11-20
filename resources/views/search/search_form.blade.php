{{-- <div class="container mt-5 mb-5" style="background-image: url({{ asset('images/showcase-bg.jpg') }});">
    <form action="{{ route('search') }}" method="GET" class="form-inline">
        <h2>Сервіс житлової нерухомості</h2>
        <h1 class="mb-3">Modern estate</h1>
        <h3 class="mb-3">Знайдіть свій дім</h3>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-buildings"></i></span>
                    <select name="region_id" id="region_id" class="form-control">
                        <option value="">Місто</option>
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}" {{ $region->id == $region_id ? 'selected' : '' }}>
                                {{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-house-door"></i></span>
                    <select name="property_type" id="property_type" class="form-control">
                        <option value="">Тип нерухомості</option>
                        @foreach ($propertyTypes as $propertyType)
                            <option value="{{ $propertyType->id }}"
                                {{ $propertyType->id == old('property_type', $property_type ?? null) ? 'selected' : '' }}>
                                {{ $propertyType->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-database-up"></i></span>
                    <input type="number" name="price_from" id="price_from" class="form-control" min="0"
                        placeholder="Ціна (від) грн" value="{{ $price_from ?? '' }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-database-down"></i></span>
                    <input type="number" name="price_to" id="price_to" class="form-control" min="0"
                        placeholder="Ціна (до) грн" value="{{ $price_to ?? '' }}">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-slash-square"></i></span>
                    <input type="number" name="square_footage_from" id="square_footage_from" class="form-control"
                        min="0" placeholder="Площа (від) м2" value="{{ $square_footage_from ?? '' }}">
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-slash-square"></i></span>
                    <input type="number" name="square_footage_to" id="square_footage_to" class="form-control"
                        min="0" placeholder="Площа (до) м2" value="{{ $square_footage_to ?? '' }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <span class="input-group-text"> <i class="bi bi-droplet"></i></span>
                    <select name="bathrooms" id="bathrooms" class="form-control">
                        <option value="">Ванні</option>
                        <option value="1" {{ old('bathrooms', $bathrooms ?? null) == 1 ? 'selected' : '' }}>1
                        </option>
                        <option value="2" {{ old('bathrooms', $bathrooms ?? null) == 2 ? 'selected' : '' }}>2
                        </option>
                        <option value="3" {{ old('bathrooms', $bathrooms ?? null) == 3 ? 'selected' : '' }}>3
                        </option>
                        <option value="4" {{ old('bathrooms', $bathrooms ?? null) == 4 ? 'selected' : '' }}>4
                        </option>
                        <option value="5" {{ old('bathrooms', $bathrooms ?? null) == 5 ? 'selected' : '' }}>5
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-door-closed"></i></span>
                    <select name="rooms" id="rooms" class="form-control">
                        <option value="">Кімнати</option>
                        <option value="1" {{ old('rooms', $rooms ?? null) == 1 ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('rooms', $rooms ?? null) == 2 ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('rooms', $rooms ?? null) == 3 ? 'selected' : '' }}>3</option>
                        <option value="4" {{ old('rooms', $rooms ?? null) == 4 ? 'selected' : '' }}>4</option>
                        <option value="5" {{ old('rooms', $rooms ?? null) == 5 ? 'selected' : '' }}>5</option>
                        <option value="6" {{ old('rooms', $rooms ?? null) == 6 ? 'selected' : '' }}>6</option>
                        <option value="7" {{ old('rooms', $rooms ?? null) == 7 ? 'selected' : '' }}>7</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <button type="submit" class="btn btn-warning btn-block rounded-pill px-4 py-2 font-weight-bold">
                    <i class="bi bi-search me-2"></i> Знайти
                </button>

                <button type="button"
                    class="btn btn-outline-warning btn-block rounded-pill px-4 py-2 font-weight-bold"
                    onclick="window.location='{{ route('search') }}'"><i class="bi bi-x-lg me-2"></i>Скинути</button>

            </div>
        </div>
    </form>

</div> --}}
<div class="container mt-5 mb-5"
    style="background-image: url({{ asset('images/showcase-bg.jpg') }}); background-size: cover; background-position: center;">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-8 text-center mt-5">
            <h2 class="mb-3 text-white">Сервіс житлової нерухомості</h2>
            <h1 class="mb-3 text-white display-4 font-weight-bold">MODERN ESTATE</h1> <span
                class="font-weight-bold"></span>
            <h3 class="mb-4 text-white">Знайдіть свій дім</h3>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-10 col-12"> <!-- Додали col-12 для маленьких екранів -->
            {{-- <div class="col-md-10"> --}}
            <form action="{{ route('search') }}" method="GET" class="bg-white p-4 rounded shadow">
                <div class="row">
                    {{-- <div class="col-md-4 mb-3"> --}}
                    <div class="col-md-4 col-12 mb-3"> <!-- Додали col-12 для маленьких екранів -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-buildings"></i></span>
                            <select name="region_id" id="region_id" class="form-control">
                                <option value="">Місто</option>
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id }}"
                                        {{ $region->id == $region_id ? 'selected' : '' }}>
                                        {{ $region->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- <div class="col-md-4 mb-3"> --}}
                    <div class="col-md-4 col-12 mb-3"> <!-- Додали col-12 для маленьких екранів -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-house-door"></i></span>
                            <select name="property_type" id="property_type" class="form-control">
                                <option value="">Тип нерухомості</option>
                                @foreach ($propertyTypes as $propertyType)
                                    <option value="{{ $propertyType->id }}"
                                        {{ $propertyType->id == old('property_type', $property_type ?? null) ? 'selected' : '' }}>
                                        {{ $propertyType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    {{-- <div class="col-md-4 mb-3"> --}}
                    <div class="col-md-4 col-12 mb-3"> <!-- Додали col-12 для маленьких екранів -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-database-up"></i></span>
                            <input type="number" name="price_from" id="price_from" class="form-control" min="0"
                                placeholder="Ціна (від) грн" value="{{ $price_from ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-md-4 mb-3"> --}}
                    <div class="col-md-4 col-12 mb-3"> <!-- Додали col-12 для маленьких екранів -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-database-down"></i></span>
                            <input type="number" name="price_to" id="price_to" class="form-control" min="0"
                                placeholder="Ціна (до) грн" value="{{ $price_to ?? '' }}">
                        </div>
                    </div>
                    {{-- <div class="col-md-4 mb-3"> --}}
                    <div class="col-md-4 col-12 mb-3"> <!-- Додали col-12 для маленьких екранів -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-slash-square"></i></span>
                            <input type="number" name="square_footage_from" id="square_footage_from"
                                class="form-control" min="0" placeholder="Площа (від) м2"
                                value="{{ $square_footage_from ?? '' }}">
                        </div>
                    </div>
                    {{-- <div class="col-md-4 mb-3"> --}}
                    <div class="col-md-4 col-12 mb-3"> <!-- Додали col-12 для маленьких екранів -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-slash-square"></i></span>
                            <input type="number" name="square_footage_to" id="square_footage_to" class="form-control"
                                min="0" placeholder="Площа (до) м2" value="{{ $square_footage_to ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-md-4 mb-3"> --}}
                    <div class="col-md-4 col-12 mb-3"> <!-- Додали col-12 для маленьких екранів -->
                        <div class="input-group">
                            <span class="input-group-text"> <i class="bi bi-droplet"></i></span>
                            <select name="bathrooms" id="bathrooms" class="form-control">
                                <option value="">Ванні</option>
                                <option value="1"
                                    {{ old('bathrooms', $bathrooms ?? null) == 1 ? 'selected' : '' }}>1
                                </option>
                                <option value="2"
                                    {{ old('bathrooms', $bathrooms ?? null) == 2 ? 'selected' : '' }}>2
                                </option>
                                <option value="3"
                                    {{ old('bathrooms', $bathrooms ?? null) == 3 ? 'selected' : '' }}>3
                                </option>
                                <option value="4"
                                    {{ old('bathrooms', $bathrooms ?? null) == 4 ? 'selected' : '' }}>4
                                </option>
                                <option value="5"
                                    {{ old('bathrooms', $bathrooms ?? null) == 5 ? 'selected' : '' }}>5
                                </option>
                            </select>
                        </div>
                    </div>

                    {{-- <div class="col-md-4 mb-3"> --}}
                    <div class="col-md-4 col-12 mb-3"> <!-- Додали col-12 для маленьких екранів -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-door-closed"></i></span>
                            <select name="rooms" id="rooms" class="form-control">
                                <option value="">Спальні</option>
                                <option value="1" {{ old('rooms', $rooms ?? null) == 1 ? 'selected' : '' }}>
                                    1
                                </option>
                                <option value="2" {{ old('rooms', $rooms ?? null) == 2 ? 'selected' : '' }}>
                                    2
                                </option>
                                <option value="3" {{ old('rooms', $rooms ?? null) == 3 ? 'selected' : '' }}>3
                                </option>
                                <option value="4" {{ old('rooms', $rooms ?? null) == 4 ? 'selected' : '' }}>4
                                </option>
                                <option value="5" {{ old('rooms', $rooms ?? null) == 5 ? 'selected' : '' }}>5
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 col-12 mb-3"> <!-- Додали col-12 для маленьких екранів -->
                        <div class="input-group">
                            <button type="submit" class="btn btn-warning btn-block rounded-pill mb-3"
                                style="margin-right: 10px;"> <i class="bi bi-search me-2"></i> Знайти</button>

                            <button type="button" class="btn btn-outline-warning btn-block rounded-pill mb-3"
                                onclick="window.location='{{ route('search') }}'"> <i
                                    class="bi bi-x-lg me-2"></i>Скинути</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>
