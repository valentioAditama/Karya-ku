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
            title: 'Success',
            message: `{{ session('successRegister') }}`,
            position: 'topRight',
        });
    });
</script>
@endif

@if (session('successLogin'))
<script>
    // Show Notification 
    document.addEventListener('DOMContentLoaded', function() {
        iziToast.success({
            title: 'Success',
            message: `{{ session('successLogin') }}`,
            position: 'topRight',
        });
    });
</script>
@endif

@if (session('successLogout'))
<script>
    // Show Notification 
    document.addEventListener('DOMContentLoaded', function() {
        iziToast.success({
            title: 'Success',
            message: `{{ session('successLogout') }}`,
            position: 'topRight',
        });
    });
</script>
@endif


<!-- community -->
<script>
    // Show Notification 
    function communityNoAuth() {
        iziToast.error({
            title: 'Error',
            message: `Anda Harus Login Terlebih Dahulu`,
            position: 'topRight',
        });
    }
</script>