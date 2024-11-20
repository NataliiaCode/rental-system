<div class="col-12"> <!-- Додано col-12 -->
    @if (session('cart'))
        <div class="table-responsive"> <!-- Додано table-responsive -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Фото</th>
                        <th>Назва</th>
                        <th>Ціна</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('cart') as $property)
                        <tr>
                            <td><img src="{{ asset($property['image']) }}" alt="" style="max-width: 275px"></td>

                            <td>
                                <a href="{{ route('properties.show', $property['id']) }}" class="text-success"
                                    style="font-size: 1.2em; text-decoration: none;">
                                    {{ $property['title'] }}
                                </a>
                            </td>

                            <td>{{ $property['price'] }}</td>
                            <td>
                                <form name="remove-product-form">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $property['id'] }}">
                                    <button class="btn btn-danger remove-product-btn">Видалити</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        @else
            <p>Вподобано об’єктів:</p>

        </div>
    @endif
</div>
