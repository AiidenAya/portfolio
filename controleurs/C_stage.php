<?php if (!isset($_REQUEST['action'])) {
	$_REQUEST['action'] = 'accueil';
        header('Location: index.php');
}
$action = htmlspecialchars($_REQUEST["action"]); ?>

<?php switch ($action) {
	case "annee1":
                include 'vues/stages/V_basemili.php';
                break;
				case "annee2":
					include 'vues/stages/V_henryschein.php';
					break;
	default;
		include 'vues/V_stages.php';
		break;
} ?>