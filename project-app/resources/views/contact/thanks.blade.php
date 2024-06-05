@extends('layouts.main')

@section('content')
<html>

<head>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">

</head>
</section>

<div class="overlay" id="overlay1">
    <!doctype html>
    <html lang="en" data-bs-theme="auto">

    <head>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.118.2">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>ScholarPath</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
</div>

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>
    <!-- Toast Notification -->
    <div class="toast fade show position-fixed" role="alert" aria-live="assertive" aria-atomic="true" style="bottom: 50px; right: 10px; z-index: 1000;">
        <div class="toast-header">
            <strong class="me-auto">
                <img src="/images/logo.png" style="height:40px;width:180px;">
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Hello, Welcome to our website!
        </div>
    </div>

    <!-- Navigation menu -->
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <img src="/images/logo.png" style="height:30px;width:180px;padding-left:10px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav"> <!-- Align the navigation links to the right -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a> <!-- Add the "active" class to make "Home" active by default -->
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Scholarships
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/allscholarships') }}">All Scholarships</a></li>
                            <li><a class="dropdown-item" href="{{ url('/scholarships') }}">Government Scholarships</a></li>
                            <li><a class="dropdown-item" href="{{ route('pvtscl.index') }}">Private Institute Scholarships</a></li>
                            <li><a class="dropdown-item" href="{{ route('dispscluser') }}">My applied Scholarships</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <script>
                            // Retrieve the 'token' from local storage
                            var token = localStorage.getItem('token');

                            // Function to navigate to the profile page with the token as a query parameter
                            function goToProfile() {
                                window.location.href = '/profile';
                            }
                        </script>
                        <a class="nav-link" onclick="goToProfile()" style="cursor: pointer" w;>Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer; color: #ff6a76; font-size: 20px;margin-right:20px" aria-current="page" href="{{ route('logout') }}" onclick="localStorage.clear();event.preventDefault();  document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.getElementById('signup-button').addEventListener('click', function() {
            var token = localStorage.getItem('token');
            if (token) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'Already Logged-in',
                    showConfirmButton: false,
                    timer: 1000
                });
            } else {
                window.location.href = '/reg';
            }
        });
        document.getElementById('login-button').addEventListener('click', function() {
            var token = localStorage.getItem('token');
            if (token) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'Already Logged-in',
                    showConfirmButton: false,
                    timer: 1000
                });
            } else {
                window.location.href = '/login';
            }
        });
    </script>
    <!-- Navigation ends -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                margin: 0;
                overflow: hidden;
            }

            #container {
                display: flex;
                overflow: hidden;
                width: calc(50% * var(--card-count, 7));
                animation: scrollAnimation 20s linear infinite;
            }

            .card {
                margin-top: 20px;
                flex: 0 0 calc(100% / var(--card-count, 7));
                box-sizing: border-box;
                padding: 20px;
                box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.4) !important;
                margin-right: 10px;
                transition: transform 0.5s ease;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .card img {
                max-width: 100%;
                height: auto;
                margin-bottom: 10px;
            }

            @keyframes scrollAnimation {
            
    0% {
        transform: translateX(calc(100% / var(--card-count, 7)));
    }
    7% {
        transform: translateX(calc(50% / var(--card-count, 7)));
    }
    14% {
        transform: translateX(calc(0% / var(--card-count, 7)));
    }
    21% {
        transform: translateX(calc(-50% / var(--card-count, 7)));
    }
    28% {
        transform: translateX(calc(-100% / var(--card-count, 7)));
    }
    35% {
        transform: translateX(calc(-150% / var(--card-count, 7)));
    }
    42% {
        transform: translateX(calc(-200% / var(--card-count, 7)));
    }
    49% {
        transform: translateX(calc(-250% / var(--card-count, 7)));
    }
    56% {
        transform: translateX(calc(-300% / var(--card-count, 7)));
    }
    63% {
        transform: translateX(calc(-350% / var(--card-count, 7)));
    }
    70% {
        transform: translateX(calc(-400% / var(--card-count, 7)));
    }
    77% {
        transform: translateX(calc(-450% / var(--card-count, 7)));
    }
    84% {
        transform: translateX(calc(-500% / var(--card-count, 7)));
    }
    91% {
        transform: translateX(calc(-550% / var(--card-count, 7)));
    }
    98% {
        transform: translateX(calc(-600% / var(--card-count, 7)));
    }
    99% {
        transform: translateX(calc(-650% / var(--card-count, 7)));
    }
    100% {
        transform: translateX(calc(-700% / var(--card-count, 7)));
    }
}

