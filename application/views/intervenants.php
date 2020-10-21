<div class="container my-5">
	<div class="row">
		<div class="col-12 my-4">
			<h1 class="title h2 my-2 ml-2 mb-0 custom-title">Présentation des intervenants</h1>
		</div>
	</div>
	<div class="row">
	<?php

	foreach ($intervenants as $key => $value)
	{
	?>
		<div class="col-12 col-md-6 col-lg-4 col-xl-3 ressource-card">
			<?php
			$datas = array();
			$datas["nom_intervenant"] = $value ;
			$datas["id_intervenant"] = $key ;
			$this->load->view('templates/card-intervenant', $datas);
			?>
		</div>
	<?php
	}
	?>
	</div>
</div>


