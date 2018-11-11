<!--// Navbar section -->

	<div class="container-fluid header">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="<?=base_url()?>">DermReport</a>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<button class="btn btn-primary log-in" data-toggle="modal" data-target="#exampleModal">Prijava</button>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div><!--// End of Navbar section -->


	<!--// Modal -->
	<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog"  role="document">
			<div class="modal-content">
				<div class="col-12 text-center modall-header">
					<h5>Ulogujte se</h5>
				</div>
				<div class="modal-body">

					<?=form_open()?>

						<label for="username">Imejl</label>
						<input class="form-control" type="text" name="email" required>
						<br>
						<label for="pwd">Lozinka</label>
						<input class="form-control" type="password" name="password" required>
						<br>
						<input class="btn btn-primary" type="submit" value="Prijavi se">
						<?=form_error('password', '<div class="font-weight-bold text-danger p-4">', '</div>')?>

					<?=form_close()?>

				</div>
			</div>
		</div>
	</div><!--// End of Modal -->


	<div class="container-fluid front-image" style="background-image: url('assets/images/doctor.jpg');">
		<div class="shade">
			<div class="row h-100">
				<div class="container align-self-center">
					<div class="row">
						<div class="col-12 col-md-6 text-center text-md-left front-text">
							<h1>DermReport</h1>
							<p>Aplikacija koja prati kućno lečenje pacijenata sa dermatološkim obolenjima. Vaš izabrani lekar u mogućnosti je da u potpunosti prati Vaš oporovak za vreme terapije. Vaše izlečenje je na prvom mestu.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container services">
		<div class="row">
			<div class="col-12 col-md-4 text-center service">
				<i class="fas fa-heartbeat"></i>
				<h3>Praćenje</h3>
				<p>U toku lečenja detaljno će se pratiti Vaše stanje, kako bi kućno lečenje bilo što uspešnije.</p>
			</div>
			<div class="col-12 col-md-4 text-center service">
				<i class="fas fa-ambulance"></i>
				<h3>Promena</h3>
				<p>Ukoliko lekar utvrdi da Vaš oporavak ne ide očekivanim tokom, veoma brzo stupiće u kontakt sa Vama kako bi zakazali kontrolni pregled radi eventualne promene terapije.</p>
			</div>
			<div class="col-12 col-md-4 text-center service">
				<i class="fas fa-calendar-plus"></i>
				<h3>Pomoć</h3>
				<p>Vaš izabrani lekar sada može da Vas savetuje prema uspešnosti Vašeg oporavka.</p>
			</div>
		</div>
	</div>



	<div class="container-fluid paralax" style="background-image: url('assets/images/lab.png');">
		<div class="shade1">
			<div class="row h-100">
				<div class="container align-self-center">
					<div class="row">
						<div class="col-12 text-center">
							<h3>Dermatolog</h3>
							<p>Dermatolog se stara o bolestima kože u najširem smislu reči, kao i o nekim kozmetičkim problemima kože, kose, i noktiju.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="container-fluid doctors">
		<div class="row">
			<div class="container">
				<div class="row">
					<?php foreach($doctors as $doctor):?>
					<div class="col-12 col-sm-6 col-md-3 doctor">
						<img class="img-fluid" src="assets/images/doctor/doctor<?=$doctor->id?>.jpg" alt="">
						<h5><?=$doctor->name?></h5>
						<p><i>-- Dermatolog</i></p>
					</div>
					<?php endforeach?>
					<div class="col-12 col-sm-6 col-md-3 doctor">
						<img class="img-fluid" src="assets/images/doctor/doctor1.jpg?>.jpg" alt="">
						<h5>Lazar Peric</h5>
						<p><i>-- Dermatolog</i></p>
					</div>
					<div class="col-12 col-sm-6 col-md-3 doctor">
						<img class="img-fluid" src="assets/images/doctor/doctor2.jpg?>.jpg" alt="">
						<h5>Milos Stojkovic</h5>
						<p><i>-- Dermatolog</i></p>
					</div>
					<div class="col-12 col-sm-6 col-md-3 doctor">
						<img class="img-fluid" src="assets/images/doctor/doctor4.jpg?>.jpg" alt="">
						<h5>Igor Milic</h5>
						<p><i>-- Dermatolog</i></p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="container-fluid footer">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-12 text-center text-md-left">
						<p>All Right Reserved <b style="color: #fff;">PMF TLE Team</b> 2018 Hakaton</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php if($error):?>
<script type="text/javascript">
	function mymodal(){
        $('#exampleModal').modal('show');
    }
    mymodal();
</script>
<?php endif?>
	
