<?php 

require_once ('model/model.php');

function fetchAllStudent(){
	return showAllStudent();

}
function fetchStudent($username){
	return showStudent($username);

}
