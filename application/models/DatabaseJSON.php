<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function remove_accents($string)
{
	if (!preg_match('/[\x80-\xff]/', $string))
		return $string;

	$chars = array(
		// Decompositions for Latin-1 Supplement
		chr(195) . chr(128) => 'A', chr(195) . chr(129) => 'A',
		chr(195) . chr(130) => 'A', chr(195) . chr(131) => 'A',
		chr(195) . chr(132) => 'A', chr(195) . chr(133) => 'A',
		chr(195) . chr(135) => 'C', chr(195) . chr(136) => 'E',
		chr(195) . chr(137) => 'E', chr(195) . chr(138) => 'E',
		chr(195) . chr(139) => 'E', chr(195) . chr(140) => 'I',
		chr(195) . chr(141) => 'I', chr(195) . chr(142) => 'I',
		chr(195) . chr(143) => 'I', chr(195) . chr(145) => 'N',
		chr(195) . chr(146) => 'O', chr(195) . chr(147) => 'O',
		chr(195) . chr(148) => 'O', chr(195) . chr(149) => 'O',
		chr(195) . chr(150) => 'O', chr(195) . chr(153) => 'U',
		chr(195) . chr(154) => 'U', chr(195) . chr(155) => 'U',
		chr(195) . chr(156) => 'U', chr(195) . chr(157) => 'Y',
		chr(195) . chr(159) => 's', chr(195) . chr(160) => 'a',
		chr(195) . chr(161) => 'a', chr(195) . chr(162) => 'a',
		chr(195) . chr(163) => 'a', chr(195) . chr(164) => 'a',
		chr(195) . chr(165) => 'a', chr(195) . chr(167) => 'c',
		chr(195) . chr(168) => 'e', chr(195) . chr(169) => 'e',
		chr(195) . chr(170) => 'e', chr(195) . chr(171) => 'e',
		chr(195) . chr(172) => 'i', chr(195) . chr(173) => 'i',
		chr(195) . chr(174) => 'i', chr(195) . chr(175) => 'i',
		chr(195) . chr(177) => 'n', chr(195) . chr(178) => 'o',
		chr(195) . chr(179) => 'o', chr(195) . chr(180) => 'o',
		chr(195) . chr(181) => 'o', chr(195) . chr(182) => 'o',
		chr(195) . chr(182) => 'o', chr(195) . chr(185) => 'u',
		chr(195) . chr(186) => 'u', chr(195) . chr(187) => 'u',
		chr(195) . chr(188) => 'u', chr(195) . chr(189) => 'y',
		chr(195) . chr(191) => 'y',
		// Decompositions for Latin Extended-A
		chr(196) . chr(128) => 'A', chr(196) . chr(129) => 'a',
		chr(196) . chr(130) => 'A', chr(196) . chr(131) => 'a',
		chr(196) . chr(132) => 'A', chr(196) . chr(133) => 'a',
		chr(196) . chr(134) => 'C', chr(196) . chr(135) => 'c',
		chr(196) . chr(136) => 'C', chr(196) . chr(137) => 'c',
		chr(196) . chr(138) => 'C', chr(196) . chr(139) => 'c',
		chr(196) . chr(140) => 'C', chr(196) . chr(141) => 'c',
		chr(196) . chr(142) => 'D', chr(196) . chr(143) => 'd',
		chr(196) . chr(144) => 'D', chr(196) . chr(145) => 'd',
		chr(196) . chr(146) => 'E', chr(196) . chr(147) => 'e',
		chr(196) . chr(148) => 'E', chr(196) . chr(149) => 'e',
		chr(196) . chr(150) => 'E', chr(196) . chr(151) => 'e',
		chr(196) . chr(152) => 'E', chr(196) . chr(153) => 'e',
		chr(196) . chr(154) => 'E', chr(196) . chr(155) => 'e',
		chr(196) . chr(156) => 'G', chr(196) . chr(157) => 'g',
		chr(196) . chr(158) => 'G', chr(196) . chr(159) => 'g',
		chr(196) . chr(160) => 'G', chr(196) . chr(161) => 'g',
		chr(196) . chr(162) => 'G', chr(196) . chr(163) => 'g',
		chr(196) . chr(164) => 'H', chr(196) . chr(165) => 'h',
		chr(196) . chr(166) => 'H', chr(196) . chr(167) => 'h',
		chr(196) . chr(168) => 'I', chr(196) . chr(169) => 'i',
		chr(196) . chr(170) => 'I', chr(196) . chr(171) => 'i',
		chr(196) . chr(172) => 'I', chr(196) . chr(173) => 'i',
		chr(196) . chr(174) => 'I', chr(196) . chr(175) => 'i',
		chr(196) . chr(176) => 'I', chr(196) . chr(177) => 'i',
		chr(196) . chr(178) => 'IJ', chr(196) . chr(179) => 'ij',
		chr(196) . chr(180) => 'J', chr(196) . chr(181) => 'j',
		chr(196) . chr(182) => 'K', chr(196) . chr(183) => 'k',
		chr(196) . chr(184) => 'k', chr(196) . chr(185) => 'L',
		chr(196) . chr(186) => 'l', chr(196) . chr(187) => 'L',
		chr(196) . chr(188) => 'l', chr(196) . chr(189) => 'L',
		chr(196) . chr(190) => 'l', chr(196) . chr(191) => 'L',
		chr(197) . chr(128) => 'l', chr(197) . chr(129) => 'L',
		chr(197) . chr(130) => 'l', chr(197) . chr(131) => 'N',
		chr(197) . chr(132) => 'n', chr(197) . chr(133) => 'N',
		chr(197) . chr(134) => 'n', chr(197) . chr(135) => 'N',
		chr(197) . chr(136) => 'n', chr(197) . chr(137) => 'N',
		chr(197) . chr(138) => 'n', chr(197) . chr(139) => 'N',
		chr(197) . chr(140) => 'O', chr(197) . chr(141) => 'o',
		chr(197) . chr(142) => 'O', chr(197) . chr(143) => 'o',
		chr(197) . chr(144) => 'O', chr(197) . chr(145) => 'o',
		chr(197) . chr(146) => 'OE', chr(197) . chr(147) => 'oe',
		chr(197) . chr(148) => 'R', chr(197) . chr(149) => 'r',
		chr(197) . chr(150) => 'R', chr(197) . chr(151) => 'r',
		chr(197) . chr(152) => 'R', chr(197) . chr(153) => 'r',
		chr(197) . chr(154) => 'S', chr(197) . chr(155) => 's',
		chr(197) . chr(156) => 'S', chr(197) . chr(157) => 's',
		chr(197) . chr(158) => 'S', chr(197) . chr(159) => 's',
		chr(197) . chr(160) => 'S', chr(197) . chr(161) => 's',
		chr(197) . chr(162) => 'T', chr(197) . chr(163) => 't',
		chr(197) . chr(164) => 'T', chr(197) . chr(165) => 't',
		chr(197) . chr(166) => 'T', chr(197) . chr(167) => 't',
		chr(197) . chr(168) => 'U', chr(197) . chr(169) => 'u',
		chr(197) . chr(170) => 'U', chr(197) . chr(171) => 'u',
		chr(197) . chr(172) => 'U', chr(197) . chr(173) => 'u',
		chr(197) . chr(174) => 'U', chr(197) . chr(175) => 'u',
		chr(197) . chr(176) => 'U', chr(197) . chr(177) => 'u',
		chr(197) . chr(178) => 'U', chr(197) . chr(179) => 'u',
		chr(197) . chr(180) => 'W', chr(197) . chr(181) => 'w',
		chr(197) . chr(182) => 'Y', chr(197) . chr(183) => 'y',
		chr(197) . chr(184) => 'Y', chr(197) . chr(185) => 'Z',
		chr(197) . chr(186) => 'z', chr(197) . chr(187) => 'Z',
		chr(197) . chr(188) => 'z', chr(197) . chr(189) => 'Z',
		chr(197) . chr(190) => 'z', chr(197) . chr(191) => 's'
	);

	$string = strtr($string, $chars);

	return $string;
}
class DatabaseJSON extends CI_Model
{


