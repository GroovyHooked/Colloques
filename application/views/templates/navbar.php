<header> 
    <div>
        <nav class="navbar w-100 d-flex flex-row justify-content-between">
            <a type="button" class="btn btn-light" href="<?= base_url("/") ?>"><i class="fas fa-home icon-house pr-1"></i>Accueil</a>
            <span class="h6 d-none d-lg-block text-uppercase font-weight-bold">Territoires solidaires en commun</span>
            <button type="button" class="btn btn-success">
                <a class="lien-edition" target="_blank" href="https://www.lalibrairie.com/livres/territoires-solidaires-en-commun_0-7025698_9782708253636.html?ctx=931ffac359ddba5891a69dc8e7b3af5b" >Acheter le livre</a></button>
            <form class="form-inline d-flex flex-row flex-nowrap" action="<?= base_url("/rechercher") ?>" method="GET">
                <p class="title-search d-none d-sm-block">Recherche</p>
                <input type="search" name="search" class="form-control d-none d-sm-block" placeholder="Date, intervenant, titre..." aria-label="Recherche">
                <div class="btn-search btn" id="mobile-search-btn"><i class="fa fa-search"></i></div>
            </form>
        </nav>
    </div>
    <div class="d-sm-none d-block">
		<form class="form-inline d-flex flex-row flex-nowrap" action="<?= base_url("/rechercher") ?>" method="GET">
			<input id="mobile-search-bar" type="search" name="search" class="w-100 form-control" placeholder="Date, intervenant, titre..." aria-label="Recherche">
		</form>
	</div>
</header>
