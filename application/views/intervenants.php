<div class="container my-5">
	<div class="row">
		<div class="col-12 my-4">
			<h1 class="title h2 my-2 ml-2 mb-0 custom-title">Intervenants</h1>
		</div>
	</div>
	<ul>
	<?php

	foreach ($intervenants as $key => $value)
	{
	?>
		<li><a href="<?= base_url("/intervenant/".$key) ?>"><?= $value ?></a></li>
	<?php
	}
	?>
	</ul>
</div>


