<?php
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
}
function SetNationality($number){
	switch ($number) {
    	case 1:
    	case 2:
    	    echo 'Melniboné';
    		break;
    	case 3:
    	case 4: 
    	case 5:
    		echo 'Pan Tang';
    		break;
    	case 6: 
    	case 7: 
    	case 8: 
    		echo 'Myrrhyn';
    		break;
    	case 9: 
		case 10: 
    	case 11: 
    	case 12: 
    		echo 'Dharijor';
    		break;
    	case 13: 
    	case 14: 
    	case 15: 
    	case 16:
    		echo 'Jharkor';
    		break; 
    	case 17: 
    	case 18: 
    	case 19: 
    	case 20: 
    	case 21: 
    	case 22: 
    	case 23: 
    	case 24:
    		echo 'Shazaar';
    		break; 
    	case 25: 
    	case 26: 
    	case 27: 
    	case 28: 
    	case 29: 
    		echo 'Tarkesh';
    		break;
    	case 30: 
    	case 31: 
    	case 32: 
    	case 33: 
    	case 34: 
    	case 35: 
		case 36: 
    	case 37: 
    		echo 'Vilmir';
    		break;
    	case 38: 
    	case 39: 
    	case 40: 
    	case 41: 
    	case 42: 
    	case 43: 
    	case 44:
    		echo 'Ilmiora';
    		break; 
    	case 45: 
    	case 46: 
    	case 47: 
    	case 48: 
    	case 49: 
    		echo 'Nadsokor';
    		break;
    	case 50: 
    	case 51: 
    	case 52: 
    	case 53: 
    	case 54: 
    	case 55: 
    	case 56:
    		echo 'Désert de Larmes';
    		break; 
    	case 57: 
    	case 58: 
    	case 59: 
    	case 60: 
    		echo 'Eshmir';
    		break;
    	case 61: 
		case 62: 
    	case 63: 
    	case 64: 
    	case 65: 
    	case 66: 
    	case 67: 
    		echo 'Ile des Cités Pourpres';
    		break;
    	case 68: 
    	case 69: 
    	case 70: 
    	case 71: 
    	case 72: 
    	case 73: 
    	case 74:
    		echo 'Argimiliar';
    		break; 
    	case 75: 
    	case 76: 
    	case 77: 
    	case 78: 
    	case 79: 
    	case 80: 
    	case 81:
    		echo 'Pikarayd';
    		break;
    	case 82: 
		case 83: 
    	case 84: 
    	case 85: 
    	case 86: 
    	case 87: 
    	case 88:
    		echo 'Lormyr';
    		break; 
    	case 89: 
    	case 90: 
    	case 91: 
    	case 92: 
    	case 93: 
    	case 94: 
    	case 95: 
    		echo 'Filkhar';
    		break;
    	case 96: 
    	case 97: 
    		echo 'Oin';
    		break;
    	case 98: 
    	case 99: 
    		echo 'Yu';
    		break;
    	case 100: 
    		echo 'Org';
    		break;
	}
}

