<!DOCTYPE html>
<html lang="en">
<head>
	<title>MLM</title>
	<?= HTML::style('/assets/bootstrap-3.1.1-dist/css/bootstrap.min.css') ?>
	<?= HTML::style('/assets/css/style.css') ?>
	
	<!-- Placed temporarily -->
	<?= Config::get('mlm_config.get_jquery') ?>
</head>
<body>
<div class="container">

<header>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="/">MLM</a>
		</div>
		<div class="main-menu">
			<a class="btn btn-sm btn-primary navbar-btn" data-toggle="modal" data-target="#register_modal">Register</a>
		</div>
	</nav>	 
</header>

<!-- Register Modal -->
<div class="modal fade" id="register_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Registration</h4>
			</div>
			<div class="modal-body">
				<div class="registration-form">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="firstname">First Name</label>
							<input type="text" class="form-control" name="firstname" id="firstname">
						</div>
						<div class="form-group col-md-6">
							<label for="lastname">Last Name</label>
							<input type="text" class="form-control" name="lastname" id="lastname">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email"  autocomplete="off">
						</div>
						<div class="form-group col-md-6">
							<label for="activationcode">Activation Code</label>
							<input type="text" class="form-control" name="activationcode" id="activationcode">
						</div>						
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password">
						</div>
						<div class="form-group col-md-6">
							<label for="confirmpassword">Confirm Password</label>
							<input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="submit-registration">Submit</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Register Modal - END-->



<script>
	$(document).ready(function () {

		$('#submit-registration').click(function () {

			var $firstname = $('#firstname').val(),
				$lastname = $('#lastname').val(),
				$email = $('#email').val(),
				$activationcode = $('#activationcode').val(),
				$password = $('#password').val(),
				$confirmpassword = $('#confirmpassword').val();

			$.ajax({
				url:"<?= action('AccountController@addUser') ?>",
				type: 'POST',
				data: {
					firstname : $firstname,
					lastname : $lastname,
					email : $email,
					activationcode : $activationcode,
					password : $password,
				},
				beforeSend:function(){
					$('.registration-form').slideUp('fast');
				},
				success:function(result){
				    $('.registration-form input').val('');
				    $('#register_modal .modal-body').html('<div class="alert">' + result + '</div>');
				}

			});
		})

	});
</script>