<!--// Navbar section -->

	<div class="container-fluid header">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="#">DermReport</a>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<button class="btn btn-primary log-in" data-toggle="modal" data-target="#exampleModal">Log In</button>
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

						<label for="username">E-mail</label>
						<input class="form-control" type="text" name="email" required>
						<br>
						<label for="pwd">Lozinka</label>
						<input class="form-control" type="password" name="password" required>
						<br>
						<input class="btn btn-primary" type="submit" value="Log In">
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
							<h1>Neki Tekst</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut obcaecati, rem adipisci in consequuntur hic, cum eaque suscipit. consectetur adipisicing elit. Ut obcaecati, rem adipisci in consequuntur hic, cum eaque suscipit.</p>
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
				<h3>Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sequi tenetur odio debitis, doloremque quidem esse minus rerum. Doloribus iste cumque sed molestias amet in nemo illum totam provident id.</p>
			</div>
			<div class="col-12 col-md-4 text-center service">
				<i class="fas fa-ambulance"></i>
				<h3>Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sequi tenetur odio debitis, doloremque quidem esse minus rerum. Doloribus iste cumque sed molestias amet in nemo illum totam provident id.</p>
			</div>
			<div class="col-12 col-md-4 text-center service">
				<i class="fas fa-calendar-plus"></i>
				<h3>Title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sequi tenetur odio debitis, doloremque quidem esse minus rerum. Doloribus iste cumque sed molestias amet in nemo illum totam provident id.</p>
			</div>
		</div>
	</div>



	<div class="container-fluid paralax" style="background-image: url('assets/images/lab.png');">
		<div class="shade1">
			<div class="row h-100">
				<div class="container align-self-center">
					<div class="row">
						<div class="col-12 text-center">
							<h3>Lorem ipsum dolor sit amet</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil a delectus, ratione necessitatibus sed, fuga molestias dolorem consequuntur, fugit molestiae consequatur, quisquam quam? Aut blanditiis minus dolorem ratione laborum ut.</p>
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
	
