<!doctype html>
<html lang="en" data-bs-theme="LightTheme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative Tech Park - {{ $title ?? 'Home' }}</title>
    <!--favicon-->
    <x-backend.style></x-backend.style>
</head>

<body>

    <!--start header-->
    <x-backend.header></x-backend.header>
    <!--end top header-->


    <!--start sidebar-->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <x-backend.sidebar></x-backend.sidebar>
    </aside>
    <!--end sidebar-->

    <!--start main wrapper-->
    <main class="main-wrapper">
        {{ $slot }}
    </main>
    <!--end main wrapper-->

    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->

    <!--start footer-->
    <footer class="page-footer">
        <x-backend.footer></x-backend.footer>
    </footer>
    <!--end footer-->


    <x-backend.script></x-backend.script>
    @stack('script')
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $('.delete-button').on('click', function() {
            let id = $(this).data('id');
            // alert(id)
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#delete_news_' + id).submit();
                }
            });
        })
    </script>

    <script type="text/javascript">
        @session('success')
        toastr.success("{{ $value }}", "Success");
        @endsession

        @session('info')
        toastr.info("{{ $value }}", "Info");
        @endsession

        @session('warning')
        toastr.warning("{{ $value }}", "Warning");
        @endsession

        @session('error')
        toastr.error("{{ $value }}", "Error");
        @endsession
    </script>
</body>

</html>
