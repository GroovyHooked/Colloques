<?php
if ( ! function_exists('startsWith')) {
	function startsWith($string, $startString)
	{
		$len = strlen($startString);
		return (substr($string, 0, $len) === $startString);
	}
}

$icon_ressource = "" ;
$verbe = "" ;

$type_ressource = $ressource->getType() ;
$link = base_url("/ressource/".$ressource->getId()) ;

if (isset($type_ressource))
{
	if (strtolower($type_ressource) == "son")
	{
		$icon_ressource = "fa fa-music" ;
		$verbe = "Ecouter" ;
	}
	else if (strtolower($type_ressource) == "pdf")
	{
		$icon_ressource = "fa fa-book" ;
		$verbe = "lire" ;
	}
	else if (strtolower($type_ressource) == "image")
	{
		$icon_ressource = "fa fa-image" ;
		$verbe = "Voir" ;
	}
	else if (strtolower($type_ressource) == "texte")
	{
		$icon_ressource = "fa fa-book" ;
		$verbe = "Lire" ;
	}
	else if (strtolower($type_ressource) == "video")
	{
		$icon_ressource = "fas fa-film" ;
		$verbe = "Voir" ;
	}
	else if ($type_ressource == Item::TYPE_LIEN)
	{
		$icon_ressource = "fa fa-link" ;
		$verbe = "Suivre" ;
		$link = $ressource->getUrl() ;
	}
}
?>
<!--Card-->
<div class="card my-2 card-custom">
    <div class="card-body pb-2">
        <h5 class="card-title mb-1 font-weight-bold"><?= $ressource->getName() ?></h5>
        <!--&bull; ci-dessous est le code du point qui sépare la date et le nom de la conférence-->
		<p class="card-text card-custom-infos my-1">2019 &bull; <a href="<?= base_url("conference/".$ressource->getTimelineId()) ?>"><?= $ressource->getTimeline() ?></a></p>
        <p class="card-text card-custom-infos my-1">
			<?php foreach ($ressource->getThematiques() as $key => $value) {
				$tooltip = $value ;
				$link = base_url("/ressource/".$ressource->getId()) ;
				if (startsWith($key, "4")) { // vecteurs
					$tooltip = "4 thématiques (la démocratie, la coopération, le numérique et l’écologie) qui peuvent être des vecteurs du translocalisme des communs (hypothèse posée par les co-organisateurs en amont du colloque)." ;
				}
				else if (startsWith($key, "5")) { // matrices
					$tooltip = "9 types de questionnements sur lesquels s’appuient les liens translocaux et qui ont été repérés tout au long du colloque par les participants : le temps, l’espace, la valeur, les valeurs, les institutions, les savoirs, les altérités, le sensible, les outils de gestion." ;
				}

				?>
				<a href="<?= base_url((startsWith($key, "6") ? "intervenant/" : "thematique/").$key) ?>" class="card-link card-custom-theme m-0" data-toggle="tooltip" title="<?= $tooltip ?>">#<?= $value ?></a>
			<?php } ?>
        </p>
    </div>

    <div class="card-custom-img-block">
		<div style="background-image: url(<?= $url_resources."img/timeline/".$ressource->getTimelineId().".JPG" ?>)" alt="<?= $ressource->getName() ?>" class="card-img card-custom-img"></div>

		<?php if ($type_ressource == "video" && FALSE !== strpos($ressource->getUrl(), "youtube")) { ?>
			<a href="<?= $ressource->getUrl() ?>" target="_blank" class="card-custom-link">
				<i class="fa <?= $icon_ressource ?> card-custom-link-icon"></i>
				<span class="card-custom-link-text">Youtube</span>
			</a>
		<?php } else if ($verbe != "Suivre") { ?>
			<a href="<?= $ressource->getUrl() ?>/download" class="card-custom-link">
				<i class="fa fa-download card-custom-link-icon"></i>
				<span class="card-custom-link-text">Télécharger</span>
			</a>
		<?php } ?>

		<a href="<?= $type_ressource == "lien-externe" ? $ressource->getUrl() : $link ?>" class="card-custom-link" <?= $type_ressource == "lien-externe" ? "target='_blank'" : "" ?>>
            <i class="fa <?= $icon_ressource ?> card-custom-link-icon"></i>
            <span class="card-custom-link-text"><?= $verbe ?></span>
        </a>

    </div>
</div>
<!---->
