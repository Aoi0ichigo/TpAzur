
<?php
include("vues/v_entete.php") ;
    session_start();
    if(!isset($_REQUEST['action']))
        $action = 'accueil';
    else
        $action = $_REQUEST['action'];

    // vue qui cr�e l'en-t�te de la page


    switch($action)
    {
        case 'accueil':
              // vue qui cr�e le contenu de la page d'accueil
            include("vues/v_accueil.php");
            break;
        case 'voirResa':
              // vue qui cr�e le contenu de la page 
            include("modele/fonctions.php");
            $reservations = getLesResa();
            include("vues/v_reservation.php");
            break;
        case 'voirVols':
              // vue qui cr�e le contenu de la page
              // vue qui cr�e le contenu de la page
            include("modele/fonctions.php");
            $lesVols = getLesVols();
            include("vues/v_vols.php");
            break;
        case 'faireResa':
            include("modele/fonctions.php");
            $numero = reserverVol();
            include ("vues/v_formulaireReservation.php");
            break;
        case 'valideResa':
            include("vues/v_valideResa.php");
            break;
    }

    // vue qui cr�e le pied de page
    include("vues/v_pied.php") ;
?>