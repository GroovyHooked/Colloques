<div class="card my-2 card-custom">
	<a href="<?= base_url("/intervenant/".$id_intervenant) ?>">
		<div style="background-image: url(<?= $url_resources. "img/intervenants/".$id_intervenant.".JPG" ?>)" alt="<?= $nom_intervenant ?>"
			class="card-img card-custom-img card-custom-img-intervenant">

		</div>
	</a>
    <div class="card-body pb-2">
        <h5 class="card-title mb-2 font-weight-bold text-center">
            <a href="<?= base_url("/intervenant/".$id_intervenant) ?>"><?= $nom_intervenant  ?></a>
        </h5>
    </div>
</div>