function SetBonusDamageM($number){
	switch ($number) {
		case 1:
    	case 2:
    	case 3:
    	case 4: 
    	case 5:
    	case 6: 
    	case 7: 
    	case 8: 
    	case 9: 
		case 10: 
    	case 11: 
    	case 12: 
    	case 13: 
    	case 14: 
    	case 15: 
    	case 16:
    		echo '-1D6';
    		break;
    	case 17: 
    	case 18: 
    	case 19: 
    	case 20: 
    	case 21: 
    	case 22: 
    	case 23: 
    	case 24:
    		echo 'aucun bonus';
    		break;
    	case 25: 
    	case 26: 
    	case 27: 
    	case 28: 
    	case 29: 
    	case 30: 
    	case 31: 
    	case 32: 
    	case 33: 
    	case 34: 
    	case 35: 
		case 36: 
    	case 37: 
    	case 38: 
    	case 39: 
    	case 40: 
    		echo '+1D6';
    		break;
    	case 41: 
    	case 42: 
    	case 43: 
    	case 44:
    	case 45: 
    	case 46: 
    	case 47: 
    	case 48: 
    	case 49: 
    	case 50:
    		echo '+2D6';
    		break;
	}
}
function SetBonusDamageT($number){
	switch ($number) {
		case 1:
    	case 2:
    	case 3:
    	case 4: 
    	case 5:
    	case 6: 
    	case 7: 
    	case 8: 
    	case 9: 
		case 10: 
    	case 11: 
    	case 12: 
    	case 13: 
    	case 14: 
    	case 15: 
    	case 16:
    		echo '-1D4';
    		break;
    	case 17: 
    	case 18: 
    	case 19: 
    	case 20: 
    	case 21: 
    	case 22: 
    	case 23: 
    	case 24:
    		echo 'aucun bonus';
    		break;
    	case 25: 
    	case 26: 
    	case 27: 
    	case 28: 
    	case 29: 
    	case 30: 
    	case 31: 
    	case 32: 
    	case 33: 
    	case 34: 
    	case 35: 
		case 36: 
    	case 37: 
    	case 38: 
    	case 39: 
    	case 40: 
    		echo '+1D4';
    		break;
    	case 41: 
    	case 42: 
    	case 43: 
    	case 44:
    	case 45: 
    	case 46: 
    	case 47: 
    	case 48: 
    	case 49: 
    	case 50:
    		echo '+2D4';
    		break;
	}
}
function SetAFLI($number){
    
	switch ($number) {
		case 1:
		echo 'Cataracte, à moitié aveugle';
    		break;
    	case 2:
    	echo 'Une oreille en moins, la compétence Ecouter est divisée par deux';
    		break;
    	case 3:
    	echo 'Muet ou la langue tranchée';
    		break;
    	case 4: 
    	echo 'Un oeil en moins';
    		break;
    	case 5:
    	echo 'Plus de nez';
    		break;
    	case 6: 
    	echo 'Dents totalement pourries, mauvaise haleine';
    		break;
    	case 7: 
    	echo 'Plaies ouvertes';
    		break;
    	case 8: 
    	echo 'Lépreux';
    		break;
    	case 9: 
    	echo 'Hémophile';
    		break;
		case 10: 
		echo 'Scorbuteux';
    		break;
    	case 11: 
    	$z = rand(1,4);
    	echo $z.'doigts en moins';
    		break;
    	case 12: 
    	echo 'Amputé d\'une main';
    		break;
    	case 13: 
    	echo 'Amputé d\'un pied';
    		break;
    	case 14: 
    	echo 'Amputé d\'un bras';
    		break;
    	case 15: 
    	echo 'Amputé d\'une jambe';
    		break;
    	case 16:
    	echo 'Amputé d\'un et bras et d\'une jambe';
    		break;
    	case 17: 
    	echo 'Chauve et galeux';
    		break;
    	case 18: 
    	echo 'Obèse';
    		break;
    	case 19: 
    	echo 'Squelette vivant (maigre au dernier degré)';
    		break;
    	case 20: 
    	echo 'Attardé mental (ôtez 1D4 points à l\'INT)';
    		break;
	}
}
function SetClass($number){
    switch ($number) {
        case 1:
        case 2:
        case 3:
        case 4: 
        case 5:
        case 6: 
        case 7: 
        case 8: 
        case 9: 
        case 10: 
        case 11: 
        case 12: 
        case 13: 
        case 14: 
        case 15: 
        case 16;
        case 17: 
        case 18: 
        case 19: 
        case 20: 
            echo 'Guerrier';
            break;
        case 21: 
        case 22: 
        case 23: 
        case 24:
        case 25: 
        case 26: 
        case 27: 
        case 28: 
        case 29: 
        case 30:
            switch ($number) {
                case 1:
                case 2:
                case 3:
                case 4: 
                case 5:
                case 6: 
                case 7: 
                    echo 'Marchand';
                    break;
                case 8: 
                case 9: 
                case 10: 
                    echo 'Negociant';
                    break;
            }
            break; 
        case 31: 
        case 32: 
        case 33: 
        case 34: 
        case 35: 
        case 36: 
        case 37: 
        case 38: 
        case 39: 
        case 40: 
        case 41: 
        case 42: 
        case 43: 
        case 44:
        case 45:
            switch ($number) {
                case 1:
                case 2:
                case 3:
                case 4: 
                case 5:
                case 6: 
                case 7: 
                case 8: 
                    echo 'MArin';
                    break;
                case 9: 
                    echo 'Second';
                    break;
                case 10: 
                    echo 'Capitaine';
                    break;
            }

            break; 
        case 46: 
        case 47: 
        case 48: 
        case 49: 
        case 50:
        case 51: 
        case 52: 
        case 53: 
        case 54: 
        case 55: 
        case 56:
        case 57: 
        case 58: 
        case 59: 
        case 60: 
            echo 'Chasseur';
            break;
        case 61: 
        case 62: 
        case 63: 
        case 64: 
        case 65: 
            echo 'Fermier';
            break;
        case 66: 
        case 67: 
        case 68: 
        case 69: 
        case 70: 
            echo 'Prêtre';
            break;
        case 71: 
        case 72: 
        case 73: 
        case 74: 
        case 75: 
            echo 'Noble';
            break;
        case 76: 
        case 77: 
        case 78: 
        case 79: 
        case 80: 
        case 81:
        case 82: 
        case 83: 
        case 84: 
        case 85: 
            echo 'Voleur';
            break;
        case 86: 
        case 87: 
        case 88: 
        case 89: 
        case 90: 
            echo 'Mendiant';
            break;
        case 91: 
        case 92: 
        case 93: 
        case 94: 
        case 95: 
        case 96: 
        case 97: 
        case 98: 
        case 99: 
        case 100: 
            echo 'Artisan';
            break;
    }
}
?>
