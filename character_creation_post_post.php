<?php 
	include("debut.php");
	include("includes/identifiants.php");

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
        	$_SESSION['FS'] =$_SESSION['FS'] +40;
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
        	$_SESSION['FS'] =$_SESSION['FS'] +40;
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
        	$_SESSION['FS'] =$_SESSION['FS'] +40;
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