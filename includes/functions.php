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
    		echo 'Pan_Tang';
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
    		echo 'Désert_de_Larmes';
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
    		echo 'Ile_des_Cités_Pourpres';
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
            return '-1D6';
           // define('bodaM', '-1D6');
    		break;
    	case 17: 
    	case 18: 
    	case 19: 
    	case 20: 
    	case 21: 
    	case 22: 
    	case 23: 
    	case 24:
            return 'aucun bonus';
            //define('bodaM', 'aucun bonus');
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
            return '+1D6';
            //define('bodaM', '+1D6');
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
            return '+2D6';
            //define('bodaM', '+2D6');
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
    		return '-1D4';
    		break;
    	case 17: 
    	case 18: 
    	case 19: 
    	case 20: 
    	case 21: 
    	case 22: 
    	case 23: 
    	case 24:
    		return 'aucun bonus';
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
    		return '+1D4';
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
    		return '+2D4';
    		break;
	}
}
function SetAFLI($number){
    
	switch ($number) {
		case 1:
		return 'Cataracte, à moitié aveugle';
    		break;
    	case 2:
    	return 'Une oreille en moins, la compétence Ecouter est divisée par deux';
    		break;
    	case 3:
    	return 'Muet ou la langue tranchée';
    		break;
    	case 4: 
    	return 'Un oeil en moins';
    		break;
    	case 5:
    	return 'Plus de nez';
    		break;
    	case 6: 
    	return 'Dents totalement pourries, mauvaise haleine';
    		break;
    	case 7: 
    	return 'Plaies ouvertes';
    		break;
    	case 8: 
    	return 'Lépreux';
    		break;
    	case 9: 
    	return 'Hémophile';
    		break;
		case 10: 
		return 'Scorbuteux';
    		break;
    	case 11: 
    	$z = rand(1,4);
    	return $z.'doigts en moins';
    		break;
    	case 12: 
    	return 'Amputé d\'une main';
    		break;
    	case 13: 
    	return 'Amputé d\'un pied';
    		break;
    	case 14: 
    	return 'Amputé d\'un bras';
    		break;
    	case 15: 
    	return 'Amputé d\'une jambe';
    		break;
    	case 16:
    	return 'Amputé d\'un et bras et d\'une jambe';
    		break;
    	case 17: 
    	return 'Chauve et galeux';
    		break;
    	case 18: 
    	return 'Obèse';
    		break;
    	case 19: 
    	return 'Squelette vivant (maigre au dernier degré)';
    		break;
    	case 20: 
    	return 'Attardé mental (ôtez 1D4 points à l\'INT)';
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
            return 'Guerrier';
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
            $test =rand(1,10);
            switch ($test) {
                case 1:
                case 2:
                case 3:
                case 4: 
                case 5:
                case 6: 
                case 7: 
                    return 'Marchand';
                    break;
                case 8: 
                case 9: 
                case 10: 
                    return 'Négociant';
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
            $test =rand(1,10);
            switch ($test) {
                case 1:
                case 2:
                case 3:
                case 4: 
                case 5:
                case 6: 
                case 7: 
                case 8: 
                    return 'Marin';
                    break;
                case 9: 
                    return 'Second';
                    break;
                case 10: 
                    return 'Capitaine';
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
            return 'Chasseur';
            break;
        case 61: 
        case 62: 
        case 63: 
        case 64: 
        case 65: 
            return 'Fermier';
            break;
        case 66: 
        case 67: 
        case 68: 
        case 69: 
        case 70: 
            return 'Prêtre';
            break;
        case 71: 
        case 72: 
        case 73: 
        case 74: 
        case 75: 
            return 'Noble';
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
            return 'Voleur';
            break;
        case 86: 
        case 87: 
        case 88: 
        case 89: 
        case 90: 
            return 'Mendiant';
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
            return 'Artisan';
            break;
    }
}
?>
