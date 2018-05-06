<?php $this->load->view('header'); ?>
<body class="bg-light">

	<div class="container">
		<div class="py-5 text-center">
			<h2>Download OpenSRP Mahery Data</h2>
			<p class="lead">Choose the village from dropdown and click download button.</p>
		</div>

		<div class="row justify-content-md-center">
			<div class="col-6 text-center">
				<form class="card p-2">
					<div class="form-group">
						<label for="village">Village</label>
						<select class="form-control form-control-lg" id="village">
							<option>Antaravato</option>
							<option>Maintambato</option>
							<option>Vinanibe</option>
							<option>Marofototra</option>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Download</button>
				</form>
			</div>
		</div>
		<hr>
		<?php $this->load->view('footer'); ?>