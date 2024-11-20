     $(document).ready(function() {
            $('.delete-image').on('click', function() {
                // Видалення зображення з інтерфейсу
                $(this).parent().remove();

                // Видалення зображення з масиву 
                var imageId = $(this).data('image-id');
                $('input[name="images[]"][value="' + imageId + '"]').remove();
            });
        });
