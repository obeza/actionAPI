<?
//
// action root
//
function run(){
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$action = 'get_'.$_GET['action'];
	}
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$action = 'post_'.$_POST['action'];
	}
	
	call_user_func($action);
}

run();

function get_bonjour(){
	echo "bonjour ";
}

function post_sauver(){
	echo "sauver";
}