	private $database ; // la base de données finale et complète
	private $ressources_by_id ; // tableau contenant toutes les ressources indexées par leur id
	private $ressources_by_participants ;// tableau contenant toutes les ressources par contributeur
	private $ressources_by_thematique ;// tableau contenant toutes les ressources d'après une thématique
	private $ressources_by_timeline ;// tableau contenant toutes les ressources appartenant à une timeline/conférence
	private $thematiques_by_timeline ;// tableau contenant toutes les thematiques appartenant à une timeline/conférence
	private $ressources_son ; // tableau contenant toutes les ressources du type son
	private $ressources_pdf ; // tableau contenant toutes les ressources du type pdf
	private $ressources_image ; // tableau contenant toutes les ressources du type image
	private $ressources_lien ; // tableau contenant toutes les ressources du type lien
	private $ressources_video ; // tableau contenant toutes les ressources du type vidéo
	private $thematiques ;  // tableau contenant le guide de toutes les thématiques
	private $timeline ;  // tableau contenant le guide de toutes les conférences /timeline
	private $participants ;  // tableau contenant le guide de tous les contributeurs
	private $table_infos_timeline ; // tableau contenant les infos complémentaires stockées en DB SQL sur les timelines/conférences


	public function __construct($json_filename=null, $json_schema_filename=null)
	{
		parent::__construct();
		if (isset($json_filename) && isset($json_schema_filename))
		{

			// initialisation des tableaux
			$this->database = array() ;
			$this->ressources_son = array() ;
			$this->ressources_pdf = array() ;
			$this->ressources_image = array() ;
			$this->ressources_lien = array() ;
			$this->ressources_video = array() ;
			$this->ressources_texte = array() ;
			$this->thematiques = array() ;
			$this->timeline = array() ;
			$this->ressources_by_id = array() ;
			$this->ressources_by_participants = array() ;
			$this->ressources_by_thematique = array() ;
			$this->ressources_by_timeline = array() ;
			$this->thematiques_by_timeline = array() ;
			$this->participants = array() ;

			/************************************************************
			 * CHARGEMENT DES INFOS SUR LA TIMELINE EN DB MYSQL
			 ************************************************************/
			$timelineDB = new TimelineDB();
			$this->table_infos_timeline = $timelineDB->get_all_timelines() ;

			/************************************************************
			 * ANALYSE DU SCHEMA DE LA BASE DE DONNEES
			 ************************************************************/
			$json_schema = file_get_contents($json_schema_filename);
			$json_schema = rtrim (trim($json_schema), ","); // on modifie le json généré en enelevant le ',' final pour le rendre compatible
			$array_schema = Json::decode($json_schema, TRUE);
			//var_dump($array_schema);

			foreach ($array_schema["schema"]["attributes"] as $item) {
				if ($item["name"] == "thematique")
				{
					foreach ($item["type"]["values"] as $thematique) {
						$titre = $thematique["label"] ;
						$titre = preg_replace('#[0-9]*\.[0-9]*#', '', $titre) ;
						$id = remove_accents($thematique["value"]) ;
						$this->thematiques[$id] = ucfirst(trim($titre)) ;

						// si la thématique commence par "6." alors c'est un contributeur
						if (strpos($titre, "6.") !== false)
						{
							$titre = preg_replace('#[0-9]*\.[0-9]*#', '', $titre) ;
							$this->participants[$id] = trim($titre) ;
						}
					}
				}
				else if ($item["name"] == "timeline")
				{
					foreach ($item["type"]["values"] as $timeline) {
						$titre = $timeline["label"] ;
						$id = remove_accents($timeline["value"]) ;
						$this->timeline[$id] = $titre ;
					}
				}
			}

			/************************************************************
			 * ANALYSE DE LA BASE DE DONNEES
			 ************************************************************/
			$json_data = file_get_contents($json_filename);
			$json_data = str_replace("ISODate(", "", $json_data); // on modifie le json généré pour le rendre compatible
			$json_data = str_replace("\")", "\"", $json_data);
			$array_items = Json::decode($json_data, TRUE);

			foreach ($array_items as $item) {
				$ressource = new Item($item, $this->thematiques, $this->timeline, $this->table_infos_timeline) ;
				array_push($this->database, $ressource);
				$this->ressources_by_id[$ressource->getId()] = $ressource;

				$timeline_id = $ressource->getTimelineId() ;
				if (! isset($this->ressources_by_timeline[$timeline_id]))
				{
					$this->ressources_by_timeline[$timeline_id] = array() ;
				}
				array_push($this->ressources_by_timeline[$timeline_id], $ressource) ;


				foreach ($ressource->getThematiques() as $key => $value) {
					// on recherche dans les thématiques les participants dont la thématique commence par "6."
					if (strpos($key, "6") !== false)
					{
						if (! isset($this->ressources_by_participants[$key]))
						{
							$this->ressources_by_participants[$key] = array() ;
						}
						array_push($this->ressources_by_participants[$key], $ressource) ; // on ajoute la ressource à l'auteur
					}
					if (! isset($this->ressources_by_thematique[$key]))
					{
						$this->ressources_by_thematique[$key] = array() ;
					}
					array_push($this->ressources_by_thematique[$key], $ressource) ; // on ajoute la ressource à la thematique

					$timeline_id = $ressource->getTimelineId() ;
					if (! isset($this->thematiques_by_timeline[$timeline_id]))
					{
						$this->thematiques_by_timeline[$timeline_id] = array() ;
					}
					$thematique = array();
					$thematique["id"] = $key ;
					$thematique["name"] = $value ;
					$this->thematiques_by_timeline[$timeline_id][$key] = $thematique ; // on ajoute la thematique à la timeline
				}


				if ($ressource->getType() == Item::TYPE_SON){
					array_push($this->ressources_son, $ressource) ;
				}
				else if ($ressource->getType() == Item::TYPE_IMAGE){
					array_push($this->ressources_image, $ressource) ;
				}
				else if ($ressource->getType() == Item::TYPE_LIEN){
					array_push($this->ressources_lien, $ressource) ;
				}
				else if ($ressource->getType() == Item::TYPE_PDF){
					array_push($this->ressources_pdf, $ressource) ;
				}
				else if ($ressource->getType() == Item::TYPE_VIDEO){
					array_push($this->ressources_video, $ressource) ;
				}
				else if ($ressource->getType() == Item::TYPE_TEXTE){
					array_push($this->ressources_texte, $ressource) ;
				}
			}


		}

	}


