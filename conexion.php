<?php
function conectarse()
{
if(!($link=mysql_connect("localhost","root",12345")))
{
echo "error conectandose al servidor";
exit();
}
if(!mysql_select_db("matriculas_db", $link))
{
echo "error seleccionando la bd";
exit();
}
return $link;
}
function mayus($cad)
{
return strtoupper($cad);
}


?>