<?php require_once Config::get('mlm_config.get_header'); ?>

<!-- DATABASE INITIAL SETUP -->
<?php if (isset($db_result)): ?>
<h1><?= $db_result ?></h1>
<?php endif ?>
<!-- DATABASE INITIAL SETUP END -->


<div class="row">
	<div class="activation-codes col-md-4 col-sm-6">
		<button class="btn btn-lg btn-primary">Generate Codes</button>
		<div class="form">
			<div class="form-group">
				<label for="formemebertype">Member Type</label>
				<input type="text" class="form-control" id="formembertype" name="membertype">
			</div>
		</div>
	</div>
</div>






































<?php require_once Config::get('mlm_config.get_footer'); ?>