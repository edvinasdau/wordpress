<?php

/**
* @package naujas
*/
/*
Plugin Name: Plugas
Plugin URI: www.google.lt
Author: Edv
Description: testinis plugin
Author  URI: qewlqe.lt
Version: 1.0.00.0.00.0.0.0
License: op op
*/

add_action("admin_menu", "addAdminMenu");
add_shortcode("kazkokioVeiksmoPavyzdys", "tikrinu" );
function addAdminMenu(){
	add_menu_page("Pavyzdys sukurto meniu", "Pavyzdys sukurto meniu", 4, "pavyzdiniai-options", "exampleMenu");
	
}
function exampleMenu(){
	$a = '<form action="update.php" method="post">';
	$a .='Name: <input type="text" name="name"><br>';
	$a .= 'E-mail: <input type="text" name="email"><br>';
	$a .= '<input type="submit">';
	$a .= '</form>';
	echo $a;
}

function veiksmas(){
	$informacija = "Kazka tai padarome trumpa informacija";
	$informacija .="<div style='width:100px;height:100px; background-color:red;'>Pasidarom kazkoki diva kuris tures jau teksta</div>";
	$informacija .="<p>Isivedam paragrafa</p>";
	return $informacija;
}

function laikas(){
	$date = date("H");
	//echo $date;
	if ($date > 0 && $date < 6) {
		echo "naktis";
	} else if ($date > 6 && $date < 18){
		echo "<div style='background-color: white;'>diena</div>";
	} else {
		echo "vakaras";
	}
}


function trikampis(){
	$a = 5;
	$b = 7;
	echo $a * $b / 2, '<br>';
	echo sqrt($a*$a + $b*$b) + $a + $b;

}

function tikrinu (){
	$a = 25;
	$b = 5;
	if($a == $b*$b) {
		echo "taip";
	} else {
		echo "ne";
	}
}
?>