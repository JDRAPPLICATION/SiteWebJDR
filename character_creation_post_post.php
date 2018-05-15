<?php 
	include("debut.php");
	include("includes/identifiants.php");
$_SESSION['CU'] = $_POST['cult'];

if (isset($_POST['class'])) {
	$_SESSION['CS1']=$_POST['class'];
	$_SESSION['CS3']=1;
	$_SESSION['CS2']=1;
}

if ($_SESSION['CS1'] != 1) {
	switch ($_SESSION['CS1']) {
        case 'Guerrier':
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 50;
        	$_SESSION['A1p'] = $_SESSION['A1p'] + 50;
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 40;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 40;
        	$_SESSION['A3a'] = $_SESSION['A3a'] + 30;
        	$_SESSION['A3p'] = $_SESSION['A3p'] + 30;
        	$test = rand(1,100);
        	if ($test <= 60) {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
        	}else {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 25;
        	}
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
        	?>

        	<?php
        case 'Assassin':
        	$_SESSION['CS1']=3;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 50;
        	$_SESSION['A1p'] = $_SESSION['A1p'] + 50;
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 40;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 40;
        	$_SESSION['A3a'] = $_SESSION['A3a'] + 30;
        	$_SESSION['A3p'] = $_SESSION['A3p'] + 30;
        	$test = rand(1,100);
        	if ($test <= 60) {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
        	}else {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] +25;
        	}
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
        	$_SESSION['CONdesPOI'] = $_SESSION['CONdesPOI'] +30;
        	$_SESSION['CHER'] = $_SESSION['CHER'] +25;
        	$_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
        	$_SESSION['SCA'] = $_SESSION['SCA'] +40;
        	$_SESSION['EMB'] = $_SESSION['EMB'] +50;
        	$_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
        case 'Marchand':
        	$_SESSION['CS1']=4;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 20;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 20;
        	$_SESSION['LC'] =$_SESSION['LC'] +70;
        	$_SESSION['PERSU'] =$_SESSION['PERSU'] +50;
        	$_SESSION['CRE'] =$_SESSION['CRE'] +40;
        	$_SESSION['EVaT'] =$_SESSION['EVaT'] +80;
        	$_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Négociant': 
        	$_SESSION['CS1']=5;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 40;
        	$_SESSION['LC'] = $_SESSION['LC'] +70;
        	$_SESSION['PERSU'] = $_SESSION['PERSU'] +50;
        	$_SESSION['CRE'] = $_SESSION['CRE'] +40;
        	$_SESSION['EVaT'] = $_SESSION['EVaT'] +80;
        	$_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Marin':
        	$_SESSION['CS1']=6;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 40;
        	$_SESSION['NAG'] = $_SESSION['NAG'] +50;
        	$_SESSION['FNE'] = $_SESSION['FNE'] +50;
        	$_SESSION['GRI'] = $_SESSION['GRI'] +50;
        	$_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +50;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'] ;
        case 'Second':
        	$_SESSION['CS1']=7; 
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 42;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 42;;
        	$_SESSION['NAG'] = $_SESSION['NAG'] +53;
        	$_SESSION['FNE'] = $_SESSION['FNE'] +74;
        	$_SESSION['GRI'] = $_SESSION['GRI'] +42;
        	$_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +53;
        	$_SESSION['money']= $_SESSION['money'] + (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Capitaine': 
        	$_SESSION['CS1']=8;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 44;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 44;
        	$_SESSION['NAG'] = $_SESSION['NAG'] +53;
        	$_SESSION['FNE'] = $_SESSION['FNE'] +77;
        	$_SESSION['GRI'] = $_SESSION['GRI'] +44;
        	$_SESSION['EQUILI'] = $_SESSION['EQUILI'] +53;
        	$_SESSION['money']= (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Chasseur': 
        	$_SESSION['CS1']=9;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 30;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 30;
        	$_SESSION['FPI'] =  $_SESSION['FPI'] +44;
        	$_SESSION['EMB'] = $_SESSION['EMB'] +50;
        	$_SESSION['PIST'] =$_SESSION['PIST'] +50;
        	$_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100);
        case 'Fermier': 
        	$_SESSION['CS1']=10;
        	$_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
        	$_SESSION['PIST'] =$_SESSION['PIST'] +20;
        	$_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +20;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'];
        case 'Prêtre':
        	$_SESSION['CS1']=11;
        	$_SESSION['LC'] = $_SESSION['LC'] +80;
        	$_SESSION['BM'] =$_SESSION['BM'] +60;
        	$_SESSION['HM'] =$_SESSION['HM'] +40;
        	$_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +40;
        	$_SESSION['PS'] =$_SESSION['PS'] +40;
        	$_SESSION['PERSU'] =$_SESSION['PERSU'] +25;
        	$_SESSION['CRE'] =$_SESSION['CRE'] +25;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100);
        	$_SESSION['ELAN'] = $_SESSION['ELAN'] + rand(1,6) + rand(1,6);
        case 'Noble': 
        	$_SESSION['CS1']=12;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 20;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 20;
        	$_SESSION['CRE'] = $_SESSION['boCOMM'] + $_SESSION['CRE'] +40;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100)*100;
        case 'Voleur': 
        	$_SESSION['CS1']=13;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 35;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 35;
        	$_SESSION['LC'] =  $_SESSION['LC'] +25;
        	$_SESSION['GRI'] =  rand(1,100) + $_SESSION['GRI'];
        	$_SESSION['SAU'] = rand(1,100) + $_SESSION['SAU'];
        	$_SESSION['CRO'] = rand(1,100) + $_SESSION['CRO'];
        	$_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
        	$_SESSION['VOIR'] = rand(1,100) + $_SESSION['VOIR'];
        	$_SESSION['CHER'] = rand(1,100) + $_SESSION['CHER'];
        	$_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
        	$_SESSION['COUBOU'] = rand(1,100) + $_SESSION['COUBOU'];
        	$_SESSION['EVaT'] = $_SESSION['EVaT'] +50;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) ;
        case 'Mendiant': 
        	$_SESSION['CS1']=14;
        	$_SESSION['PERSU'] =$_SESSION['PERSU'] +60;
        	$_SESSION['VOIR'] = $_SESSION['VOIR'] + 60;
        	$_SESSION['CHER'] = $_SESSION['CHER'] + 25;
        	$_SESSION['CRO'] = $_SESSION['CRO'] + 50;
        	$number = rand(1,20);
        	$_SESSION['AFLI'] = $_SESSION['AFLI'] +SetAFLI($number);
        	if ($number == 20) {
        		$_SESSION['INT'] = $_SESSION['INT'] - rand(1,4);
        	}
        	$_SESSION['money']= $_SESSION['money'] + rand(1,6);
        case 'Artisan':
        	$_SESSION['CS1']=15;
        	$_SESSION['boMAN'] = $_SESSION['boMAN'] +70;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + rand(1,100);
        	$_SESSION['A1p'] = $_SESSION['A1a'] + rand(1,100);
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 15;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 15;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['DEX'];
	}
}
if ($_SESSION['CS2'] != 1) {
	switch ($_SESSION['CS2']) {
        case 'Guerrier':
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 50;
        	$_SESSION['A1p'] = $_SESSION['A1p'] + 50;
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 40;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 40;
        	$_SESSION['A3a'] = $_SESSION['A3a'] + 30;
        	$_SESSION['A3p'] = $_SESSION['A3p'] + 30;
        	$test = rand(1,100);
        	if ($test <= 60) {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
        	}else {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 25;
        	}
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
        case 'Assassin':
        	$_SESSION['CS2']=3;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 50;
        	$_SESSION['A1p'] = $_SESSION['A1p'] + 50;
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 40;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 40;
        	$_SESSION['A3a'] = $_SESSION['A3a'] + 30;
        	$_SESSION['A3p'] = $_SESSION['A3p'] + 30;
        	$test = rand(1,100);
        	if ($test <= 60) {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
        	}else {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] +25;
        	}
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
        	$_SESSION['CONdesPOI'] = $_SESSION['CONdesPOI'] +30;
        	$_SESSION['CHER'] = $_SESSION['CHER'] +25;
        	$_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
        	$_SESSION['SCA'] = $_SESSION['SCA'] +40;
        	$_SESSION['EMB'] = $_SESSION['EMB'] +50;
        	$_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
        case 'Marchand':
        	$_SESSION['CS2']=4;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 20;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 20;
        	$_SESSION['LC'] =$_SESSION['LC'] +70;
        	$_SESSION['PERSU'] =$_SESSION['PERSU'] +50;
        	$_SESSION['CRE'] =$_SESSION['CRE'] +40;
        	$_SESSION['EVaT'] =$_SESSION['EVaT'] +80;
        	$_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Négociant': 
        	$_SESSION['CS2']=5;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 40;
        	$_SESSION['LC'] = $_SESSION['LC'] +70;
        	$_SESSION['PERSU'] = $_SESSION['PERSU'] +50;
        	$_SESSION['CRE'] = $_SESSION['CRE'] +40;
        	$_SESSION['EVaT'] = $_SESSION['EVaT'] +80;
        	$_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Marin':
        	$_SESSION['CS2']=6;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 40;
        	$_SESSION['NAG'] = $_SESSION['NAG'] +50;
        	$_SESSION['FNE'] = $_SESSION['FNE'] +50;
        	$_SESSION['GRI'] = $_SESSION['GRI'] +50;
        	$_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +50;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'] ;
        case 'Second':
        	$_SESSION['CS2']=7; 
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 42;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 42;;
        	$_SESSION['NAG'] = $_SESSION['NAG'] +53;
        	$_SESSION['FNE'] = $_SESSION['FNE'] +74;
        	$_SESSION['GRI'] = $_SESSION['GRI'] +42;
        	$_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +53;
        	$_SESSION['money']= $_SESSION['money'] + (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Capitaine': 
        	$_SESSION['CS2']=8;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 44;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 44;
        	$_SESSION['NAG'] = $_SESSION['NAG'] +53;
        	$_SESSION['FNE'] = $_SESSION['FNE'] +77;
        	$_SESSION['GRI'] = $_SESSION['GRI'] +44;
        	$_SESSION['EQUILI'] = $_SESSION['EQUILI'] +53;
        	$_SESSION['money']= (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Chasseur': 
        	$_SESSION['CS2']=9;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 30;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 30;
        	$_SESSION['FPI'] =  $_SESSION['FPI'] +44;
        	$_SESSION['EMB'] = $_SESSION['EMB'] +50;
        	$_SESSION['PIST'] =$_SESSION['PIST'] +50;
        	$_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100);
        case 'Fermier': 
        	$_SESSION['CS2']=10;
        	$_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
        	$_SESSION['PIST'] =$_SESSION['PIST'] +20;
        	$_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +20;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'];
        case 'Prêtre':
        	$_SESSION['CS2']=11;
        	$_SESSION['LC'] = $_SESSION['LC'] +80;
        	$_SESSION['BM'] =$_SESSION['BM'] +60;
        	$_SESSION['HM'] =$_SESSION['HM'] +40;
        	$_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +40;
        	$_SESSION['PS'] =$_SESSION['PS'] +40;
        	$_SESSION['PERSU'] =$_SESSION['PERSU'] +25;
        	$_SESSION['CRE'] =$_SESSION['CRE'] +25;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100);
        	$_SESSION['ELAN'] = $_SESSION['ELAN'] + rand(1,6) + rand(1,6);
        case 'Noble': 
        	$_SESSION['CS2']=12;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 20;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 20;
        	$_SESSION['CRE'] = $_SESSION['boCOMM'] + $_SESSION['CRE'] +40;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100)*100;
        case 'Voleur': 
        	$_SESSION['CS2']=13;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 35;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 35;
        	$_SESSION['LC'] =  $_SESSION['LC'] +25;
        	$_SESSION['GRI'] =  rand(1,100) + $_SESSION['GRI'];
        	$_SESSION['SAU'] = rand(1,100) + $_SESSION['SAU'];
        	$_SESSION['CRO'] = rand(1,100) + $_SESSION['CRO'];
        	$_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
        	$_SESSION['VOIR'] = rand(1,100) + $_SESSION['VOIR'];
        	$_SESSION['CHER'] = rand(1,100) + $_SESSION['CHER'];
        	$_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
        	$_SESSION['COUBOU'] = rand(1,100) + $_SESSION['COUBOU'];
        	$_SESSION['EVaT'] = $_SESSION['EVaT'] +50;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) ;
        case 'Mendiant': 
        	$_SESSION['CS2']=14;
        	$_SESSION['PERSU'] =$_SESSION['PERSU'] +60;
        	$_SESSION['VOIR'] = $_SESSION['VOIR'] + 60;
        	$_SESSION['CHER'] = $_SESSION['CHER'] + 25;
        	$_SESSION['CRO'] = $_SESSION['CRO'] + 50;
        	$number = rand(1,20);
        	$_SESSION['AFLI'] = $_SESSION['AFLI'] +SetAFLI($number);
        	if ($number == 20) {
        		$_SESSION['INT'] = $_SESSION['INT'] - rand(1,4);
        	}
        	$_SESSION['money']= $_SESSION['money'] + rand(1,6);
        case 'Artisan':
        	$_SESSION['CS2']=15;
        	$_SESSION['boMAN'] = $_SESSION['boMAN'] +70;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + rand(1,100);
        	$_SESSION['A1p'] = $_SESSION['A1a'] + rand(1,100);
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 15;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 15;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['DEX'];
	}
}
if ($_SESSION['CS3'] != 1) {
	switch ($_SESSION['CS3']) {
        case 'Guerrier':
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 50;
        	$_SESSION['A1p'] = $_SESSION['A1p'] + 50;
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 40;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 40;
        	$_SESSION['A3a'] = $_SESSION['A3a'] + 30;
        	$_SESSION['A3p'] = $_SESSION['A3p'] + 30;
        	$test = rand(1,100);
        	if ($test <= 60) {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
        	}else {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 25;
        	}
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
        case 'Assassin':
        	$_SESSION['CS3']=3;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 50;
        	$_SESSION['A1p'] = $_SESSION['A1p'] + 50;
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 40;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 40;
        	$_SESSION['A3a'] = $_SESSION['A3a'] + 30;
        	$_SESSION['A3p'] = $_SESSION['A3p'] + 30;
        	$test = rand(1,100);
        	if ($test <= 60) {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
        	}else {
        		$_SESSION['EQUITA'] = $_SESSION['EQUITA'] +25;
        	}
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
        	$_SESSION['CONdesPOI'] = $_SESSION['CONdesPOI'] +30;
        	$_SESSION['CHER'] = $_SESSION['CHER'] +25;
        	$_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
        	$_SESSION['SCA'] = $_SESSION['SCA'] +40;
        	$_SESSION['EMB'] = $_SESSION['EMB'] +50;
        	$_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
        case 'Marchand':
        	$_SESSION['CS3']=4;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 20;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 20;
        	$_SESSION['LC'] =$_SESSION['LC'] +70;
        	$_SESSION['PERSU'] =$_SESSION['PERSU'] +50;
        	$_SESSION['CRE'] =$_SESSION['CRE'] +40;
        	$_SESSION['EVaT'] =$_SESSION['EVaT'] +80;
        	$_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Négociant': 
        	$_SESSION['CS3']=5;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 40;
        	$_SESSION['LC'] = $_SESSION['LC'] +70;
        	$_SESSION['PERSU'] = $_SESSION['PERSU'] +50;
        	$_SESSION['CRE'] = $_SESSION['CRE'] +40;
        	$_SESSION['EVaT'] = $_SESSION['EVaT'] +80;
        	$_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Marin':
        	$_SESSION['CS3']=6;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 40;
        	$_SESSION['NAG'] = $_SESSION['NAG'] +50;
        	$_SESSION['FNE'] = $_SESSION['FNE'] +50;
        	$_SESSION['GRI'] = $_SESSION['GRI'] +50;
        	$_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +50;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'] ;
        case 'Second':
        	$_SESSION['CS3']=7; 
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 42;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 42;;
        	$_SESSION['NAG'] = $_SESSION['NAG'] +53;
        	$_SESSION['FNE'] = $_SESSION['FNE'] +74;
        	$_SESSION['GRI'] = $_SESSION['GRI'] +42;
        	$_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +53;
        	$_SESSION['money']= $_SESSION['money'] + (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Capitaine': 
        	$_SESSION['CS3']=8;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 44;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 44;
        	$_SESSION['NAG'] = $_SESSION['NAG'] +53;
        	$_SESSION['FNE'] = $_SESSION['FNE'] +77;
        	$_SESSION['GRI'] = $_SESSION['GRI'] +44;
        	$_SESSION['EQUILI'] = $_SESSION['EQUILI'] +53;
        	$_SESSION['money']= (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Chasseur': 
        	$_SESSION['CS3']=9;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 30;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 30;
        	$_SESSION['FPI'] =  $_SESSION['FPI'] +44;
        	$_SESSION['EMB'] = $_SESSION['EMB'] +50;
        	$_SESSION['PIST'] =$_SESSION['PIST'] +50;
        	$_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100);
        case 'Fermier': 
        	$_SESSION['CS3']=10;
        	$_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
        	$_SESSION['PIST'] =$_SESSION['PIST'] +20;
        	$_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +20;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'];
        case 'Prêtre':
        	$_SESSION['CS3']=11;
        	$_SESSION['LC'] = $_SESSION['LC'] +80;
        	$_SESSION['BM'] =$_SESSION['BM'] +60;
        	$_SESSION['HM'] =$_SESSION['HM'] +40;
        	$_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +40;
        	$_SESSION['PS'] =$_SESSION['PS'] +40;
        	$_SESSION['PERSU'] =$_SESSION['PERSU'] +25;
        	$_SESSION['CRE'] =$_SESSION['CRE'] +25;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100);
        	$_SESSION['ELAN'] = $_SESSION['ELAN'] + rand(1,6) + rand(1,6);
        case 'Noble': 
        	$_SESSION['CS3']=12;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 40;
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 20;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 20;
        	$_SESSION['CRE'] = $_SESSION['boCOMM'] + $_SESSION['CRE'] +40;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100)*100;
        case 'Voleur': 
        	$_SESSION['CS3']=13;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + 35;
        	$_SESSION['A1p'] = $_SESSION['A1a'] + 35;
        	$_SESSION['LC'] =  $_SESSION['LC'] +25;
        	$_SESSION['GRI'] =  rand(1,100) + $_SESSION['GRI'];
        	$_SESSION['SAU'] = rand(1,100) + $_SESSION['SAU'];
        	$_SESSION['CRO'] = rand(1,100) + $_SESSION['CRO'];
        	$_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
        	$_SESSION['VOIR'] = rand(1,100) + $_SESSION['VOIR'];
        	$_SESSION['CHER'] = rand(1,100) + $_SESSION['CHER'];
        	$_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
        	$_SESSION['COUBOU'] = rand(1,100) + $_SESSION['COUBOU'];
        	$_SESSION['EVaT'] = $_SESSION['EVaT'] +50;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) ;
        case 'Mendiant': 
        	$_SESSION['CS3']=14;
        	$_SESSION['PERSU'] =$_SESSION['PERSU'] +60;
        	$_SESSION['VOIR'] = $_SESSION['VOIR'] + 60;
        	$_SESSION['CHER'] = $_SESSION['CHER'] + 25;
        	$_SESSION['CRO'] = $_SESSION['CRO'] + 50;
        	$number = rand(1,20);
        	$_SESSION['AFLI'] = $_SESSION['AFLI'] +SetAFLI($number);
        	if ($number == 20) {
        		$_SESSION['INT'] = $_SESSION['INT'] - rand(1,4);
        	}
        	$_SESSION['money']= $_SESSION['money'] + rand(1,6);
        case 'Artisan':
        	$_SESSION['CS3']=15;
        	$_SESSION['boMAN'] = $_SESSION['boMAN'] +70;
        	$_SESSION['A1a'] = $_SESSION['A1a'] + rand(1,100);
        	$_SESSION['A1p'] = $_SESSION['A1a'] + rand(1,100);
        	$_SESSION['A2a'] = $_SESSION['A2a'] + 15;
        	$_SESSION['A2p'] = $_SESSION['A2p'] + 15;
        	$_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['DEX'];
	}
}

								/* calcul des pv (sans modif charact)*/
						    	$_SESSION['PV'] =$_SESSION['PV']+ $_SESSION['CON'] + 1;
						    	

								

								/*calcul de tout les différents bonus*/ 
								if ($_SESSION['TAI'] > 12) {
						    		$_SESSION['PV'] = $_SESSION['PV'] + $_SESSION['TAI'] - 12;
									$_SESSION['boPA'] = $_SESSION['boPA'] - $_SESSION['TAI'] + 12;
									$_SESSION['boAGI'] = $_SESSION['boAGI'] - $_SESSION['TAI'] + 12;
									$_SESSION['boDIS'] = $_SESSION['boDIS'] - $_SESSION['TAI'] + 12;
						    	}elseif ($_SESSION['TAI']<9) {
						    		$_SESSION['PV'] = $_SESSION['PV'] - 9 + $_SESSION['TAI'];
						    		$_SESSION['boPA'] = $_SESSION['boPA'] + 9 - $_SESSION['TAI'];
									$_SESSION['boAGI'] = $_SESSION['boAGI'] + 9 - $_SESSION['TAI'];
									$_SESSION['boDIS'] = $_SESSION['boDIS'] + 9 - $_SESSION['TAI'];				
						    	} 
								if ($_SESSION['FOR'] > 12) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['FOR'] - 12;
						    		$_SESSION['boPA'] = $_SESSION['boPA'] + $_SESSION['FOR'] - 12;
						    		$_SESSION['boAGI'] = $_SESSION['boAGI'] + $_SESSION['FOR'] - 12;
						    		$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['FOR'] - 12;
						    	}elseif ($_SESSION['FOR']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['FOR'];
									$_SESSION['boPA'] = $_SESSION['boPA'] - 9 + $_SESSION['FOR'];
									$_SESSION['boAGI'] = $_SESSION['boAGI'] - 9 + $_SESSION['FOR'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['FOR'];
								}

								if ($_SESSION['INT'] > 12) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['INT'] - 12;
						    		$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['INT'] - 12;
						    		$_SESSION['boPERC'] = $_SESSION['boPERC'] + $_SESSION['INT'] - 12;
						    		$_SESSION['boCO'] = $_SESSION['boCO'] + ($_SESSION['INT'] - 12)*2;
						    		$_SESSION['bDISC'] = $_SESSION['boDIS'] + $_SESSION['INT'] - 12;
						    		$_SESSION['bDCOMM'] = $_SESSION['boCOMM'] + $_SESSION['INT'] - 12;
						    	}elseif ($_SESSION['INT']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['INT'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['INT'];
									$_SESSION['boPERC'] = $_SESSION['boPERC'] - 9 + $_SESSION['INT'];
									$_SESSION['boCO'] = $_SESSION['boCO'] + (- 9 + $_SESSION['INT']) * 2;
									$_SESSION['boDIS'] = $_SESSION['boDIS'] - 9 + $_SESSION['INT'];
									$_SESSION['boCOMM'] = $_SESSION['boCOMM'] - 9 + $_SESSION['INT'];	
								}

								if ($_SESSION['POU'] > 12) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boPA'] = $_SESSION['boPA'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boPERC'] = $_SESSION['boPERC'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boCOMM'] = $_SESSION['boCOMM'] + $_SESSION['POU'] - 12;
						    	}elseif ($_SESSION['POU']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['POU'];
									$_SESSION['boPA'] = $_SESSION['boPA'] - 9 + $_SESSION['POU'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['POU'];
									$_SESSION['boPERC'] = $_SESSION['boPERC'] - 9 + $_SESSION['POU'];
									$_SESSION['boCOMM'] = $_SESSION['boCOMM'] - 9 + $_SESSION['POU'];
								}

								if ($_SESSION['DEX'] > 12) {
									$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['DEX'] - 12;
									$_SESSION['boPA'] = $_SESSION['boPA'] + $_SESSION['DEX'] - 12;
									$_SESSION['boAGI'] = $_SESSION['boAGI'] + $_SESSION['DEX'] - 12;
									$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['DEX'] - 12;
						    	}elseif ($_SESSION['DEX']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['DEX'];
									$_SESSION['boPA'] = $_SESSION['boPA'] - 9 + $_SESSION['DEX'];
									$_SESSION['boAGI'] = $_SESSION['boAGI'] - 9 + $_SESSION['DEX'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['DEX'];
						    	}

						    	if ($_SESSION['CHA'] > 12) {
						    		$_SESSION['boCOMM'] = $_SESSION['boCOMM'] + $_SESSION['DEX'] - 12;
						    	}elseif ($_SESSION['CHA'] < 9) {
						    		$_SESSION['boCOMM'] = $_SESSION['boCOMM'] - 9 + $_SESSION['POU'];
						    	}


						    	if (($_SESSION['FOR']+$_SESSION['TAI']) < 50) {
						    		$_SESSION['boDAM'] = SetBonusDamageM(($_SESSION['FOR']+$_SESSION['TAI']));
						    		$_SESSION['boDAT'] = SetBonusDamageT(($_SESSION['FOR']+$_SESSION['TAI']));
						    	}else{
						    		$_SESSION['boDAM'] ="+3D6";
						    		$_SESSION['boDAT'] ="+3D4";
						    	}

if ($_SESSION['boAGI'] < 0) {
	$_SESSION['boAGI'] = 0;
}
if ($_SESSION['boMAN'] < 0) {
	$_SESSION['boMAN'] = 0;
}
if ($_SESSION['boPERC'] < 0) {
	$_SESSION['boPERC'] = 0;
}
if ($_SESSION['boCOMM'] < 0) {
	$_SESSION['boCOMM'] = 0;
}
if ($_SESSION['boDIS'] < 0) {
	$_SESSION['boDIS'] = 0;
}
if ($_SESSION['boCO'] < 0) {
	$_SESSION['boCO'] = 0;
}
if ($_SESSION['boAT'] < 0) {
	$_SESSION['boAT'] = 0;
}
if ($_SESSION['boPA'] < 0) {
	$_SESSION['boPA'] = 0;
}
						    	/* ENREGISTREMENT DANS LA DATABASE !!!!!!!!!!!!!!!!!!!!!!!! */
$agi = $bdd -> prepare('INSERT INTO agility(to_climb, to_avoid, jump, horse_riding, swim, trumble) VALUES(:to_climb, :to_avoid, :jump, :horse_riding, :swim, :trumble)');
$agi->execute(array(	'to_climb' => $_SESSION['GRI'] + $_SESSION['boAGI'],
						'to_avoid' => $_SESSION['EVI']+ $_SESSION['boAGI'],
						'jump' => $_SESSION['SAU']+ $_SESSION['boAGI'],
						'horse_riding' => $_SESSION['EQUITA']+ $_SESSION['boAGI'],
						'swim' => $_SESSION['NAG']+ $_SESSION['boAGI'], 
						'trumble' => $_SESSION['CULBU']+ $_SESSION['boAGI'],
					));/*
$hom = $bdd -> prepare('INSERT INTO home(name, valuable, specification, possesion_of) VALUES(:name, :valuable, :specification, :possesion_of)');
$hom->execute(array(	'name' => $_POST['name'],
						'valuable' => $_POST['valuable'],
						'specification' => $_POST['specification'],
						'possesion_of' => $_POST['name_character'],
					));*/



$charact = $bdd -> prepare('INSERT INTO characteristic(strength, constitution, size, intelligence, power, dexterity, charism) VALUES(:strength, :constitution, :size, :intelligence, :power, :dexterity, :charism)');
$charact->execute(array('strength' => $_SESSION['FOR'],
						'constitution' => $_SESSION['CON'],
						'size' => $_SESSION['TAI'],
						'intelligence' => $_SESSION['INT'],
						'power' => $_SESSION['POU'],
						'dexterity' => $_SESSION['DEX'],
						'charism' => $_SESSION['CHA'],
					));


$comm = $bdd -> prepare('INSERT INTO communication(credit, persuade, eloquence, sing) VALUES(:credit, :persuade, :eloquence, :sing)');
$comm->execute(array('credit' => $_SESSION['CRE'] + $_SESSION['boCOMM'],
					'persuade' => $_SESSION['PERSU'] + $_SESSION['boCOMM'],
					'eloquence' => $_SESSION['ELO'] + $_SESSION['boCOMM'],
					'sing' => $_SESSION['CHAN'] + $_SESSION['boCOMM'],
					));

$dis = $bdd -> prepare('INSERT INTO discretion(ambush, hide, to_hide, silent_movement, cut_a_purse) VALUES(:ambush, :hide, :to_hide, :silent_movement, :cut_a_purse)');
$dis->execute(array('ambush' => $_SESSION['EMB'] + $_SESSION['boDIS'],
					'hide' => $_SESSION['DISS'] + $_SESSION['boDIS'],
					'to_hide' => $_SESSION['SCA'] + $_SESSION['boDIS'],
					'silent_movement' => $_SESSION['MOUSI'] + $_SESSION['boDIS'],
					'cut_a_purse' => $_SESSION['COUBOU'] + $_SESSION['boDIS'],
					));

$han = $bdd -> prepare('INSERT INTO handing(juggle, crochet, trick, make_a_knot, make_a_trap) VALUES(:juggle, :crochet, :trick, :make_a_knot, :make_a_trap)');
$han->execute(array('juggle' => $_SESSION['JON'] + $_SESSION['boMAN'],
					'crochet' => $_SESSION['CRO'] + $_SESSION['boMAN'],
					'trick' => $_SESSION['PASPAS'] + $_SESSION['boMAN'],
					'make_a_knot' => $_SESSION['FNE'] + $_SESSION['boMAN'],
					'make_a_trap' => $_SESSION['FPI'] + $_SESSION['boMAN'],
					));

$percep = $bdd -> prepare('INSERT INTO perception(balance, listen, feel, look_for, see, to_taste, track) VALUES(:balance, :listen, :feel, :look_for, :see, :to_taste, :track)');
$percep->execute(array('balance' => $_SESSION['EQUILI'] + $_SESSION['boPERC'],
					'listen' => $_SESSION['ECOU'] + $_SESSION['boPERC'],
					'feel' => $_SESSION['SEN'] + $_SESSION['boPERC'],
					'look_for' => $_SESSION['CHER'] + $_SESSION['boPERC'],
					'see' => $_SESSION['VOIR'] + $_SESSION['boPERC'],
					'to_taste' => $_SESSION['GOU'] + $_SESSION['boPERC'],
					'track' => $_SESSION['PIST'] + $_SESSION['boPERC'],
					));



$ws = $bdd -> prepare('INSERT INTO weapon_skill(weapon_name, attack, parad, damage) VALUES(:weapon_name, :attack, :parad, :damage)');
$ws->execute(array('weapon_name' => "bob1",
					'attack' => $_SESSION['A1n'] + $_SESSION['boAT'],
					'parad' => $_SESSION['A1p'] + $_SESSION['boPA'],
					'damage' => $_SESSION['A1d']."// bonus distant:".$_SESSION['boDAT']."// bonus mélé: ".$_SESSION['boDAM'],
					));
$ws->execute(array('weapon_name' => "bob 2",
					'attack' => $_SESSION['A2n'] + $_SESSION['boAT'],
					'parad' => $_SESSION['A2p'] + $_SESSION['boPA'],
					'damage' => $_SESSION['A2d']."// bonus distant:".$_SESSION['boDAT']."// bonus mélé: ".$_SESSION['boDAM'],
					));
$ws->execute(array('weapon_name' => "bob 3",
					'attack' => $_SESSION['A3n'] + $_SESSION['boAT'],
					'parad' => $_SESSION['A3p'] + $_SESSION['boPA'],
					'damage' => $_SESSION['A3d']."// bonus distant:".$_SESSION['boDAT']."// bonus mélé: ".$_SESSION['boDAM'],
					));
$ws->execute(array('weapon_name' => "bob 4",
					'attack' => $_SESSION['A4n'] + $_SESSION['boAT'],
					'parad' => $_SESSION['A4p'] + $_SESSION['boPA'],
					'damage' => $_SESSION['A4d']."// bonus distant:".$_SESSION['boDAT']."// bonus mélé: ".$_SESSION['boDAM'],
					));
$ws->execute(array('weapon_name' => "bob 5",
					'attack' => $_SESSION['A5n'] + $_SESSION['boAT'],
					'parad' => $_SESSION['A5p'] + $_SESSION['boPA'],
					'damage' => $_SESSION['A5d']."// bonus distant:".$_SESSION['boDAT']."// bonus mélé: ".$_SESSION['boDAM'],
					));
$ws->execute(array('weapon_name' => "bob 6",
					'attack' => $_SESSION['A6n'] + $_SESSION['boAT'],
					'parad' => $_SESSION['A6p'] + $_SESSION['boPA'],
					'damage' => $_SESSION['A6d']."// bonus distant:".$_SESSION['boDAT']."// bonus mélé: ".$_SESSION['boDAM'],
					));
/*
$invoc = $bdd -> prepare('INSERT INTO invocation(type, specialization, description, elan_cost) VALUES(:type, :specialization, :description, :elan_cost)');
$invoc->execute(array('type' => $_POST['type'],
					'specialization' => $_POST['specialization'],
					'description' => $_POST['description'],
					'elan_cost' => $_POST['elan_cost'],
					));*/

$posse = $bdd -> prepare('INSERT INTO possesion(money, debt, weapon) VALUES(:money, :debt, :weapon)');
$posse->execute(array('money' => $_SESSION['money'],
					'debt' => 0,
					'weapon' => "",
					));

$hp = $bdd -> prepare('INSERT INTO hp(max, currently) VALUES(:max, :currently)');
$hp->execute(array('max' => $_SESSION['PV'],
					'currently' => $_SESSION['PV'],
					));

$hp = $bdd -> prepare('INSERT INTO mental_health(sft, currently) VALUES(:sft, :currently)');
$hp->execute(array('sft' => $_SESSION['MS']/2,
					'currently' => $_SESSION['MS'],
					));
$lan = $bdd -> prepare('INSERT INTO language(language_name, _read, _write) VALUES(:language_name, :_read, :_write)');
$lan->execute(array('language_name' => 'Langage Commun',
					'_read' => $_SESSION['LC'] + $_SESSION['boCO'],
					'_write' => $_SESSION['LC'] + $_SESSION['boCO'],
					));
$lan->execute(array('language_name' => 'Bas Melnibonéen',
					'_read' => $_SESSION['BM'] + $_SESSION['boCO'],
					'_write' => $_SESSION['BM'] + $_SESSION['boCO'],
					));
$lan->execute(array('language_name' => 'Haut Melnibonéen',
					'_read' => $_SESSION['HM'] + $_SESSION['boCO'],
					'_write' => $_SESSION['HM'] + $_SESSION['boCO'],
					));
$lan->execute(array('language_name' => 'Pande',
					'_read' => $_SESSION['PAN'] + $_SESSION['boCO'],
					'_write' => $_SESSION['PAN'] + $_SESSION['boCO'],
					));
$lan->execute(array('language_name' => 'Mabden',
					'_read' => $_SESSION['MAB'] + $_SESSION['boCO'],
					'_write' => $_SESSION['MAB'] + $_SESSION['boCO'],
					));
$lan->execute(array('language_name' => 'Orgien',
					'_read' => $_SESSION['ORG'] + $_SESSION['boCO'],
					'_write' => $_SESSION['ORG'] + $_SESSION['boCO'],
					));


$LC=0;
$LBM=0;
$LHM=0;
$LP=0;
$LM=0;
$LO=0;
$reponsela = $bdd->query('SELECT * From language');
while ($donnees=$reponsela->fetch()){
	if($donnees['_read']==($_SESSION['LC'] + $_SESSION['boCO']) && $donnees['_write']==($_SESSION['LC'] + $_SESSION['boCO']) && $donnees['language_name']=="Langage Commun"){
		$guarry=$donnees['id_la'];
		if($guarry >= $LC){
				$LC=$guarry;
		}
	}
}
$reponsela = $bdd->query('SELECT * From language');
while ($donnees=$reponsela->fetch()){
	if($donnees['_read']==($_SESSION['BM'] + $_SESSION['boCO']) && $donnees['_write']==($_SESSION['BM'] + $_SESSION['boCO']) && $donnees['language_name']=="Bas Melnibonéen"){
		$guarry=$donnees['id_la'];
		if($guarry >= $LBM){
				$LBM=$guarry;
		}
	}
}
$reponsela = $bdd->query('SELECT * From language');
while ($donnees=$reponsela->fetch()){
	if($donnees['_read']==($_SESSION['HM'] + $_SESSION['boCO']) && $donnees['_write']==($_SESSION['HM'] + $_SESSION['boCO']) && $donnees['language_name']=="Haut Melnibonéen"){
		$guarry=$donnees['id_la'];
		if($guarry >= $LHM){
				$LHM=$guarry;
		}
	}
}
$reponsela = $bdd->query('SELECT * From language');
while ($donnees=$reponsela->fetch()){
	if($donnees['_read']==($_SESSION['PAN'] + $_SESSION['boCO']) && $donnees['_write']==($_SESSION['PAN'] + $_SESSION['boCO']) && $donnees['language_name']=="Pande"){
		$guarry=$donnees['id_la'];
		if($guarry >= $LP){
				$LP=$guarry;
		}
	}
}
$reponsela = $bdd->query('SELECT * From language');
while ($donnees=$reponsela->fetch()){
	if($donnees['_read']==($_SESSION['MAB'] + $_SESSION['boCO']) && $donnees['_write']==$_SESSION['MAB'] + $_SESSION['boCO'] && $donnees['language_name']=="Mabden"){
		$guarry=$donnees['id_la'];
		if($guarry >= $LM){
				$LM=$guarry;
		}
	}
}
$reponsela = $bdd->query('SELECT * From language');
while ($donnees=$reponsela->fetch()){
	if($donnees['_read']==($_SESSION['ORG'] + $_SESSION['boCO']) && $donnees['_write']==($_SESSION['ORG'] + $_SESSION['boCO']) && $donnees['language_name']=="Orgien"){
		$guarry=$donnees['id_la'];
		if($guarry >= $LO){
				$LO=$guarry;
		}
	}
}

$kno = $bdd -> prepare('INSERT INTO knowledge(evaluate_a_treasure, first_aid, cartography, memorize, plant_knowledge, poison_knowledge, craft, id_la1, id_la2, id_la3, id_la4, id_la5, id_la6) VALUES(:evaluate_a_treasure, :first_aid, :cartography, :memorize, :plant_knowledge, :poison_knowledge, :craft, :id_la1, :id_la2, :id_la3, :id_la4, :id_la5, :id_la6)');
$kno->execute(array('evaluate_a_treasure' => $_SESSION['EVaT'] + $_SESSION['boCO'],
					'first_aid' => $_SESSION['PS'] + $_SESSION['boCO'],
					'cartography' => $_SESSION['CAR'] + $_SESSION['boCO'],
					'memorize' => $_SESSION['MEM'] + $_SESSION['boCO'],
					'plant_knowledge' => $_SESSION['CONdesPLA'] + $_SESSION['boCO'],
					'poison_knowledge' => $_SESSION['CONdesPOI'] + $_SESSION['boCO'],
					'craft' => $_SESSION['ARTI'] + $_SESSION['boCO'],
					'id_la1' => $LC,
					'id_la2' => $LBM,
					'id_la3' => $LHM,
					'id_la4' => $LP,
					'id_la5' => $LM,
					'id_la6' => $LO,
					));

$ag=0;
$co=0;
$di=0;
$pe=0;
$ha=0;
$reponseag = $bdd->query('SELECT * From agility');
while ($donnees=$reponseag->fetch()){
	if($donnees['to_climb']==($_SESSION['GRI'] + $_SESSION['boAGI'])&& $donnees['to_avoid']==($_SESSION['EVI']+ $_SESSION['boAGI']) && $donnees['jump']==($_SESSION['SAU']+ $_SESSION['boAGI']) && $donnees['horse_riding']==($_SESSION['EQUITA']+ $_SESSION['boAGI']) && $donnees['swim']==($_SESSION['NAG']+ $_SESSION['boAGI']) && $donnees['trumble']==($_SESSION['CULBU']+ $_SESSION['boAGI'])){
		$guarry=$donnees['id_ag'];
		if($guarry >= $ag){
				$ag=$guarry;
		}
	}
}

$reponseco = $bdd->query('SELECT * From communication');
while ($donnees=$reponseco->fetch()){
	if($donnees['credit']==($_SESSION['CRE'] + $_SESSION['boCOMM']) && $donnees['persuade']==($_SESSION['PERSU'] + $_SESSION['boCOMM']) && $donnees['eloquence']==($_SESSION['ELO'] + $_SESSION['boCOMM']) && $donnees['sing']==($_SESSION['CHAN'] + $_SESSION['boCOMM'])){
		$guarry=$donnees['id_co'];
		if($guarry >= $co){
				$co=$guarry;
		}
	}
}
$reponsepe = $bdd->query('SELECT * From perception');
while ($donnees=$reponsepe->fetch()){
	if($donnees['balance']==($_SESSION['EQUILI'] + $_SESSION['boPERC']) && $donnees['listen']==($_SESSION['ECOU'] + $_SESSION['boPERC']) && $donnees['feel']==($_SESSION['SEN'] + $_SESSION['boPERC']) && $donnees['look_for']==($_SESSION['CHER'] + $_SESSION['boPERC']) && $donnees['see']==($_SESSION['VOIR'] + $_SESSION['boPERC']) && $donnees['to_taste']==($_SESSION['GOU'] + $_SESSION['boPERC']) && $donnees['track']==($_SESSION['PIST'] + $_SESSION['boPERC'])){
		$guarry=$donnees['id_pe'];
		if($guarry >= $pe){
				$pe=$guarry;
		}
	}
}
$reponseha = $bdd->query('SELECT * From handing');
while ($donnees=$reponseha->fetch()){
	if($donnees['juggle']==($_SESSION['JON'] + $_SESSION['boMAN']) && $donnees['crochet']==($_SESSION['CRO'] + $_SESSION['boMAN']) && $donnees['trick']==($_SESSION['PASPAS'] + $_SESSION['boMAN']) && $donnees['make_a_knot']==($_SESSION['FNE'] + $_SESSION['boMAN']) && $donnees['make_a_trap']==($_SESSION['FPI'] + $_SESSION['boMAN'])){
		$guarry=$donnees['id_ha'];
		if($guarry >= $ha){
				$ha=$guarry;
		}
	}
}
$reponsedi = $bdd->query('SELECT * From discretion');
while ($donnees=$reponsedi->fetch()){
	if($donnees['ambush']==($_SESSION['EMB'] + $_SESSION['boDIS']) && $donnees['hide']==($_SESSION['DISS'] + $_SESSION['boDIS']) && $donnees['to_hide']==($_SESSION['SCA'] + $_SESSION['boDIS']) && $donnees['silent_movement']==($_SESSION['MOUSI'] + $_SESSION['boDIS']) && $donnees['cut_a_purse']==($_SESSION['COUBOU'] + $_SESSION['boDIS'])){
		$guarry=$donnees['id_di'];
		if($guarry >= $di){
				$di=$guarry;
		}
	}
}
$ski = $bdd -> prepare('INSERT INTO skill(communication, handing, perception, agility, discretion, id_ag, id_pe, id_ha, id_co, id_di) VALUES(:communication, :handing, :perception, :agility, :discretion, :id_ag, :id_pe, :id_ha, :id_co, :id_di)');
$ski->execute(array('communication' => $_SESSION['boCOMM'],
					'handing' => $_SESSION['boMAN'],
					'perception' => $_SESSION['boPERC'],
					'agility' => $_SESSION['boAGI'],
					'discretion' => $_SESSION['boDIS'],
					'id_ag' => $ag,
					'id_pe' => $pe,
					'id_ha' => $ha,
					'id_co' => $co,
					'id_di' => $di,
					));

$ch=1;
$ho=1;
$hp=1;
$sf=1;
$in=1;
$kn=1;
$po=1;
$sk=1;
$ws1=1;
$ws2=1;
$ws3=1;
$ws4=1;
$ws5=1;
$ws6=1;
$salope = $_SESSION['MS'] / 2 ;

$reponsech = $bdd->query('SELECT * From characteristic Where strength = '.$_SESSION['FOR'].' && constitution = '.$_SESSION['CON'].' && size = '.$_SESSION['TAI'].' && intelligence = '.$_SESSION['INT'].' && power = '.$_SESSION['POU'].' && dexterity = '.$_SESSION['DEX'].' && charism = '.$_SESSION['CHA'].' ORDER BY id_ch DESC');
		$donnees=$reponsech->fetch();
		$ch=$donnees['id_ch'];


$reponsehp = $bdd->query('SELECT * From hp WHERE currently = '.$_SESSION['PV'].' && max = '.$_SESSION['PV'].' ORDER BY id_hp DESC');
		$donnees=$reponsehp->fetch();
		$hp=$donnees['id_hp'];

$reponsesf = $bdd->query('SELECT * From mental_health WHERE currently = '.$_SESSION['MS'].' && sft = '.$salope.' ORDER BY id_sf DESC');
		$donnees=$reponsesf->fetch();
		$sf=$donnees['id_sf'];
/*
$reponsein = $bdd->query('SELECT * From invocation WHERE type = '.$_POST['type'].' && specialization = '.$_POST['specialization'].' && description = '.$_POST['description'].' && elan_cost = '.$_POST['elan_cost'].' ORDER BY id_ch DESC');
		$donnees=$reponsein->fetch();
		$guarry=$donnees['id_in'];
*/
$t1 =$_SESSION['EVaT'] + $_SESSION['boCO'];
$t2 =$_SESSION['PS'] + $_SESSION['boCO'];
$t3 =$_SESSION['CAR'] + $_SESSION['boCO'];
$t4 =$_SESSION['MEM'] + $_SESSION['boCO'];
$t5 =$_SESSION['CONdesPLA'] + $_SESSION['boCO'];
$t6 =$_SESSION['CONdesPOI'] + $_SESSION['boCO'];
$t7 =$_SESSION['ARTI'] + $_SESSION['boCO'];

$reponsekn = $bdd->query('SELECT * From knowledge ORDER BY id_kn DESC'/*./*' WHERE evaluate_a_treasure = '.$t1.' && first_aid = '.$t2.' && cartography = '.$t3.' && memorize = '.$t4.' && plant_knowledge = '.$t5.' && poison_knowledge = '.$t6.' && craft = '.$t6.' && id_la1 = '.$LC.' && id_la2 = '.$LBM.' && id_la3 = '.$LHM.' && id_la4 = '.$LP.' && id_la5 = '.$LM.' && id_la6 = '.$LO.' ORDER BY id_kn DESC'*/);
		$donnees=$reponsekn->fetch();
		$kn=$donnees['id_kn'];

$reponsepo = $bdd->query('SELECT * From possesion WHERE money = '.$_SESSION['money'].' && debt = 0 && weapon = "" ORDER BY id_po DESC');
		$donnees=$reponsepo->fetch();
		$po=$donnees['id_po'];
/*
$reponsein = $bdd->query('SELECT * From invocation WHERE type = '.$_POST['type'].' && specialization = '.$_POST['specialization'].' && description ='.$_POST['description'].' && lan_cost = '.$_POST['elan_cost'].' ORDER BY id_ch DESC');
		$donnees=$reponsein->fetch();
		$in=$donnees['id_in'];*/

$t1 =$_SESSION['boCOMM'];
$t2 =$_SESSION['boMAN'];
$t3 = $_SESSION['boPERC'];
$t4 = $_SESSION['boAGI'];
$t5 =$_SESSION['boDIS'];

$reponsesk = $bdd->query('SELECT * From skill WHERE communication = '.$t1.' && handing = '.$t2.' && perception = '.$t3.' && agility = '.$t4.' && discretion = '.$t5.' && id_ag = '.$ag.' && id_pe = '.$pe.' && id_ha = '.$ha.' && id_co = '.$co.' && id_di = '.$di.' ORDER BY id_co DESC');
		$donnees=$reponsesk->fetch();
		$sk=$donnees['id_sk'];
/*
$reponsews1 = $bdd->query('SELECT * From weapon_skill WHERE weapon_name = '.$_POST['weapon_name1'].' && attack = '.$_POST['attack1'].' && parad = '.$_POST['parad1'].' && damage = '.$_POST['damage1'].' ORDER BY id_ws DESC');
		$donnees=$reponsews2->fetch();
		$ws1=$donnees['id_ws'];
/*
$reponsews2 = $bdd->query('SELECT * From weapon_skill WHERE weapon_name = '.$_POST['weapon_name2'].' && attack = '.$_POST['attack2'].' && parad = '.$_POST['parad2'].' && damage = '.$_POST['damage2'].' ORDER BY id_ws DESC');
		$donnees=$reponsews2->fetch();
		$ws2=$donnees['id_ws'];

$reponsews3 = $bdd->query('SELECT * From weapon_skill WHERE weapon_name = '.$_POST['weapon_name3'].' && attack = '.$_POST['attack3'].' && parad = '.$_POST['parad3'].' && damage = '.$_POST['damage3'].' ORDER BY id_ws DESC');
		$donnees=$reponsews3->fetch();
		$ws3=$donnees['id_ws'];

$reponsews4 = $bdd->query('SELECT * From weapon_skill WHERE weapon_name = '.$_POST['weapon_name4'].' && attack = '.$_POST['attack4'].' && parad = '.$_POST['parad4'].' && damage = '.$_POST['damage4'].' ORDER BY id_ws DESC');
		$donnees=$reponsews4->fetch();
		$ws4=$donnees['id_ws'];

$reponsews5 = $bdd->query('SELECT * From weapon_skill WHERE weapon_name = '.$_POST['weapon_name5'].' && attack = '.$_POST['attack5'].' && parad = '.$_POST['parad5'].' && damage = '.$_POST['damage5'].' ORDER BY id_ws DESC');
		$donnees=$reponsews5->fetch();
		$ws5=$donnees['id_ws'];

$reponsews6 = $bdd->query('SELECT * From weapon_skill WHERE weapon_name = '.$_POST['weapon_name6'].' && attack = '.$_POST['attack6'].' && parad = '.$_POST['parad6'].' && damage = '.$_POST['damage6'].' ORDER BY id_ws DESC');
		$donnees=$reponsews6->fetch();
		$ws6=$donnees['id_ws'];

$reponseho = $bdd->query('SELECT * From home WHERE name = '.$_POST['name'].' && valuable = '.$_POST['valuable'].' && specification = '.$_POST['specification'].' && possesion_of = '.$_POST['name_character'].' ORDER BY id_ho DESC');
		$donnees=$reponseho->fetch();
		$ho=$donnees['id_ho'];*/

$per = $bdd->prepare('INSERT INTO personage (id_player, name_character, sex, age, eyes_colors, hairs_colors, size, weight, personnal_history, stricking_fack, affliction, elan_point, id_SC1, id_SC2, id_SC3, id_ch, id_cu, id_ho, id_hp, id_sf, id_in, id_kn, id_po, id_sk, id_na, id_ws1, id_ws2, id_ws3, id_ws4, id_ws5, id_ws6) VALUES(:id_player, :name_character, :sex, :age, :eyes_colors, :hairs_colors, :size, :weight, :personnal_history, :stricking_fack, :affliction, :elan_point,  :id_SC1, :id_SC2, :id_SC3, :id_ch, :id_cu, :id_ho, :id_hp, :id_sf, :id_in, :id_kn, :id_po, :id_sk, :id_na, :id_ws1, :id_ws2, :id_ws3, :id_ws4, :id_ws5, :id_ws6)');
$per->execute(array('id_player' => $_SESSION['id'], 
					'name_character' =>$_SESSION['nameca'], 
					'sex' => $_SESSION['SEX'], 
					'age' => $_SESSION['age'],
					'eyes_colors' =>$_SESSION['eyes'],
					'hairs_colors' => $_SESSION['hairs'],
					'size' =>$_SESSION['size'],
					'weight' =>$_SESSION['weight'],
					'personnal_history' =>$_SESSION['personal'],
					'stricking_fack' => "",
					'affliction' => $_SESSION['AFLI'],
					'elan_point' => $_SESSION['ELAN'],
					'id_SC1' => $_SESSION['CS1'],
					'id_SC2' => $_SESSION['CS2'],
					'id_SC3' => $_SESSION['CS3'],
					'id_ch' => $ch,
					'id_cu' => $_SESSION['CU'],
					'id_ho' => $ho,
					'id_hp' => $hp,
					'id_sf' => $sf,
					'id_in' => $in,
					'id_kn' => $kn,
					'id_po' => $po,
					'id_sk' => $sk,
					'id_na' => $_SESSION['id_NA'],
					'id_ws1' =>$ws1,
					'id_ws2' =>$ws2,
					'id_ws3' =>$ws3,
					'id_ws4' =>$ws4,
					'id_ws5' =>$ws5,
					'id_ws6' =>$ws6,
				));
echo 'id_player'.$_SESSION['id'].
	'//name_character'.$_SESSION['nameca'].
	'//sex'.$_SESSION['SEX'].
	'//age'.$_SESSION['age'].
	'//eyes_colors'.$_SESSION['eyes'].
	'//hairs_colors'.$_SESSION['hairs'].
	'//size'.$_SESSION['size'].
	'//weight'.$_SESSION['weight'].
	'//personnal_history'.$_SESSION['personal'].
	'//stricking_fack'."bob".
	'//affliction'.$_SESSION['AFLI'].
	'//elan_point'.$_SESSION['ELAN'].
	'//id_SC1'.$_SESSION['CS1'].
	'//id_SC2'.$_SESSION['CS2'].
	'//id_SC3'.$_SESSION['CS3'].
	'//id_ch'.$ch.
	'//id_cu'.$_SESSION['CU'].
	'//id_ho'.$ho.
	'//id_hp'.$hp.
	'//id_sf'.$sf.
	'//id_in'.$in.
	'//id_kn'.$kn.
	'//id_po'.$po.
	'//id_sk'.$sk.
	'//id_na'.$_SESSION['id_NA'].
	'//id_ws1'.$ws1.
	'//id_ws2'.$ws2.
	'//id_ws3'.$ws3.
	'//id_ws4'.$ws4.
	'//id_ws5'.$ws5.
	'//id_ws6'.$ws6;
							$_SESSION['nameca'] ="";
							$_SESSION['age'] =0;
							$_SESSION['eyes'] ="";
							$_SESSION['hairs'] ="";
							$_SESSION['size'] =0;
							$_SESSION['weight'] =0;
							$_SESSION['personal'] ="";
							$_SESSION['money'] =0;
						    $_SESSION['SEX'] ="";
						    $_SESSION['AFLI'] ="";




							$_SESSION['FOR'] =0;
						    $_SESSION['CON'] =0;
						    $_SESSION['TAI'] =0;
						    $_SESSION['INT'] =0;
						    $_SESSION['POU'] =0;
						    $_SESSION['DEX'] =0;
						    $_SESSION['CHA'] =0;
						    $_SESSION['ELAN']=0;

						    $_SESSION['NA'] =0;
						    $_SESSION['id_NA'] =0;
						    $_SESSION['CS1'] =1;
						    $_SESSION['CS2'] =1;
						    $_SESSION['CS3'] =1;
						    $_SESSION['CU'] =0;
						    $_SESSION['PV'] =0;
						    $_SESSION['MS'] =0;

						    $_SESSION['boCO'] =0;
						    $_SESSION['EVaT'] =0;
						    $_SESSION['PS'] =0;
						    $_SESSION['CAR'] =0;
						    $_SESSION['MEM'] =0;
						    $_SESSION['CONdesPLA'] =0;
						    $_SESSION['CONdesPOI'] =0;
						    $_SESSION['ARTI'] =0;
						    $_SESSION['LC'] =0;
						    $_SESSION['BM'] =0;
						    $_SESSION['HM'] =0;
						    $_SESSION['PAN'] =0;
						    $_SESSION['MAB'] =0;
						    $_SESSION['ORG'] =0;

						    $_SESSION['boCOMM'] =0;
						    $_SESSION['CRE'] =0;
						    $_SESSION['ELO'] =0;
						    $_SESSION['PERSU'] =0;
						    $_SESSION['CHAN'] =0;

						    $_SESSION['boMAN'] =0;
						    $_SESSION['JON'] =0;
						    $_SESSION['CRO'] =0;
						    $_SESSION['PASPAS'] =0;
						    $_SESSION['FPI'] =0;
						    $_SESSION['FNE'] =0;

						    $_SESSION['boPERC'] =0;
						    $_SESSION['EQUILI'] =0;
						    $_SESSION['ECOU'] =0;
						    $_SESSION['SEN'] =0;
						    $_SESSION['CHER'] =0;
						    $_SESSION['VOIR'] =0;
						    $_SESSION['GOU'] =0;
						    $_SESSION['PIST'] =0;

						    $_SESSION['boAGI'] =0;
						    $_SESSION['GRI'] =0;
						    $_SESSION['EVI'] =0;
						    $_SESSION['SAU'] =0;
						    $_SESSION['EQUITA'] =0;
						    $_SESSION['NAG'] =0;
						    $_SESSION['CULBU'] =0;

						    $_SESSION['boDIS'] =0;
						    $_SESSION['EMB'] =0;
						    $_SESSION['DISS'] =0;
						    $_SESSION['SCA'] =0;
						    $_SESSION['MOUSI'] =0;
						    $_SESSION['COUBOU'] =0;

						    $_SESSION['boAT'] =0;
						    $_SESSION['boPA'] =0;
						    $_SESSION['boDAM'] ="";
						    $_SESSION['boDAT'] ="";

						    $_SESSION['A1n'] =0;
						    $_SESSION['A1a'] =0;
						    $_SESSION['A1p'] =0;
						    $_SESSION['A1d'] =0;

						    $_SESSION['A2n'] =0;
						    $_SESSION['A2a'] =0;
						    $_SESSION['A2p'] =0;
						    $_SESSION['A2d'] =0;

						    $_SESSION['A3n'] =0;
						    $_SESSION['A3a'] =0;
						    $_SESSION['A3p'] =0;
						    $_SESSION['A3d'] =0;

						    $_SESSION['A4n'] =0;
						    $_SESSION['A4a'] =0;
						    $_SESSION['A4p'] =0;
						    $_SESSION['A4d'] =0;

						    $_SESSION['A5n'] =0;
						    $_SESSION['A5a'] =0;
						    $_SESSION['A5p'] =0;
						    $_SESSION['A5d'] =0;

						    $_SESSION['A6n'] =0;
						    $_SESSION['A6a'] =0;
						    $_SESSION['A6p'] =0;
						    $_SESSION['A6d'] =0;
?>








					<footer id=footer>
						<section>
							<section>
								<h3>Adresse</h3>
								<p>Rue 8 mai 1945<br />
								Saint-Barthelemy D'Anjou, 49124</p>
							</section>
							<section>
								<h3>Telephone</h3>
								<p><a href="#">00-00-00-00-00</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">ESAIPLan@hotmail.fr</a></p>
							</section>
							<section>
								<h3>&copy; Untitled</h3><h3>Design: <a href="#">ESAIP Administration</a></h3>
							</section>
						</section>
					</footer>
</body>
</html> 