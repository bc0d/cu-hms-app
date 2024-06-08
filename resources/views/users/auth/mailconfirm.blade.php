<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Password Reset</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{ asset('users/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('users/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('users/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('users/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('users/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <main id="main">
        <section id="contact" class="contact">
            <div class="row justify-content-center center-sign">   
                <div class="col-lg-8  mt-lg-0 sign-sec">
                    <div>
                        <center>
                            <h2>Mail Confirmation</h2>
                        </center>
                    </div>
                    <form id="sendOtpForm" class="php-email-form">
                        <div class="row mt-5 mb-3">
                            <div class="col-md-4 form-group">
                                <label for="email">Email<span aria-hidden="true" class="required-fields"> *</span></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="email" name="email" class="form-control" id="email" value="{{ $student->email }}" readonly>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Send OTP</button>
                        </div>
                    </form>

                    <form id="verifyOtpForm" style="display: none" class="php-email-form mt-5">
                        <div class="row mt-5 mb-3">
                            <div class="col-md-4 form-group">
                                <label for="email">Email<span aria-hidden="true" class="required-fields"> *</span></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="email" name="email" class="form-control" id="email" value="{{ $student->email }}" readonly>
                            </div>
                        </div>
                        <div class="row mt-5 mb-3">
                            <div class="col-md-4 form-group">
                                <label for="otp">OTP<span aria-hidden="true" class="required-fields"> *</span></label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" name="otp" class="form-control" id="otp" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Verify OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script>
            document.getElementById('sendOtpForm').addEventListener('submit', function (e) {
                e.preventDefault();
                fetch('/mail/send-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        email: e.target.email.value
                    })
                }).then(response => {
                    console.log('Response status:', response.status);
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                }).then(responseText => {
                    console.log('Response text:', responseText);
                    try {
                        const data = JSON.parse(responseText);
                        alert(data.message);
                        if (data.success) {
                            document.getElementById('verifyOtpForm').style.display = 'block';
                        }
                    } catch (error) {
                        console.error('Error parsing JSON:', error);
                        alert('An error occurred. Please check the console for details.');
                    }
                }).catch(error => {
                    console.error('Fetch error:', error);
                    alert('An error occurred. Please try again.');
                });
            });

            document.getElementById('verifyOtpForm').addEventListener('submit', function (e) {
                e.preventDefault();
                fetch('/mail/verify-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        email: e.target.email.value,
                        otp: e.target.otp.value
                    })
                }).then(response => {
                    // Log the response status
                    console.log('Response status:', response.status);
                    return response.text();  // Get the response as text
                }).then(responseText => {
                    // Log the raw response text
                    console.log('Response text:', responseText);
                    try {
                        // Attempt to parse the response as JSON
                        const data = JSON.parse(responseText);
                        alert(data.message);
                        window.location.href = '/login';
                    } catch (error) {
                        // Handle JSON parsing errors
                        console.error('Error parsing JSON:', error);
                        alert('An error occurred. Please try again.');
                    }
                }).catch(error => {
                    // Handle network errors
                    console.error('Fetch error:', error);
                    alert('An error occurred. Please try again.');
                });
            });

        </script>
    </main><!-- End #main -->
    <div class="container">
        <div class="copyright text-center">
            &copy; Copyright <strong><span>ARM</span></strong>. All Rights Reserved
        </div>
        <div class="credits text-center">
            Developed by <a href="#">ARM</a>
        </div>
    </div>
    <!-- Vendor JS Files -->
    <script src="{{ asset('users/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('users/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('users/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('users/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('users/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('users/assets/js/main.js') }}"></script>

</body>

</html>