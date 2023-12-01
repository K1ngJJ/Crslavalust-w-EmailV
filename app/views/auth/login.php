<!DOCTYPE html>
<html lang="en">
<head>
    
        <meta charset="utf-8">
        <title>CaterServ - Catering Services Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="public/CRS1/lib/animate/animate.min.css" rel="stylesheet">
        <link href="public/CRS1/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="public/CRS1/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="public/CRS1/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="public/CRS1/css/style.css" rel="stylesheet">
 
    <link rel="stylesheet" href="public/CRS/assets/toolkit/css/toolkit.min.css">
    <link rel="stylesheet" href="public/CRS/assets/css/Inter.css">
    <link rel="shortcut icon" href="public/catering.png">
  <link rel="apple-touch-icon" href="public/catering.png">
  <link rel="icon" href="public/favicon.ico" type="image/x-icon">
</head>
<body>
    <style>
        .transparent-form-container {
        background-color: rgba(255, 255, 255, 0.100); 
        padding: 20px; 
        border-radius: 20px; 
        width: 350px;
        margin: auto;
    }
    </style>

<section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Login</p>
                    <h2 class="fw-bold">Welcome back</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                                <div class="transparent-form-container">

                                    <form class="row g-3 needs-validation" novalidate method="post" action="/auth">

                                        <div class="mb-3">
                                            <label for="yourEmail" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                                <input type="text" name="email" class="form-control"
                                                    id="yourEmail" required>
                                                <div class="invalid-feedback">Please enter your Email.</div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="mb-3">
                                            <p class="small mb-0">Don't have account? <a
                                                    href="/register">Create an account</a></p>
                                        </div>
                                    </form>

                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>