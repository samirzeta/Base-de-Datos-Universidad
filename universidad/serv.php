<?php
	$conect = @mysql_connect("localhost","root","") or die("No se encontrĂ³ el servidor");
	mysql_select_db("sanmarcos",$conect)or die("No se encontrĂ³ la base de datos");
?>