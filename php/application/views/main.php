<?php
$this->load->view('inc/header');
?>
<body>
	<div data-ng-app>
		<div data-ng-controller="GoTaxiCtrl">

			<div class="container">

				<span id="debug"></span>
				<button data-ng-click="getCoordinates()">Get Coordinates</button>
			</div>

		</div>
	</div>

<?php
$this->load->view('inc/footer');
?>