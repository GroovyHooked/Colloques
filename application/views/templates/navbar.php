<header> 
    <div>
        <nav class="navbar w-100 d-flex flex-row justify-content-between">
            <button type="button" class="btn btn-light" href=""><i class="fas fa-home icon-house"></i>Accueil</button>
            <span class="h6 d-none d-lg-block text-uppercase font-weight-bold">Territoire solidaire en commun</span>
            <button type="button" class="btn btn-success">
                <a class= "lien-edition" href="http://www.editionsatelier.com/index.php?page=shop.product_details&flypage=bookshop-flypage.tpl&product_id=816&category_id=47&manufacturer_id=1&option=com_virtuemart&Itemid=1" >Acheter le livre</a></button>
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
