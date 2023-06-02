<?php if (!isset($_REQUEST['action'])) {
	$_REQUEST['action'] = 'accueil';
        header('Location: index.php');
}
$action = htmlspecialchars($_REQUEST["action"]); ?>

<?php switch ($action) {
	case "veilletechno":
                include 'vues/devpro/V_veilletechno.php';
                break;
        case "identitepro":
            include 'vues/devpro/V_identitepro.php';
            break;
	default;
		include 'vues/V_devpro.php';
		break;
} ?>