<div class="container text-center">
	<ul>
	<?php

	foreach ($thematiques as $key => $value)
	{
	?>
		<li><a href="<?= base_url("/thematique/".$key) ?>"><?= $value ?></a></li>
	<?php
	}
	?>
	</ul>
</div>


