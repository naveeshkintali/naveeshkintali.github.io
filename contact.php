<html>

<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<!-- <h1>Hello world</h1>
<img src="{% static 'images/linkedin.png' %}"> -->

<body>
    <!-- navbar starts -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm  bg-white rounded fixed-top">
        <a class="navbar-brand" href="#">TheNavPortfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="projects.html" class="nav-link">Projects</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar ends -->
    <div class="container" id="main-container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <img class="contact-banner" src="images/contact.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                
                <form class="contact-form shadow-sm" name="contactform" id="contactform" method="POST" action="mail.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="first">First Name</label> <span class="required">*</span>
                                    <input type="text" class="form-control" placeholder="firstname" name="firstname"
                                        id="firstname" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="last">Last Name</label><span class="required">*</span>
                                    <input type="text" class="form-control" name="lastname" placeholder="lastname"
                                        id="lastname" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="company">Company</label><span class="required">*</span>
                                    <small> &nbsp; (if not company then add "-")</small>
                                    <input type="text" class="form-control" name="company" placeholder="company"
                                        id="company" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label><span class="required">*</span>
                                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="phone"
                                        required>
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email address</label><span class="required">*</span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="email"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Subject">Subject</label><span class="required">*</span>
                                    <input type="Subject" class="form-control" name="subject" id="Subject" placeholder="Subject"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Message">Message</label><span class="required">*</span>
                                    <input type="Message" class="form-control" name="message" id="Message" placeholder="Message"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/contact.jpg" style="width: inherit;">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm  bg-white rounded">
            <div class="copyright">Copyright © 2020 TheNavPortfolio</div>
        </nav>
    </footer>





    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>