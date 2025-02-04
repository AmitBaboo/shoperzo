@if (session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}", // ✅ Message properly show karega
            });
        });
    </script>
@endif

@if (session('error'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: "{{ session('error') }}", // ✅ Message properly show karega
            });
        });
    </script>
@endif
