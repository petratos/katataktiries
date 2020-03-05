<?php

function page_header() {
?>
<!DOCTYPE html>
<html lang="el">
    <head>
        <meta property="og:image" content="../img/cover.jpg">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Αναλαμβάνουμε την προετοιμασία υποψηφίων στα μαθήματα Ιατρικής Φυσικής, Βιολογίας και Βιοχημείας των κατατακτηρίων εξετάσεων της Ιατρικής Σχολής του Πανεπιστημίου Πατρών. ">
        <meta name="author" content="Technology Remastered">
        <title>ΚΑΤΑΤΑΚΤΗΡΙΕΣ ΙΑΤΡΙΚΗΣ ΠΑΤΡΑΣ | Ιατρική Φυσική | Βιολογία | Βιοχημεία</title>
        <link rel="icon" href="https://res.cloudinary.com/technologyremastered/image/upload/v1549906035/iatriki/logo.png" type="image/png" sizes="16x16">
        <!-- CSS stylesheets -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fa.min.css" rel="stylesheet">
        <link href="css/new-age.css" rel="stylesheet">
        <link href="css/stylish-portfolio.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127966790-3"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-127966790-3');
		</script>

    </head>
    <body id="page-top">
<?php
}

function page_footer() {
?>
        <footer>
            <div class="container">
            <p>&copy; <a href="http://technologyremastered.eu/">TechnologyRemastered</a> <?php echo date("Y")?>. All Rights Reserved.</p>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Custom scripts for this template -->
        <script src="js/new-age.js"></script>
		
		<!-- Scripts for contact -->
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="https://www.google.com/recaptcha/api.js?render=6Ld-SrEUAAAAAG27GM-hRkH5oNS10phJAoa2UANu"></script>
		<script src="js/contact_me.js"></script>
    </body>
</html>
<?php
}
?>