<?php
   include('../auth/session.php');
?>
<!doctype html>
<html lang="en">

<head>
  <title>Portfolio</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            /* background-color: #E7F3ED; */
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
        }

        input {
            height: 40px;
        }

        .form-control:focus,
        .form-control:active,
        .form-control:hover {
            border: 1px solid purple;
            box-shadow: none;
            outline: none;
        }

        .form-control {
            border-radius: none;
        }

    </style>

</head>

<body>
  <main>

    <!-- Wrapper container -->
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5 text-center">
                <!-- <h2 class="text-capitalize">WELCOME TO TEST HOSPITAL</h2> -->
                <div align="center" style="padding-top: 60px;">
                    <!-- <a href=""><img src="/assets/images/logo-dark.png" class="logo" alt="logo"> </a> -->
                    <h4 style="padding-top: 10px;">WELCOME <b><?php echo strtoupper($_SESSION['login_user']);?></b>, THIS IS SETTINGS PAGE</h4>
                </div>
            </div>
            <div class="col-md-5 my-5 text-center">
                <div align="center" style="padding-top: 60px;">
                    <h4 style="padding-top: 10px; color:red;"><form action="../auth/logout.php" method="post"><button type="submit" class="btn btn-danger"> Logout </button></form></h4>
                </div>
            </div>
        </div>
 


        <div class="row justify-content-center">
            <div class="col-md-5">
                <h5>About/Profile Form</h5>
                <!-- Bootstrap 5 starter form -->
                <form id="profile" action="server.php" method="POST" class="p-4 border bg-light">

                    <!--name input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="name">name</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="name" id="name" cols="30" rows="10" placeholder="Enter your name here" style="background: #c3dcef59">
                    </div>
                    <!--job input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="job">job</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="job" id="job" cols="30" rows="10" placeholder="Enter your job here" style="background: #c3dcef59">
                    </div>
                    <!--description input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="description">description</label>
                        </div>  
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10" placeholder="Enter your description here" style="background: #c3dcef59"></textarea>
                    </div>

                    <!-- Form submit button -->
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-sm" id="submitButton" type="submit">Submit</button>
                    </div>

                </form> 
                <div class="row col-md-12">
                    <a href="/portfolios/portfolio_6/" class="btn btn-primary btn-sm  col-md-12 m-2">view portfolio</a>
                </div>
                <footer class="mt-4 text-center">
                    <!-- Copyright © 2023 AGS Technologies. All rights reserved. -->
                </footer>
            </div>

            <div class="col-md-5">
                <h5>Contact Form</h5>
                <!-- Bootstrap 5 starter form -->
                <form id="contact" action="server.php" method="POST" class="p-4 border bg-light">

                    <!--email input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="email">email</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="email" id="email" cols="30" rows="10" placeholder="Enter your email here" style="background: #c3dcef59">
                    </div>
                    <!--phone input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="phone">phone</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="phone" id="phone" cols="30" rows="10" placeholder="Enter your phone here" style="background: #c3dcef59">
                    </div>
                    <!--instagram input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="instagram">instagram</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="instagram" id="instagram" cols="30" rows="10" placeholder="Enter your instagram here" style="background: #c3dcef59">
                    </div>
                    <!--facebook input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="facebook">facebook</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="facebook" id="facebook" cols="30" rows="10" placeholder="Enter your facebook here" style="background: #c3dcef59">
                    </div>
                    <!--x input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="x">x</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="x" id="x" cols="30" rows="10" placeholder="Enter your x here" style="background: #c3dcef59">
                    </div>
                    <!--linkedin input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="linkedin">linkedin</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="linkedin" id="linkedin" cols="30" rows="10" placeholder="Enter your linkedin here" style="background: #c3dcef59">
                    </div>
                    <!--github input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="github">github</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="github" id="github" cols="30" rows="10" placeholder="Enter your github here" style="background: #c3dcef59">
                    </div>
                    <!--website input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="website">website</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="website" id="website" cols="30" rows="10" placeholder="Enter your website here" style="background: #c3dcef59">
                    </div>

                    <!-- Form submit button -->
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-sm" id="submitButton" type="submit">Submit</button>
                    </div>

                </form> 
                <div class="row col-md-12">
                    <a href="/portfolios/portfolio_6/" class="btn btn-primary btn-sm  col-md-12 m-2">view portfolio</a>
                </div>
                <footer class="mt-4 text-center">
                    <!-- Copyright © 2023 AGS Technologies. All rights reserved. -->
                </footer>
            </div>

            <div class="col-md-5">
                <h5>Education Form</h5>
                <!-- Bootstrap 5 starter form -->
                <form id="education" action="server.php" method="POST" class="p-4 border bg-light">

                    <!--year input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="year">year</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="year" id="year" cols="30" rows="10" placeholder="Enter your year here" style="background: #c3dcef59" type="number"  min="1950" max="2050">
                    </div>
                    <!--level input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="level">level</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="level" id="level" cols="30" rows="10" placeholder="Enter your level here" style="background: #c3dcef59">
                    </div>

                    <!-- Form submit button -->
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-sm" id="submitButton" type="submit">Submit</button>
                    </div>

                </form> 
                <div class="row col-md-12">
                    <a href="/portfolios/portfolio_6/" class="btn btn-primary btn-sm  col-md-12 m-2">view portfolio</a>
                </div>
                <footer class="mt-4 text-center">
                    <!-- Copyright © 2023 AGS Technologies. All rights reserved. -->
                </footer>
            </div>

            <div class="col-md-5">
                <h5>Experience Form</h5>
                <!-- Bootstrap 5 starter form -->
                <form id="experience" action="server.php" method="POST" class="p-4 border bg-light">

                    <!--heading input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="heading">heading</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="heading" id="heading" cols="30" rows="10" placeholder="Enter your heading here" style="background: #c3dcef59">
                    </div>
                    <!--period input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="period">period</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="period" id="period" cols="30" rows="10" placeholder="Enter your period here" style="background: #c3dcef59">
                    </div>
                    <!--description input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="description">description</label>
                        </div>  
                        <textarea class="form-control @error('message') is-invalid @enderror" name="description" id="description" cols="30" rows="10" placeholder="Enter your description here" style="background: #c3dcef59"></textarea>
                    </div>
                    <!--attachment input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="attachment">attachment</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="attachment" id="attachment" cols="30" rows="10" placeholder="Enter your attachment here" style="background: #c3dcef59">
                    </div>
                    <!--place input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="place">place</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="place" id="place" cols="30" rows="10" placeholder="Enter your place here" style="background: #c3dcef59">
                    </div>

                    <!-- Form submit button -->
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-sm" id="submitButton" type="submit">Submit</button>
                    </div>

                </form> 
                <div class="row col-md-12">
                    <a href="/portfolios/portfolio_6/" class="btn btn-primary btn-sm  col-md-12 m-2">view portfolio</a>
                </div>
                <footer class="mt-4 text-center">
                    <!-- Copyright © 2023 AGS Technologies. All rights reserved. -->
                </footer>
            </div>

            <div class="col-md-5">
                <h5>Expertise Form</h5>
                <!-- Bootstrap 5 starter form -->
                <form id="expertise" action="server.php" method="POST" class="p-4 border bg-light">

                    <!--heading input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="heading">heading</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="heading" id="heading" cols="30" rows="10" placeholder="Enter your heading here" style="background: #c3dcef59">
                    </div>
                    <!--description input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="description">description</label>
                        </div>  
                        <textarea class="form-control @error('message') is-invalid @enderror" name="description" id="description" cols="30" rows="10" placeholder="Enter your description here" style="background: #c3dcef59"></textarea>
                    </div>
                    <!--attachment input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="attachment">attachment</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="attachment" id="attachment" cols="30" rows="10" placeholder="Enter your attachment here" style="background: #c3dcef59">
                    </div>

                    <!-- Form submit button -->
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-sm" id="submitButton" type="submit">Submit</button>
                    </div>

                </form> 
                <div class="row col-md-12">
                    <a href="/portfolios/portfolio_6/" class="btn btn-primary btn-sm  col-md-12 m-2">view portfolio</a>
                </div>
                <footer class="mt-4 text-center">
                    <!-- Copyright © 2023 AGS Technologies. All rights reserved. -->
                </footer>
            </div>

            <div class="col-md-5">
                <h5>Portfolio Form</h5>
                <!-- Bootstrap 5 starter form -->
                <form id="portfolio" action="server.php" method="POST" class="p-4 border bg-light">

                    <!--heading input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="heading">heading</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="heading" id="heading" cols="30" rows="10" placeholder="Enter your heading here" style="background: #c3dcef59">
                    </div>
                    <!--description input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="description">description</label>
                        </div>  
                        <textarea class="form-control @error('message') is-invalid @enderror" name="description" id="description" cols="30" rows="10" placeholder="Enter your description here" style="background: #c3dcef59"></textarea>
                    </div>
                    <!--attachment input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="attachment">attachment</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="attachment" id="attachment" cols="30" rows="10" placeholder="Enter your attachment here" style="background: #c3dcef59">
                    </div>
                    <!--link input -->
                    <div class="mb-3">
                        <div class="row col-md-12">
                            <label class="form-label text-uppercase fw-bold text-success mb-4" for="link">link</label>
                        </div>  
                        <input class="form-control @error('message') is-invalid @enderror" name="link" id="link" cols="30" rows="10" placeholder="Enter your link here" style="background: #c3dcef59">
                    </div>

                    <!-- Form submit button -->
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-sm" id="submitButton" type="submit">Submit</button>
                    </div>

                </form> 
                <div class="row col-md-12">
                    <a href="/portfolios/portfolio_6/" class="btn btn-primary btn-sm  col-md-12 m-2">view portfolio</a>
                </div>
                <footer class="mt-4 text-center">
                    <!-- Copyright © 2023 AGS Technologies. All rights reserved. -->
                </footer>
            </div>

        </div>

    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

</body>

</html>
