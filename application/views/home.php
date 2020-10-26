
<div class="container accueil">
	<div class="pt-5">
		<!--  couverture + résumé  -->
		<div class="accueil__haut mb-lg-5 ">
			<div class="row">
				<div class="col-12 col-lg-6 offset-lg-1 text-center redMarge">
					<img src="<?= base_url("/resources/img/couverture_territoires_solidaires.png") ?>" alt="Couverture du livre" class=" mb-3 border border-dark couverture">

				</div>

				<div class="col-12 col-lg-5 text-center align-self-center d-lg-flex flex-column  align-items-lg-center">
					<div class="row">
						<!--
						<div class="col-12 order-lg-4 mt-3" >
							<button type="button " class="w-100 btn bouton__livre btn-success order-lg-2"><a class="lien-edition"  href="http://www.editionsatelier.com/index.php?page=shop.product_details&flypage=bookshop-flypage.tpl&product_id=816&category_id=47&manufacturer_id=1&option=com_virtuemart&Itemid=1" target="_blank">Acheter sur le site des Éditions de l'Atelier</a></button>
						</div>-->
						<div class="col-12 p-3 descriptif__livre order-lg-1">

							<p>
								La valorisation du colloque «Territoires solidaires en commun : controverse à l’horizon du translocalisme », qui s’est déroulé au Centre culturel de Cerisy du 12 au 19 juillet 2019 ne pouvait prendre la forme classique d’actes de colloque.
							</p>
							<p class="texte__cache">
								Ce colloque s’est construit à partir de tables rondes (TR) dans lesquelles des actrices et des acteurs ont été invité·e·s à raconter quel territoire leurs actions collectives font localement émerger, comment celles-ci construisent des solidarités autour des ressources mises ou produites en commun et, enfin, quels liens les relient à d’autres échelles.
							</p>
							<p>
								Le matériau de base du colloque est en effet constitué de récits d’expériences.
							</p>
							<p class="texte__cache">
								Le pari du colloque a été, pour mieux cerner le translocalisme, de favoriser l’entrecroisement multiple de ces récits et leur mise en perspective lors des moments forts du colloque (les débats publics [DP], les conférences plénières [PL], les tables de controverses). Pour identifier la diversité de ses liens qui s’exprimaient ou apparaissaient, nous avons sollicité l’aide de personnes présentes sur toute la durée du colloque en leur confiant un rôle de «capteurs de liens».
							</p>
							<p>
								La proposition éditoriale associe deux espaces : le livre papier (que nous vous invitons à découvrir, publié par les Éditions de l’Atelier) et ce site compagnon.<br>
								Chacun d’eux propose de raconter des voyages vers un horizon des communs à même d’ouvrir la voie à une transformation globale de nos sociétés.
							</p>
							<p>
								Dans le livre, les organisateurs du colloque racontent comment ces sept jours du 12 au 19 juillet 2019, ont fait événement pour chacun d’entre eux.<br>
								Le site vous offre, lui, la possibilité de construire votre propre voyage, de tracer votre propre itinéraire singulier vers la société des communs.

							</p>
							<p>
								Vous pouvez suivre le <a href="<?= base_url("/timeline") ?>">déroulé chronologique</a> du colloque et faire votre choix d’escales parmi l’ensemble des tables rondes (TR) ou des débats publics (DP). Vous pouvez aussi suivre la pensée d’un·e <a href="<?= base_url("/intervenants") ?>">intervenant·e</a> en particulier. Mais vous avez également la possibilité de partir à la découverte des <a href="<?= base_url("/thematiques") ?>">thématiques abordées</a>
								<span class="texte__cache">  : découvrir les moments où les quatre vecteurs du translocalisme posés en hypothèse (la démocratie, la coopération, le numérique et l’écologie), ou bien vous laisser porter par la matrice de questionnements, de liens et d’idées qui ont été repérés, tout au long du colloque et dans les mois qui ont suivi.</span>
							</p>
							<p>
								Partout, vous pourrez faire des rencontres et vous arrêter pour découvrir l’une des créations spontanées réalisées pendant le colloque <span class="texte__cache"> (les poèmes, la chanson « La Translocale », les annotations post-it, les étonnements, etc.)</span> et manifestant la place essentielle du sensible dans les thèses abordées et les transformations recherchées.
							</p>
							<p class="texte__cache">
								En cohérence avec l’approche des communs, ce site compagnon donne accès libre aux ressources produites par l’ensemble des participant·e·s avant, durant et après ce colloque.
							</p>
							<p>
								N’hésitez pas à nous faire, à votre tour, le récit de votre propre voyage !
							</p>

						</div>

						<div class="col-12 order-lg-4 mt-3">
							<button type="button" class="btn btn-success w-lg-50 w-100 mb-3 py-2" class="savoirPlus">En savoir plus</button>
						</div>

						<div class="col-12 order-lg-4 mt-3" >
							<a href="<?= base_url("/thematique/01-elements-de-mode-demploi") ?>"><button type="button" class="btn btn-primary w-lg-50 w-100 mb-3 py-2">Modes d'emploi du colloque et du site compagnon</button></a>
						</div>
						<div class="col-12 order-lg-5 mt-3">
							<a href="<?= base_url("/timeline") ?>"><button type="button " class="btn btn-primary w-lg-50 w-100 mb-3 py-2">Déroulé de l'événement</button></a>
						</div>
						<div class="col-12 order-lg-4 mt-3" >
							<a href="<?= base_url("/intervenants") ?>"><button type="button" class="btn btn-primary w-lg-50 w-100 mb-3 py-2">Présentation des intervenants</button></a>
						</div>
						<div class="col-12 order-lg-6 mt-3">
							<a href="<?= base_url("/thematiques") ?>"><button type="button " class="btn btn-primary w-lg-50 w-100 mb-3 py-2">Thématiques abordées</button></a>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>


	<script>
		$(document).ready(function() {
			$("button, .descriptif__livre").click(function() {
				//$("span").toggleClass("texte__cache");
				$(".texte__cache").fadeToggle(1500);

			})
		})
	</script>

</div>

