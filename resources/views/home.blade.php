<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<style>
    body {font-family: "Times New Roman", Georgia, Serif;}
    h1, h2, h3, h4, h5, h6 {
        font-family: "Playfair Display";
        letter-spacing: 5px;
    }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
        <a href="#home" class="w3-bar-item w3-button">DivWithMe</a>
        <!-- Right-sided navbar links. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="#project" class="w3-bar-item w3-button">إنشاء مشروع</a>
            <a href="#about" class="w3-bar-item w3-button">من نحن</a>
            <!-- Button trigger modal -->
            <a type="button"  data-toggle="modal" data-target=".bd-example-modal-lg" class="w3-bar-item w3-button">تسجيل الدخول</a>
        </div>
    </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <img class="w3-image" src="/images/devwithme_logo.png" alt="Hamburger Catering" width="1600" height="100">
    <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    </div>
</header>

<!-- Page content -->
<!-- login Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <section class="vh-100" style="background-color: #eee;">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">تسجيل الدخول</p>
                                    <form class="mx-1 mx-md-4" action="login" method="POST">
                                        @csrf
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                        <input type="email" name="email" id="form3Example3c" class="form-control" />
                                        <label class="form-label" for="form3Example3c">البريد الالكتروني </label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                        <input type="password" name="pass" id="form3Example4c" class="form-control" />
                                        <label class="form-label" for="form3Example4c">كلمة المرور</label>
                                        </div>
                                    </div>
                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <label type="button"  data-toggle="modal" data-target=".bd-example-modal-lg" class="w3-bar-item w3-button"class="form-check-label" for="form2Example3">
                                        ليس لديك حساب؟<a type="button"  data-toggle="modal" data-target=".bd-example-modal-lg2" href="#!">تسجيل جديد</a>
                                        </label>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                                        <button type="submit" class="btn btn-primary btn-lg">تم</button>
                                    </div>
                                </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </section>
                </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <section class="h-100 h-custom" style="background-color: #8fc4b7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img3.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                        <form class="px-md-2" action="register" method="POST">
                            @csrf

                        <div class="form-outline mb-4">
                            <input type="text" name="name" id="form3Example1q" class="form-control" />
                            <label class="form-label" for="form3Example1q">Name</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="username" id="form3Example1q" class="form-control" />
                            <label class="form-label" for="form3Example1q">Username</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form3Example1q" class="form-control" />
                            <label class="form-label" for="form3Example1q">Email</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" name="pass" id="form3Example1q" class="form-control" />
                            <label class="form-label" for="form3Example1q">Password</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">

                            <div class="form-outline datepicker">
                                <input
                                type="text"
                                class="form-control"
                                id="exampleDatepicker1"
                                />
                                <label for="exampleDatepicker1" class="form-label">Select a date</label>
                            </div>

                            </div>
                            <div class="col-md-6 mb-4">


                            <select class="select" name="city_id">
                                @foreach($cities as $city)
                                <option value="{{$city->id}}"> {{$city->name}} </option>
                                @endforeach
                            </select>


                            </div>
                        </div>

                        <div class="mb-4">

                            <select class="select">
                            <option value="1" disabled>Class</option>
                            <option value="2">Class 1</option>
                            <option value="3">Class 2</option>
                            <option value="4">Class 3</option>
                            </select>

                        </div>

                        <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                            <div class="col-md-6">

                            <div class="form-outline">
                                <input type="text" id="form3Example1w" class="form-control" />
                                <label class="form-label" for="form3Example1w">Registration code</label>
                            </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>

        </div>
    </div>
</div>

<div class="w3-content" style="max-width:1100px">

    <div class="container">
        @yield('content')
    </div>
    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
    </div>
    من نحن
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
    <p>كافة الحقوق محفوظة <a href="#" title="W3.CSS" target="_blank" class="w3-hover-text-green">DivWithMe</a></p>
</footer>

</body>
</html>
