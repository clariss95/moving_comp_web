<?php include 'sentMail.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="St. John's Moving Company - Professional local and long-distance moving services in St. John's, Newfoundland. We specialize in residential and commercial moves, appliance and furniture pick up and delivery, Costco runs, and dump runs.">
    <meta name="keywords" content="St. John's moving company, Newfoundland movers, local movers, long-distance movers, residential moving, commercial moving, moving services, Costco runs, dump runs St. John's">
    <title>Homepage | English's Enterprise Moving</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="icon" href="pics/favicon.ico" type="image/x-icon">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-dark  fixed-top navbar-expand-lg " style="background-color: #132c41;">


            <a class="navbar-brand" href="index.html">
                <img src="pics/logo2.svg" alt="English's Enterprise Logo" width="200" class="d-inline-block  align-text-center">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.html">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="FAQs.html">FAQs</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>



    <div class="background-image position-relative">

        <button onclick="goToForm()" type="button" class="btn btn-dark btn-action" id="scrollToFormButton">Get a Free Quote</button>


    </div>

    <div class="container-fluid" style=" background-color: rgb(21, 26, 31); ">
        <h1 class="display-4">Moving Made Easier</h1>
        <p class="fs-5" style="padding-top:0.5rem;">We are a small but mighty business, located in St. John's, Newfoundland. English's Enterprise is run by a husband and wife duo, specializing in deliveries, monthly moves, and dump runs.</p>
        <p class="fs-5" style="padding-top:0.5rem;">Armed with our pickup truck (and trailer), we are here to make your life easier and lighten your load.</p>


    </div>

    <div class="container-fluid" style=" padding: 0;">
        <img src="pics/pickuptruck.jpg" class="img-fluid" alt="English's Enterprise Pickup Truck Used For Moving" style="width: 100%;  object-fit: cover;">
    </div>

    <div class="container-fluid" style=" background-color: rgb(21, 26, 31);">
        <p class="fs-5" style="padding-top:0.5rem">Whether you need a package delivered pronto, a smooth move, or some help clearing out the clutter, we've got you covered. With our friendly service and can-do attitude, we'll handle all the heavy lifting while you sit back and relax.</p>
        <p class="fs-5" style="padding-top:0.5rem">
            Let us take care of the logistics so you can focus on what matters most.</p>
        <p class="fs-5 bold" style="padding-top:1rem; text-align: center;">Welcome to our small business family!</p>
    </div>

    <div class="container">
        <h2 id="quoteFormIntro">Get a Free Quote</h2>
        <form class="row g-3" id="quoteForm" method="post">
            <div class="col-md-7">
                <label for="FullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="FullName" name="name" required>
            </div>
            <div class="returnmessage valid-feedback p-15px-b" data-success="Your message has been received, We will contact you soon."></div>
            <div class="empty_notice invalid-feedback p-15px-b"><span>Please Fill Required Fields</span></div>
            <div class="col-md-7">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" required>

            </div>
            <div class="col-md-7">
                <label for="inputPhone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="(709)999-9999">
            </div>


            <div class="mb-2">
                <label for="Textarea1" class="form-label">Your message</label>
                <textarea class="form-control" id="Textarea1" rows="5" name="message" placeholder="Describe what help you are looking for." required></textarea>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="preferPhoneCall">
                    <label class="form-check-label" for="gridCheck">
                        I prefer to receive a phone call over an email.
                    </label>
                </div>
            </div>
            <div class="d-grid gap-2 col-2 mx-auto">
                <button type="submit" class="btn btn-primary" name="submit" style="margin: 0 0 1rem 0;">Submit</button>
            </div>


        </form>
    </div>

    <footer class="py-3">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.html" class="nav-link px-2 ">Home</a></li>
            <li class="nav-item"><a href="pricing.html" class="nav-link px-2 ">Pricing</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link px-2 ">Contact</a></li>
            <li class="nav-item"><a href="FAQs.html" class="nav-link px-2">FAQs</a></li>
        </ul>
        <p class="text-center">© 2023 Klara Steflova</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>