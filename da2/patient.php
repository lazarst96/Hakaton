<!DOCTYPE html>
<html>
<head>
	<title>WebsApp</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="assets/css/patient.css">
	<link rel="stylesheet" href="assets/library/bootstrap/css/bootstrap.min.css">
	<script src="assets/library/jquery/jquery.min.js"></script>
	<script src="assets/library/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 

</head>
<body>

	<div class="container-fluid patient-header">
		<div class="row">
			<div class="col-6 text-left">
				<h6><b>WebApp</b></h6>	
			</div>
			<div class="col-6 text-right">
				<a href="#"><span><i class="fas fa-cog"></i></span> Profile</a>
				<a href="#"><span><i class="fas fa-sign-out-alt"></i></span> Izloguj se</a>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-4 left-side">
				<div class="row">
					<div class="col-12">
						<h4>Terapija</h4>
						<hr>
					</div>

					<div class="col-12 seek">
						<ul class="list-inline">
							<li class="list-inline-item"><b>Naslov bolesti</b></li>
							<li class="list-inline-item text-right"><b>15-10-2018</b></li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit dolorem accusamus molestiae minima itaque beatae corporis aliquid ipsum </li>
						</ul>
					</div>

					<div class="col-12 seek1">
						<ul class="list-inline">
							<li class="list-inline-item"><b>Naslov bolesti</b></li>
							<li class="list-inline-item text-right"><b>15-10-2018</b></li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit dolorem accusamus molestiae minima itaque beatae corporis aliquid ipsum </li>
						</ul>
					</div>

				</div>

				<div class="row">
					<div class="col-12" style="padding-top: 40px;">
						<h4>Terapija</h4>
						<hr>
					</div>

					<div class="col-12 seek">
						<ul class="list-inline">
							<li class="list-inline-item"><b>Naslov bolesti</b></li>
							<li class="list-inline-item text-right"><b>15-10-2018</b></li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit dolorem accusamus molestiae minima itaque beatae corporis aliquid ipsum </li>
						</ul>
					</div>

				</div>
			</div>
			<div class="col-8 right-side">
				<div class="row">
					<div class="col-7 right-side-first">
						<div class="row">
							<div class="col-12 text-center">
								<img style="height: 250px; margin-bottom: 10px;" class="img-fluid" src="assets/images/doctor1.jpg" alt="">
								<h6>Lazar Stamenkovic</h6>
								<br>
							</div>
						</div>
						
						<p><b>Ime Bolesti:</b> Zajebana bolest</p>
						<p><b>Dijagnoza:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, at! Quas laborum nesciunt illum iste incidunt ea, molestiae voluptas, nam, ratione accusamus a quidem. Optio odio tempora nulla quidem ab.</p>
						<p><b>Datum: </b> 11-22-2018</p>
					</div>

					<div class="form-group col-5 right-side-second">
						<div class="row">
							<div class="col-12 p-3">
								<h4>Dodaj Fotografije</h4>
							</div>
						</div>
						<form action="#" method="POST" enctype="multipart/form-data">
							<input class="form-control" type="file" name="images" value="Izaberi" required=""><br>
							<textarea class="form-control" name="message" cols="30" rows="5" required=""></textarea><br>
							<input class="btn btn-default" type="submit" value="Save">
						</form>	
					</div>
					<hr>
					<div class="col-12 right-side-bottom">
						<div class="row">
							<div class="col-3">
								<img class="img-fluid" src="assets/images/derma1.jpg" alt="">
								
							</div>
							<div class="col-3">
								<img class="img-fluid" src="assets/images/derma2.jpg" alt="">
								
							</div>
							<div class="col-3">
								<img class="img-fluid" src="assets/images/derma3.jpg" alt="">
								
							</div>
							<div class="col-3">
								<img class="img-fluid" src="assets/images/derma4.jpg" alt="">
								
							</div>

							<div class="col-8 right-side-bottom-second">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus commodi aliquid in necessitatibus ad quasi, modi! Eligendi quo minus dolorum ab doloremque dignissimos, doloribus, alias consequuntur fugit earum nobis accusamus.</p>
								<p><b>Datum:</b> 22-10-2018</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	


</body>
</html>