	/***************************************************************
	 * FONCTIONS DE RECHERCHE
	 ***************************************************************/
	public function findResources($thematique=null, $type=null, $keyword=null)
	{
		$results = array() ;
		foreach ($this->database as $ressource) {
			$is_match = true ;
			if (isset($type))
			{
				$is_match &= strtolower($ressource->getType()) == strtolower($type) ;
			}
			if (isset($thematique))
			{
				$found = false ;
				foreach ($ressource->thematiques as $ressource_thematique) {
					if (strpos(strtolower($ressource_thematique), strtolower($thematique)) !== false)
					{
						$found = true ;
					}
				}
				$is_match &= $found  ;
			}
			if (isset($keyword))
			{
				$is_match &= (strpos(strtolower($ressource->getName()." ".$ressource->getDescription()), strtolower($keyword)) !== false)  ;
			}
			if ($is_match)
			{
				array_push($results, $ressource) ;
			}
		}
		return $results ;

	}

	/*********************
	 * @param $keywords_string chaine contenant un ou plusieurs mots clés
	 * @return array tableau de ressources contenant les résultats
	 */
	public function search ($keywords_string)
	{
		$keywords = explode(" ", strtolower(trim(remove_accents($keywords_string)))) ;
		$results = array() ;
		if (count($keywords) > 0)
		{
			foreach ($this->database as $ressource)  // on parcourt toutes les ressources
			{
				$is_match = true ;
				foreach ($keywords as $keyword) // pour chaque ressource on check l'ensemble des mots clés
				{

					if ($keyword != "" && strpos($ressource->getRepresentation(), $keyword) === false)
					{
						$is_match = false ;
					}

				}
				if ($is_match)
				{
					array_push($results, $ressource) ;
				}
			}
		}

		return $results ;
	}


