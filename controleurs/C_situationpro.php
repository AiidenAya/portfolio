<?php if (!isset($_REQUEST['action'])) {
	$_REQUEST['action'] = 'accueil';
        header('Location: index.php');
}
$action = htmlspecialchars($_REQUEST["action"]); ?>

<?php switch ($action) {
	case "startdev":
		include 'vues/situation_pro/V_startdev.php';
		break;
	case "barec":
        include 'vues/situation_pro/V_barec.php';
		break;
	case "epoka":
		include 'vues/situation_pro/V_epoka.php';
		break;
	default;
		include 'vues/situation_pro/V_situationpro.php';
                
		break;
} ?>