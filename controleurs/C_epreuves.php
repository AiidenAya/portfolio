<?php if (!isset($_REQUEST['action'])) {
	$_REQUEST['action'] = 'accueil';
        header('Location: index.php');
}
$action = htmlspecialchars($_REQUEST["action"]); ?>

<?php switch ($action) {
	case "e4":
                include 'vues/epreuve/V_e4.php';
                
                break;
	case "e5":
                include 'vues/epreuve/V_e5.php';
                
		break;
	default;
		include 'vues/V_epreuves.php';
                
		break;
} ?>