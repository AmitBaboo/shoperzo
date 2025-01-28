@if (Session::has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '{{ Session::get('error') }}',
        });
    </script>
@endif



@if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ Session::get('success') }}',
          
        });
    </script>
@endif