	public function getRessourceById($id)
	{
		return $this->ressources_by_id[$id] ;
	}

	public function  getRessourcesByThematique ($idThematique)
	{
		return $this->ressources_by_thematique[$idThematique] ;
	}

	public function  getRessourcesByTimeline ($idTimeline)
	{
		if (isset($this->ressources_by_timeline[$idTimeline]))
		{
			return $this->ressources_by_timeline[$idTimeline] ;
		}
		else return array() ;
	}

	/***************************************************************************
	 * GETTERS
	 ***************************************************************************/
	public function getDatabase() {
		return $this->database ;
	}

	public function getAllSons() {
		return $this->ressources_son ;
	}

	public function getAllPDFs() {
		return $this->ressources_pdf ;
	}

	public function getAllImages() {
		return $this->ressources_image ;
	}

	public function getAllVideos() {
		return $this->ressources_video ;
	}

	public function getAllLiens() {
		return $this->ressources_lien ;
	}

	public function getThematique ($id)
	{
		return $this->thematiques[$id] ;
	}

	public function getTimeline ($id)
	{
		return $this->timeline[$id] ;
	}

	/**
	 * @return array
	 */
	public function getRessourcesById(): array
	{
		return $this->ressources_by_id;
	}

	/**
	 * @param array $ressources_by_id
	 */
	public function setRessourcesById(array $ressources_by_id): void
	{
		$this->ressources_by_id = $ressources_by_id;
	}

