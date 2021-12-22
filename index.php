 <?php
    require_once 'model/funktionen.inc.php';
    require_once 'model/database.inc.php';
    
    // Aktion bestimmen
    if (isset ($_REQUEST['aktion']))
        $aktion = $_REQUEST['aktion'];
    else
        $aktion = 'zeige_alle';
    
    // LOGIK
    switch($aktion) {
        case 'zeige_alle':
            $adressen = getAdressen();
            break;
    	case "zeige":
        	$eintrag = hole_eintrag($_REQUEST['id']);
    		break;
    	case "neu":
            $eintrag = leerer_eintrag();
        	$aktion = 'formular_anzeigen';
    		break;
    	case "speichere":
            speichere($_POST);
    		break;
    	case "editiere":
        	$eintrag = hole_eintrag($_REQUEST['id']);
        	$aktion = 'formular_anzeigen';
    		break;	
        case "loeschen":
            $eintrag = loeschen($_REQUEST['id']);
            $adressen = getAdressen();
            $aktion = 'zeige_alle';
            break;
    }
    
    // SICHT
    require_once 'view/' . $aktion . '.tpl.html';  
?>