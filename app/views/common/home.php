<?php require_once Config::get('mlm_config.get_header'); ?>

<!-- DATABASE INITIAL SETUP -->
<?php if (isset($db_result)): ?>
<h1><?= $db_result ?></h1>
<?php endif ?>
<!-- DATABASE INITIAL SETUP END -->


<div class="row">
	<div class="activation-codes col-md-6 col-sm-6">
		<div class="jumbotron">
			<div class="form">
				<div class="title">
					<h3><strong>Codes Generation Area</strong></h3>
				</div>
				<div class="form-group">
					<label for="formemebertype">Member Type</label>
					<select name="membertype" id="formembertype" class="form-control">
						<option value="admin">Center</option>
						<option value="member">Member</option>
					</select>
				</div>
				<div class="form-group">
					<label for="count">How many codes do you need?</label>
					<select class="form-control" id="count" name="count">
						<?php for ($i=1; $i < 11; $i++) { ?>
							<option value="<?= $i ?>"><?= $i ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class='generate-form-btn' style="text-align: center;">
				<button class="btn btn-lg btn-primary" id="generate-codes">Hit me!</button>
				<span class="info"></span>
			</div>
		</div>
	</div>
</div>


<script>

	$(document).ready(function () {

		$('#generate-codes').click(function () {

			var $membertype = $('#formembertype').val(),
				$count = $('#count').val();

			$.ajax({
				url:"<?= action('CodesController@generateCode') ?>",
				type: 'POST',
				data: {
					membertype : $membertype,
					count : $count,
				},
				beforeSend:function(){
					$('.generate-form-btn').html('<button class="btn btn-lg btn-primary"> Generating codes</button>');

				},
				success:function(result){
				    $('.form').slideUp('fast');
				    $('.generate-form-btn').html('<button class="btn btn-lg btn-primary">' + result + '</button>');
				}
			});

		});
		
	});
	
</script>

<?php require_once Config::get('mlm_config.get_footer'); ?>