	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<!--  <link rel="shortcut icon" href="img/fav.png"> -->
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Fitness</title>

		<link rel="icon" type="image/png" href="{{asset('./img/gymlogo.png')}}">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
			<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
			<link rel="stylesheet" href="{{asset('css/main.css')}}">

		</head>

		<body>

			@include('part.header')


			@yield('content')

			@include('part.footer')


			<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('js/easing.min.js')}}"></script>
			<script src="{{asset('js/hoverIntent.js')}}"></script>
			<script src="{{asset('js/superfish.min.js')}}"></script>
			<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
 			<script src="{{asset('js/jquery-ui.js')}}"></script>
			<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
			<script src="{{asset('js/owl.carousel.min.js')}}"></script>
			<script src="{{asset('js/mail-script.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('#modalQuickView').on('show.bs.modal', function (e) {
                    var id = $(e.relatedTarget).data('id');
                    //console.log(id);
                    $.get('/admin/trainer/' + id, function(response){
                        //console.log(response);
                        $('#trainer_name').html(response.name);
                        $('#about').html(response.description);
                        $("#cover_img").attr("src", response.image);
                        $("#facebook").attr("href", response.facebook);
                        $("#google").attr("href", response.google);
                        $("#instagram").attr("href", response.instagram);

                    })
                });
                $('#modalQuickViewpaing').on('show.bs.modal', function (e) {
                    var id = $(e.relatedTarget).data('id');
                    //console.log(id);
                    $.get('/admin/trainer/' + id, function(response){
                        //console.log(response);
                        $('#trainer_name').html(response.name);
                        $('#about').html(response.description);
                        $("#cover_img").attr("src", response.image);
                        $("#facebook").attr("href", response.facebook);
                        $("#google").attr("href", response.google);
                        $("#instagram").attr("href", response.instagram);

                    })
                });
            });
        </script>
            <script>
                $(document).ready(function () {
                    $('#modalDetail').on('show.bs.modal',function (e) {
                        var id = $(e.relatedTarget).data('id');
                        //console.log(id);
                        $.get('/class/' + id,function (response) {
                            //console.log(response);
                            $('#detail_name').html(response.name);
                            $('#detail_price').html('$'+response.price);
                            $('#start').html(response.start);
                            $('#end').html(response.end);
                            $('#trainername').html(response.trainer.name);
                            $('#desc').html(response.description);
                        })
                    })


                    $('#modalJoin').on('show.bs.modal',function (e) {
                        var id = $(e.relatedTarget).data('id');
                        //console.log(id);
                        $('#class_id').val(id);
                        //
                    })
                    $('#packageModal').on('show.bs.modal',function (e) {
                        var id = $(e.relatedTarget).data('id');
                        //console.log(id);
                        $('#package_id').val(id);
                    })

                })
            </script>

		</body>
	</html>