/* Apply the animation with a longer duration */
.carousel-container {
    animation: slide 14s infinite; /* Increase the duration to 14 seconds */
}
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div id="container" style="--card-count: 7;">
            <div class="card">
                <h3>PMSSS ( Prime Ministers Special Scholarship Scheme)</h3>
                <p>Unlock your potential with PMSSS Scholarship. Apply now for a chance to win!</p>
                <a class="btn btn-primary" href="https://www.aicte-india.org/bureaus/jk">Apply Now</a>
            </div>

            <div class="card">
                <h3>SOF Girl Child Scholarship Scheme (G.C.S.S)</h3>
                <p>Empowering girl students through our scholarship scheme. Don't miss this opportunity!</p>
                <a class="btn btn-primary" href="https://sofworld.org/girl-child-scholarship-scheme-gcss">Apply Now</a>

            </div>

            <div class="card">
                <h3>Education Scholarship Scheme for Army Personnel (ESSA)</h3>
                <p>Avail the this scholarship. Seize the chance!</p>
                <a class="btn btn-primary" href="https://scholarship.awesindia.com/">Apply Now</a>

            </div>

            <div class="card">
                <h3>CSIR Innovation Award for School Children (CIASC)</h3>
                <p>Showcase your innovation and win the prestigious CSIR Innovation Award. Apply now!</p>
                <a class="btn btn-primary" href="https://www.csir.res.in/">Apply Now</a>

            </div>

            <div class="card">
                <h3>Shiksha ki Udaan Scholarship program for girls</h3>
                <p>Empower girls through our scholarship program. Join "Shiksha ki Udaan" today!</p>
                <a class="btn btn-primary" href="https://iiflsamasta.com/">Apply Now</a>
            </div>

            <div class="card">
                <h3>National Scholarship Scheme (SAKSHAM) HRDM</h3>
                <p>Embark on your educational journey with the National Scholarship Scheme. Apply now!</p>
                <a class="btn btn-primary" href="https://medhavionline.org/">Apply Now</a>
            </div>

            <div class="card">
                <h3>NSP Post Matric Scholarships Minorities</h3>
                <p>Scholarships for minorities. Secure your education with NSP Post Matric Scholarships!</p>
                <a class="btn btn-primary" href="https://scholarships.gov.in/">Apply Now</a>
            </div>
        </div>

        <script>
            function applyNow(scholarshipName) {
                alert('You are applying for: ' + scholarshipName);
                // You can replace the alert with actual code to handle the application process
            }
        </script>

        <script>
            const container = document.getElementById('container');

            container.addEventListener('mouseenter', () => {
                container.style.animationPlayState = 'paused';
            });

            container.addEventListener('mouseleave', () => {
                container.style.animationPlayState = 'running';
            });
        </script>

    </body>

    </html>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.getElementById('signup-button').addEventListener('click', function() {
            var token = localStorage.getItem('token');
            if (token) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'Already Logged-in',
                    showConfirmButton: false,
                    timer: 1000
                });
            } else {
                window.location.href = '/reg';
            }
        });
        document.getElementById('login-button').addEventListener('click', function() {
            var token = localStorage.getItem('token');
            if (token) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'Already Logged-in',
                    showConfirmButton: false,
                    timer: 1000
                });
            } else {
                window.location.href = '/login';
            }
        });
    </script>
    <!-- Navigation ends -->

    </div>
    <br>
    <h1 style="color: black;margin-top:50px;text-align:center">Connecting Dreams</h1><br>
    <p style="color: black;margin-left:70px;margin-right:70px;text-align:center">Our platform bridges the gap between scholarship providers and ambitious students. Scholarship providers can easily list their opportunities, while students can effortlessly apply and manage their documentation on our website, streamlining the path to educational success.</p>
          
    <!-- Apply Process Section -->
    <section class="apply-process section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="process-item text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fa fa-search" style="font-size:48px;" aria-hidden="true"></i>
                        </div>
                        <h4>Register</h4>
                        <p>Register as a user now to stay updated with the latest available Scholarships.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="process-item text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fa fa-search" style="font-size:48px;" aria-hidden="true"></i>
                        </div>
                        <h4>Search for scholarship</h4>
                        <p>You will receive appropriate scholarship leads based on your preferred search.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="process-item text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fa fa-handshake-o" style="font-size:48px;"></i>
                        </div>
                        <h4>Get Assistance</h4>
                        <p>Apply directly through the official website of the scholarship or get assistance from us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="content">
                <div class="title"><span>About Us</span></div>
                <div class="about-details row">
                    <div class="left col-md-6">
                        <img src="https://media.istockphoto.com/id/1371896330/photo/happy-asian-woman-in-his-graduation-day.jpg?s=612x612&w=0&k=20&c=Ur3moWl1fKFms-6UACseglMjoYAynYKzsanZpgK8lFk=" class="img-fluid" alt="About Us">
                    </div>
                    <div class="right col-md-6">
                        <p>
                             Our website is a comprehensive scholarship search and application portal, dedicated to helping both scholarship providers and students streamline the scholarship process. Scholarship providers can easily add their scholarship opportunities, while students can seamlessly apply for them, all within our user-friendly platform. We prioritize a smooth and secure documentation process, ensuring that both providers and applicants can manage scholarships efficiently. Discover the perfect scholarship or post your opportunities today with our user-centric scholarship portal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact" style="padding-bottom: 40px;">
        <div class="container">
            <div class="content mx-auto" style="max-width: 600px; border: 4px solid rgba(64, 112, 244, 0.1); padding: 20px;">
                <div class="title"><span>Contact Us</span></div>
                <!-- Contact Form -->
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" onclick="sendFeedback()">Submit</button>
                <!-- End Contact Form -->
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Custom JS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.getElementById('signup-button').addEventListener('click', function() {
            var token = localStorage.getItem('token');
            if (token) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'Already Logged-in',
                    showConfirmButton: false,
                    timer: 1000
                });
            } else {
                window.location.href = '/reg';
            }
        });
        document.getElementById('login-button').addEventListener('click', function() {
            var token = localStorage.getItem('token');
            if (token) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'Already Logged-in',
                    showConfirmButton: false,
                    timer: 1000
                });
            } else {
                window.location.href = '/login';
            }
        });

        function logout() {
            if (localStorage.getItem('token') !== null) {
                localStorage.removeItem('token');
                Swal.fire({
                    icon: 'success',
                    title: 'Logged Out',
                    text: 'Successfully logged out',
                    showConfirmButton: false,
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Cannot Logout',
                    text: 'Before you log out, make sure you are logged in.',
                    showConfirmButton: false,
                });
            }
        }
    </script>
    <!-- Navigation ends -->



    
