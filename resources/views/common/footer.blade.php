
    <script src="{{ asset('../assets/assets/vendor/libs/jquery/jquery.js') }}"></script>

    <script src="{{ asset('../assets/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('../assets/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('../assets/assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('../assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('../assets/assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('../assets/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('../assets/assets/js/pages-account-settings-account.js') }}"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async="async" defer="defer" src="https://buttons.github.io/buttons.js"></script>

    <script>
    $(document).ready(function() {
        var currentPath = window.location.pathname.replace(/\/$/, "");
        $(".menu-item").removeClass("active");
        $(".menu-item a").each(function () {
            var linkPath = this.pathname.replace(/\/$/, "");
            if(linkPath === currentPath){
                $(this).parent().addClass("active");
            }
        });
    });
    </script>