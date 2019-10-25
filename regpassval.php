<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

    <title>Register</title>



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        /* Style for Navbar Starts */
        .navbar-custom li a {
            color: #000;
        }

        .btn-success {
            background-color: #218838;
            color: #fff;
            border: thin solid#1e7e34;
            
        }

        .btn-success:hover {
            background-color: rgb(11, 119, 69);
            color: #fff;
            border: thin solid #1b8a5a;
        }

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .custom-toggler.navbar-toggler {
            border-color: #000;
        }

        /* Style for Navbar Ends */
        /* Style for Footer Starts */
        *footer {
          
            margin: 0;
            padding: 0;
            
            font-family: 'Nunito', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .deep {
            background: #3A0842;
            color: #fff;
        }

        .deep #slink {
            background: #44CF6C;
            border-radius: 10px;
            color: white;
            padding: 10px 70px;
        }

        .deep li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            line-height: 30px;
        }

        .deep li {
            list-style: none;
        }

        .deep li a:hover {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        .icons i {
            font-size: 26px;
            height: 50px;
            width: 50px;
            padding: 10px 20px;
            color: white;
        }

        .icons i.fab.fa-twitter:hover {
            color: #00aced;
        }

        .icons i.fab.fa-facebook:hover {
            color: #3b5598;
        }

        .icons i.fab.fa-instagram:hover {
            color: #ed3833;
        }

        /* Style for Footer Ends */
        /* Body Style */
        .banner {
            background-color: #E5EBFF;
        }
        .footer {
            background: #3A0842;
            color: #fff;
        }
        .footer ul {
            margin-left: 0;
            padding: 0;
        }
        .footer ul li {
            list-style: none;
        }
        .footer ul li a {
            color: #fff;
            margin-bottom: 10px;
        }
        .copyrights {
            background: #2E0435;
            background-size: 0px;
           
            color: #fff;
            padding-top: 20px;
        
        }
        .copyrights .icons i {
            color: #fff;
            font-size: 24px;
            padding-left: 5px;
            height: 45px;
            width: 50px;
        } 

        .testimonials .overlay1 {
        	background: #2DCE89;
        	padding: 50px;
        }
        .testimonials .overlay2 {
        	background: purple;
        	padding: 50px;
        }
        .testimonials-content img {
            border: 2px solid #2DCE89;
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin: 0 auto;
            position: relative;
            top: -50px;
        }
        .testimonials-content p {
            max-width: 588px;
            margin: 0 auto;
            padding: 20px 10px;
        }
        .testimonials-content h2 {
            color: #2DCE89;
            font-size: 16px;
            padding-bottom: 10px;
        }
        .testimonials-content h3 {
            font-size: 14px;
        }
    </style>

</head>



<body>

    <nav class="navbar navbar-expand-lg navbar-custom bg-custom">

        <div class="container pb-2 pt-2">

            <a href="index.html" class="navbar-brand"><img
                    src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png"
                    class="img-fluid" alt="logo" width="150px"></a>

            <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse"
                data-target="#navbar9" style="color: #000;">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="navbar-collapse collapse" id="navbar9">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item mr-5">

                        <a class="nav-link" href="about.html">About Us</a>

                    </li>

                    <li class="nav-item mr-5">

                        <a class="nav-link" href="courses.html">Courses</a>

                    </li>

                    <li class="nav-item mr-5">

                        <a class="nav-link" href="hireGrad.html">Hire A Grad</a>

                    </li>

                    <li class="nav-item mr-5">

                        <a class="nav-link" href="contactus.html">Contact Us</a>

                    </li>

                    <li class="nav-item mr-5">

                        <a class="btn btn-success nav-link px-5" href="register.html" style="color: #fff;">Start

                            Learning</a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>



    <div class="container-fluid banner">

        <div class="container">

            <div class="row align-items-center pt-5">

                <div class="col-md-6 pb-5">

                    <h4 class=""
                        style="font-style: normal; font-weight: bold; font-size: 40px; letter-spacing: 0.655606px;">

                        Welcome to the <br>Start.ng application!</h4>

                    <p style="font-style: normal; font-weight: normal; font-size: 20px; line-height: 24px;">Please fill

                        all information accurately <br> to start learning</p>

                </div>

                <div class="col-md-6">

                    <img class="img-fluid"
                        src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570906539/startng/Group_410_uqg7d0.png">

                </div>

            </div>

        </div>

    </div>

    <div class="container pt-4 pb-5">
        <div id="main-container"></div>
        <form id="formSubmit" method="POST" action="register.php">

            <div class="row pt-5">

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="usr" style="font-weight: bold;">First Name:</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter First Name"
                            pattern="[A-Z||a-z]*" title="You can only input letters" name="firstname" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">

                        </small>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="usr" style="font-weight: bold;">Last Name:</label>
                        <input type="text" class="form-control" id="secondName" pattern="[A-Z||a-z]*"
                            placeholder="Enter Last Name" title="You can only input letters" name="lastname" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">

                        </small>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="usr" style="font-weight: bold;">Email Address:</label>
                        <input type="email" class="form-control" id="email" placeholder="xyz@gmail.com" name="email"
                            title="Email address should be in the format: x@x.com">
                        <small id="passwordHelpBlock" class="form-text text-muted">

                        </small>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="usr" style="font-weight: bold;">Mobile Number:</label>
                        <input type="text" class="form-control" id="mobileNumber"
                           placeholder="Enter  Phone number" pattern="[0-9]*"
                            title="Enter Phone number" required name="mobilenumber">
                        <small id="passwordHelpBlock" class="form-text text-muted">

                        </small>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label style="font-weight: bold;">Course interested in:</label>
                        <select class="form-control" id="course" required name="course">
                            <option value="" selected disabled>Select a Course</option>
                            <option value="Full Stack Development">Full Stack Development</option>
                            <option value="Frontend">Front End Development</option>
                            <option value="Backend">Back End Development</option>
                            <option value="UI/UX"> UI/UX </option>
                            <option value="Machine Learning">Machine Learning</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                        </select>
                        <small id="passwordHelpBlock" class="form-text text-muted">

                        </small>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label style="font-weight: bold;">Experience:</label>
                        <select class="form-control" id="experience" required name="experience">
                            <option value="" selected disabled>Years of Experience</option>
                            <option value="0-1">0 - 1</option>
                            <option value="1-2">1-2</option>
                            <option value="2-5">2-5</option>
                            <option value="5-30">Above 5 years</option>
                        </select>
                        <small id="passwordHelpBlock" class="form-text text-muted">

                        </small>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label for="usr" style="font-weight: bold;">Country of Residence:</label>
                        <select class="form-control" id="country" required name="country">
                            <option value="" selected disabled>Select a Country</option>
                            <option value="nigeria">Nigeria</option>
                            <option value="cameroon">Cameroon</option>
                            <option value="ghana">Ghana</option>
                            <option value="south africa">South Africa</option>
                            <option value="united kingdom">United Kingdom</option>
                            <option value="united states of america">United States Of America</option>
                            <option value="canada">Canada</option>
                            <option value="germany">Germany</option>
                        </select>
                        <small id="passwordHelpBlock" class="form-text text-muted">

                        </small>
                    </div>
                </div>

                <div class="col-md-6" style="">

                    <div class="form-group">
                        <label for="usr" style="font-weight: bold;">State of Residence:</label>
                        <input type="text" class="form-control" id="state" name="state"
                            placeholder="Enter state of residence" 
                            title="You can only input letters" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">

                        </small>
                    </div>
                </div>   
                    

                        <div class="col-md-6" >
                        
        
                            <div class="form-group">
        
                                <label for="usr" style="font-weight: bold;">Password:</label>
        
                                <input type="password" name="password" class="form-control" id="password" required>
                                <small id="passwordHelpBlock" class="form-text text-muted">

                                </small>                         
                            </div>
                        </div>
        
                        <div class="col-md-6">
                        <div id="main-container"></div>
                            <div class="form-group">
        
                                <label for="usr" style="font-weight: bold;">Confirm Password:</label>
        
                                <input type="password" name="confirm_password" class="form-control" id="confirm_password" required>
                                        
                            </div>
                        </div>
                      
                  </div>
            </div>

            <button type="submit" onclick="return submitForm()"
                class="btn btn-success d-block mx-auto pl-5 pr-5 mb-4">Continue</button>

        </form>
    </div>

    <!-- Footer -->
    

<div class="container-fluid text-white deep mt-5">

        <footer>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 mt-3 mb-4">

                        <img src="https://res.cloudinary.com/juwon-tech/image/upload/v1570818437/Logo_1_oyasky.png"
                            alt="">

                    </div>

                </div>



                <div class="row pb-4">

                    <div class="col-lg-4 col-md-12 mb-3">

                        <p class="pb-2">Ready to take the Leap?</p>
                        <a href="register.html" class="btn btn-success mb-5 pl-5 pr-5" >Start!</a>

                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">

                        <li><a href="about.html">About Us</a></li>

                        <li><a href="courses.html">Our Course</a></li>

                        <li><a href="hireGrad.html">Hire a Grad</a></li>

                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">

                        <li><a href="curriculum.html">Curriculum</a></li>

                        <li><a href="blog2.html">Blog</a></li>

                        <li><a href="blog1.html">Student Stories</a></li>



                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">

                        <li><a href="search.html">Find a Course</a></li>

                        <li><a href="#">Our Partners</a></li>

                        <li><a href="contactus.html">Contact Us</a></li>

                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">

                        <li><a href="help.html">FAQ</a></li>

                        <li><a href="termsOfService.html">Terms of Service</a></li>

                        <li><a href="privacy-policy.html">Privacy Policy</a></li>

                    </div>

                </div>



            </div>

            <div class="copyrights">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; copyrights 2019. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6 text-right icons">
                            <a href="#"><i class='fab fa-twitter' aria-hidden="true"></i></a>
                            <a href="#"><i class='fab fa-instagram' aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        
    </div>

    </footer>

    </div>


    <!-- End of Footer -->

    <script>
        const formSubmit = document.querySelector('#formSubmit');
        formSubmit.addEventListener("submit", function(e){
            const firstName       = document.querySelector('#firstName');
            const secondName      = document.querySelector('#secondName');
            const emails           = document.querySelector('#email');
            const mobileNumber    = document.querySelector('#mobileNumber');
            const course          = document.querySelector('#course');
            const experience      = document.querySelector('#experience');
            const states           = document.querySelector('#state');
            const country         = document.querySelector('#country');
            const password        = document.querySelector("#password");
            const confirmPassword = document.querySelector("#confirm_password");

            if (!firstName.value || firstName.value.length < 5 ) {
                e.preventDefault();
                firstName.nextElementSibling.textContent = "First Name should not be less than 5 characters and should not contain a number";
                firstName.style.borderBottomColor = "red"
            } else {
                firstName.nextElementSibling.textContent = "";
                firstName.style.borderBottomColor = ""
            }
            
            if (!secondName.value || secondName.value.length < 5 ) {
                e.preventDefault();
                secondName.nextElementSibling.textContent = "Second Name should not be less than 5 characters and should not contain a number";
                secondName.style.borderBottomColor = "red"
            } else {
                secondName.nextElementSibling.textContent = "";
                secondName.style.borderBottomColor = ""
            }

            if (!emails.value || emails.value.length < 5 ) {
                e.preventDefault();
                emails.nextElementSibling.textContent = "Email address should be in the format x@x.com";
                emails.style.borderBottomColor = "red"
            } else {
                emails.nextElementSibling.textContent = "";
                emails.style.borderBottomColor = ""
            }

            if (!mobileNumber.value ) {
                e.preventDefault();
                mobileNumber.nextElementSibling.textContent = "Phone number should be numeric";
                mobileNumber.style.borderBottomColor = "red"
            } else {
                mobileNumber.nextElementSibling.textContent = "";
                mobileNumber.style.borderBottomColor = ""
            }

            if (!course.value) {
                e.preventDefault();
                course.nextElementSibling.textContent = "You have to select a course";
                course.style.borderColor = "red"
            } else {
                course.nextElementSibling.textContent = "";
                course.style.borderColor = ""
            }

            if (!experience.value) {
                e.preventDefault();
                experience.nextElementSibling.textContent = "Please input your years of experience";
                experience.style.borderColor = "red"
            } else {
                experience.nextElementSibling.textContent = "";
                experience.style.borderColor = ""
            }

            if (!states.value) {
                e.preventDefault();
                states.nextElementSibling.textContent = "Please enter your state of residence";
                states.style.borderBottomColor = "red"
            } else {
                states.nextElementSibling.textContent = "";
                states.style.borderBottomColor = ""
            }

            if (!country.value) {
                e.preventDefault();
                country.nextElementSibling.textContent = "Please select a country from the list";
                country.style.borderColor = "red"
            } else {
                country.nextElementSibling.textContent = "";
                country.style.borderColor = ""
            }

            if (password.value !== confirmPassword.value) {
                e.preventDefault();
                alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
                password.style.borderColor = "red"
                confirmPassword.style.borderColor = "red"
            }
            alert(state);
        }) 
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html