<br><br>
<footer class="footer" style="padding: 1px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 text-center">
                <p style="color:white;padding-top:20px;">&copy; 2023 ScholarPath. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="/js/home.js"></script>
<script>
    function sendFeedback() {
        email = document.getElementById('email').value;
        name = document.getElementById('name').value;
        message = document.getElementById('message').value;
        if (email === '' || name === '' || message === '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Please fill in all the fields.',
                timer: 1000,
                showConfirmButton: false,
            });
        } else {
            var recipients = "vandanaprabhu702@gmail.com,shetvaish@gmail.com";
            console.log(email, message, name);
            Email.send({
                Host: "smtp.elasticemail.com",
                Username: "vandanaprabhu702@gmail.com",
                Password: "ECE65D1578529A982F0CCF537C56FD007684",
                To: email,
                From: 'vandanaprabhu702@gmail.com',
                Subject: "ScholarPath",
                Body: "Dear " + name + ",<br><br>Thank you for your time!"
            })
            Email.send({
                Host: "smtp.elasticemail.com",
                Username: "vandanaprabhu702@gmail.com",
                Password: "ECE65D1578529A982F0CCF537C56FD007684",
                To: recipients,
                From: 'vandanaprabhu702@gmail.com',
                Subject: "Feedback",
                Body: "Dear Admin,<br><br>" + name + " has sent you a feedback about ScholarPath:<br><br>\n" + message,
            }).then(() => {
                Swal.fire({
                    title: "Sent Successfully",
                    text: "Thank you for you time!",
                    icon: "success",
                    timer: 1000,
                    showConfirmButton: false,
                });
            });
            document.getElementById('email').value = "";
            document.getElementById('message').value = "";
            document.getElementById('name').value = "";
        }
    };
</script>
@endsection

</html>