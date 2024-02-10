<?php

    $conn =mysqli_connect('localhost','root','1988','tasty_pizza');
	if(!$conn){
		echo "connection is error".mysqli_connect_error();
	}
?>