	/**
	 * @return array
	 */
	public function getRessourcesByParticipants(): array
	{
		return $this->ressources_by_participants;
	}

	/**
	 * @param array $ressources_by_participants
	 */
	public function setRessourcesByParticipants(array $ressources_by_participants): void
	{
		$this->ressources_by_participants = $ressources_by_participants;
	}

	/**
	 * @return array
	 */
	public function getRessourcesSon(): array
	{
		return $this->ressources_son;
	}

	/**
	 * @param array $ressources_son
	 */
	public function setRessourcesSon(array $ressources_son): void
	{
		$this->ressources_son = $ressources_son;
	}

	/**
	 * @return array
	 */
	public function getRessourcesPdf(): array
	{
		return $this->ressources_pdf;
	}

	/**
	 * @param array $ressources_pdf
	 */
	public function setRessourcesPdf(array $ressources_pdf): void
	{
		$this->ressources_pdf = $ressources_pdf;
	}

	/**
	 * @return array
	 */
	public function getRessourcesImage(): array
	{
		return $this->ressources_image;
	}

	/**
	 * @param array $ressources_image
	 */
	public function setRessourcesImage(array $ressources_image): void
	{
		$this->ressources_image = $ressources_image;
	}

	/**
	 * @return array
	 */
	public function getRessourcesLien(): array
	{
		return $this->ressources_lien;
	}

	/**
	 * @param array $ressources_lien
	 */
	public function setRessourcesLien(array $ressources_lien): void
	{
		$this->ressources_lien = $ressources_lien;
	}

	/**
	 * @return array
	 */
	public function getRessourcesVideo(): array
	{
		return $this->ressources_video;
	}

	/**
	 * @param array $ressources_video
	 */
	public function setRessourcesVideo(array $ressources_video): void
	{
		$this->ressources_video = $ressources_video;
	}

	/**
	 * @return array
	 */
	public function getThematiques(): array
	{
		return $this->thematiques;
	}

	/**
	 * @param array $thematiques
	 */
	public function setThematiques(array $thematiques): void
	{
		$this->thematiques = $thematiques;
	}

	/**
	 * @return array
	 */
	public function getParticipants(): array
	{
		return $this->participants;
	}

	/**
	 * @param array $participants
	 */
	public function setParticipants(array $participants): void
	{
		$this->participants = $participants;
	}

	/**
	 * @return array
	 */
	public function getThematiquesByTimeline(): array
	{
		return $this->thematiques_by_timeline;
	}

	/**
	 * @param array $thematiques_by_timeline
	 */
	public function setThematiquesByTimeline(array $thematiques_by_timeline): void
	{
		$this->thematiques_by_timeline = $thematiques_by_timeline;
	}

	/**
	 * @return array|null
	 */
	public function getTableInfosTimeline(): ?array
	{
		return $this->table_infos_timeline;
	}

	/**
	 * @param array|null $table_infos_timeline
	 */
	public function setTableInfosTimeline(?array $table_infos_timeline): void
	{
		$this->table_infos_timeline = $table_infos_timeline;
	}



}
