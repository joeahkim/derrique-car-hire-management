<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/favicon.jpg') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('partials.header')

    <!-- ======= Sidebar ======= -->
    @include('partials.sidebar')

    <!-- ======= Main Content ======= -->
    <main id="main" class="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    @include('partials.footer')

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const canvas = document.getElementById("signature-pad");
            const signaturePad = new SignaturePad(canvas);
            const hiddenInput = document.getElementById("client-signature");
            const saveButton = document.getElementById("save-signature");
            const clearButton = document.getElementById("clear-signature");
            const signatureStatus = document.getElementById("signature-status");

            // Resize canvas to fit container
            function resizeCanvas() {
                const ratio = Math.max(window.devicePixelRatio || 1, 1);
                canvas.width = canvas.offsetWidth * ratio;
                canvas.height = canvas.offsetHeight * ratio;
                canvas.getContext("2d").scale(ratio, ratio);
                signaturePad.clear();
            }
            resizeCanvas();
            window.addEventListener("resize", resizeCanvas);

            // Clear the signature pad
            clearButton.addEventListener("click", function(e) {
                e.preventDefault();
                signaturePad.clear();
                hiddenInput.value = ""; // Reset the hidden input value
                signatureStatus.style.display = "none";
            });

            // Save the signature to the hidden input field
            saveButton.addEventListener("click", function(e) {
                e.preventDefault();
                if (!signaturePad.isEmpty()) {
                    hiddenInput.value = signaturePad.toDataURL("image/png");
                    signatureStatus.style.display = "block";
                } else {
                    alert("Please draw a signature before saving.");
                }
            });

            // Validate before form submission
            const form = document.querySelector("form");
            form.addEventListener("submit", function(event) {
                if (hiddenInput.value === "") {
                    event.preventDefault();
                    alert("Please save the signature before submitting.");
                }
            });
        });
    </script>


    <script>
        document.querySelectorAll('input[name="mark_returned"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    this.form.submit();
                }
            });
        });
    </script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>