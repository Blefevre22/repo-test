<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Musée du Louvre</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <script src="{{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
    <script src="{{ asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body>

<!-- Static navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">LE LOUVRE</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#works">Works</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<div id="headerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="col-lg-4 col-lg-offset-1">
                    <h4>Musée du</h4>
                </div>
                <h1>LOUVRE</h1>
                <h4>le plus grand musée d'art et d'antiquités au monde</h4>
            </div>
        </div><! --/row -->
    </div> <!-- /container -->
</div><! --/headerwrap -->

<section id="works"></section>
<div class="container">
    <div class="row centered mt mb">
        <h1 id="titre">Réservez votre découverte</h1>
        <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 gallery">
            {{ form(form) }}
            <a href="#" id="add_ticket" class="btn btn-default">Ajouter un billet</a>
        </div>


        <!--<div class="col-lg-4 col-md-4 col-sm-4 gallery">
            <a href="work.html"><img src="{{ asset('img/portfolio/folio01.png') }}" class="img-responsive"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 gallery">
            <a href="work.html"><img src="{{ asset('img/portfolio/folio02.png') }}" class="img-responsive"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 gallery">
            <a href="work.html"><img src="{{ asset('img/portfolio/folio03.png') }}" class="img-responsive"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 gallery">
            <a href="work.html"><img src="{{ asset('img/portfolio/folio04.png') }}" class="img-responsive"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 gallery">
            <a href="work.html"><img src="{{ asset('img/portfolio/folio05.png') }}" class="img-responsive"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 gallery">
            <a href="work.html"><img src="{{ asset('img/portfolio/folio06.png') }}" class="img-responsive"></a>
        </div>
        -->
    </div><! --/row -->
</div><! --/container -->

<div id="social">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-dribbble"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="col-lg-2">
                <a href="#"><i class="fa fa-tumblr"></i></a>
            </div>

        </div><! --/row -->
    </div><! --/container -->
</div><! --/social -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/addCustomer.js') }}"></script>


<script>

    $(document).ready(function() {
        $('#booking_customer_0_birthDate').change(function () {
            var birthDate = $('#booking_customer_0_birthDate');
            console.log(birthDate.val());
            $.ajax({
                url: "{{ path('jquery-price') }}",
                method: 'GET',
                data: "date=" + birthDate.val(),
                success: function (data) {
                    if($('.tarif').length){
                        $('.tarif').remove();
                    }
                    $('#booking_customer_0 .checkbox').after("<p class='tarif'>Tarif : "+data['data']+"€</p>");
                }
            })
        });
    });
</script>
</body>
</html>
