    @stack('scripthaut')
    <!-- jQuery -->
    {{-- <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.min.js" type="ce4d50f69e5ebc1bc89ead61-text/javascript"></script> --}}
    <script src="{{ URL::asset('') }}assets/js/jquery-3.7.1.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ URL::asset('') }}assets/js/bootstrap.bundle.min.js" type="ce4d50f69e5ebc1bc89ead61-text/javascript"></script>
    @stack('scripts')
    <!-- Theme Settings JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-settings.js" type="ce4d50f69e5ebc1bc89ead61-text/javascript"></script>
    <script src="{{ URL::asset('') }}assets/js/greedynav.js" type="ce4d50f69e5ebc1bc89ead61-text/javascript"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/script.js" type="ce4d50f69e5ebc1bc89ead61-text/javascript"></script>

    <script src="{{ URL::asset('') }}assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="ce4d50f69e5ebc1bc89ead61-|49" defer></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable();

            new $.fn.dataTable.Buttons(table, {
                buttons: ['excel', 'pdf', 'print']
            });

            table.buttons().container().prependTo(table.table().container());
        });
    </script>
