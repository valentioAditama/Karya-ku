<!-- Login And register -->
@error('fullname')
<script>
    // Show Notification 
    document.addEventListener('DOMContentLoaded', function() {
        iziToast.error({
            title: 'Error',
            message: `{{$message}}`,
            position: 'topRight',
        });
    });
</script>
@enderror

@error('email')
<script>
    // Show Notification 
    document.addEventListener('DOMContentLoaded', function() {
        iziToast.error({
            title: 'Error',
            message: `{{$message}}`,
            position: 'topRight',
        });
    });
</script>
@enderror

@error('password')
<script>
    // Show Notification 
    document.addEventListener('DOMContentLoaded', function() {
        iziToast.error({
            title: 'Error',
            message: `{{$message}}`,
            position: 'topRight',
        });
    });
</script>
@enderror


@if (session('successRegister'))
<script>
    // Show Notification 
    document.addEventListener('DOMContentLoaded', function() {
        iziToast.success({
            title: 'success',
            message: `{{ session('successRegister') }}`,
            position: 'topRight',
        });
    });
</script>
@endif