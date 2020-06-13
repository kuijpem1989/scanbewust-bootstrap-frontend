<?php

require 'Product.php';

// checken op form requesten 
if($_SERVER["REQUEST_METHOD"] === "POST") {
    // check met de User class of er een create is gedaan
    if(Product::postProduct($_POST['ean'], $_POST['naam'], $_POST['beschrijving'], $_POST['voetafdruk'])) {
        exit;
    }
}

?>

<!DOCTYPE html>

<html>
<head>
<title>Scan Bewust web portal</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta author="Michael Kuijpers">

<!-- Bootstrap import CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Google font import CSS -->
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="stylesheet.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm d-flex justify-content-center padding-default">
            <img src="afbeeldingen/logo.png" class="img-fluid" height="20%"  width="20%" alt="Scan Bewust">
        </div>
    </div>
    <div class="row">
            <div class="content col-sm-3">
                &nbsp;
            </div>
            <div class="content col-sm-6">
                <div class="card rounded formProduct">
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="ean" name="ean" placeholder="Barcode / EAN">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="naam" name="naam" placeholder="Naam">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="beschrijving" name="beschrijving" placeholder="Beschrijving">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="voetafdruk" name="voetafdruk" placeholder="Voetafdruk">
                            </div>
                            <button type="submit" class="button">Voeg product toe</button>
                        </form>
                    </div>
                </div>        
            </div>
            <div class="content col-sm-3">
                &nbsp;
            </div>
        </div>
    </div>

<!-- Bootstrap import JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>