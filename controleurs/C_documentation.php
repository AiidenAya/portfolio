<?php if (!isset($_REQUEST['action'])) {
	$_REQUEST['action'] = 'accueil';
        header('Location: index.php');
}
$action = htmlspecialchars($_REQUEST["action"]); ?>

<?php switch ($action) {
	case "windows":
                include 'vues/documentation/V_windows.php';
                break;
	default;
		include 'vues/V_documentation.php';
		break;
} ?>