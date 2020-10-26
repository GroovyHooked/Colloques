<?php
function startsWith ($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
?>

<div class="container text-center pt-3">
	<div class="row">
		<div class="col-12 my-4">
			<h1 class="title h2 my-2 ml-2 mb-0 custom-title">Thématiques abordées</h1>
		</div>
	</div>
	<div id="accordion" class="row">

		<h5 class="mb-2 col-12">
			<a href="<?= base_url("/thematique/01-elements-de-mode-demploi") ?>">
				<button class="btn btn-primary col-12 col-md-6" data-toggle="" data-target="" aria-expanded="true" aria-controls="">
				Éléments de mode d'emploi du colloque et du site compagnon
				</button>
			</a>
		</h5>

		<h5 class="mb-2 col-12">
			<a href="<?= base_url("/thematique/02-ecoute-integrale") ?>">
				<button class="btn btn-primary col-12 col-md-6" data-toggle="" data-target="" aria-expanded="false" aria-controls="">
					Écoute intégrale des séances
				</button>
			</a>
		</h5>


		<div class="mb-2 col-12">
			<div class="" id="heading3">
				<h5 class="mb-0">
					<button class="btn btn-primary collapsed col-12 col-md-6" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
						Liens avec le livre &#x25BC;
					</button>
				</h5>
			</div>
			<div id="collapse3" class="collapse" aria-labelledby="heading3">
				<div class="card-body">
						<?php

						foreach ($thematiques as $key => $value)
						{
							if (startsWith($key, "1")) { ?>
							<p><a href="<?= base_url("/thematique/".$key) ?>"><?= $value ?></a></p>
							<?php }
						}
						?>
				</div>
			</div>
		</div>


		<h5 class="mb-2 col-12">
			<a href="<?= base_url("/thematique/16poemes") ?>">
				<button class="btn btn-primary col-12 col-md-6" data-toggle="" data-target="" aria-expanded="false" aria-controls="">
					Poèmes de Jacques Jouet
				</button>
			</a>
		</h5>

		<div class="mb-2 col-12">
			<div class="" id="heading5">
				<h5 class="mb-0">
					<button class="btn btn-primary collapsed col-12 col-md-6" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
						Les territoires solidaires &#x25BC;
					</button>
				</h5>
			</div>
			<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
				<div class="card-body">
					<?php

					foreach ($thematiques as $key => $value)
					{
						if (startsWith($key, "2")) { ?>
							<p><a href="<?= base_url("/thematique/".$key) ?>"><?= $value ?></a></p>
						<?php }
					}
					?>
				</div>
			</div>
		</div>

		<h5 class="mb-2 col-12">
			<a href="<?= base_url("/thematique/31approchesdescommuns") ?>">
				<button class="btn btn-primary col-12 col-md-6" data-toggle="" data-target="" aria-expanded="false" aria-controls="">
				Approches des communs
				</button>
			</a>
		</h5>

		<h5 class="mb-2 col-12">
			<a href="<?= base_url("/thematique/32approchesdelasolidarite") ?>">
				<button class="btn btn-primary col-12 col-md-6" data-toggle="" data-target="" aria-expanded="false" aria-controls="">
				Approches de la solidarité
				</button>
			</a>
		</h5>

		<h5 class="mb-2 col-12">
			<a href="<?= base_url("/thematique/33translocalisme") ?>">
				<button class="btn btn-primary col-12 col-md-6" data-toggle="" data-target="" aria-expanded="false" aria-controls="">
				Approches du translocalisme
				</button>
			</a>
		</h5>


		<div class="mb-2 col-12">
			<div class="" id="heading9">
				<h5 class="mb-0">
					<button class="btn btn-primary collapsed col-12 col-md-6" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
						Les vecteurs du translocalisme &#x25BC;
					</button>
				</h5>
			</div>
			<div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
				<div class="card-body">
					<?php

					foreach ($thematiques as $key => $value)
					{
						if (startsWith($key, "4")) { ?>
							<p><a href="<?= base_url("/thematique/".$key) ?>"><?= $value ?></a></p>
						<?php }
					}
					?>
				</div>
			</div>
		</div>

		<div class="mb-2 col-12">
			<div class="" id="heading10">
				<h5 class="mb-0">
					<button class="btn btn-primary collapsed col-12 col-md-6" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
						La Matrice des liens repérés pendant le colloque &#x25BC;
					</button>
				</h5>
			</div>
			<div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
				<div class="card-body">
					<?php

					foreach ($thematiques as $key => $value)
					{
						if (startsWith($key, "5")) { ?>
							<p><a href="<?= base_url("/thematique/".$key) ?>"><?= $value ?></a></p>
						<?php }
					}
					?>
				</div>
			</div>
		</div>


		<h5 class="mb-2 col-12">
			<a href="<?= base_url("/intervenants") ?>">
				<button class="btn btn-primary col-12 col-md-6" data-toggle="" data-target="" aria-expanded="false" aria-controls="">
				Les intervenants
				</button>
			</a>
		</h5>
	</div>
</div>


