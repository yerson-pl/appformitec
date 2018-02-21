
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Desarrollo de aplicaciones de bases de datos</title>
<?php
include("conexion2.php");
?>
<style type="text/css">
<!--

#menu {
  float: left;
  width: 100px;
  margin: 20px;/**/
  padding: 0;/**/
  list-style-type: none;/**/
}
#menu li {
  border: #d3d3d3 1px solid;
  background-color: #fff;/**/
  margin-bottom: 5px;
  font-size: 90%;
  text-align: center;
  line-height: 30px;
  
  background-repeat: repeat-x;
  background-position: bottom left;
}
#menu a { 
  display: block; 
  text-decoration: none; 
  color: #4F4F4F;
}
#menu li:hover {
  border-color: #9F9F9F;
  background-color: #E5CDB2;
}
#menu li:hover a {
  color: #000;
}
#menu li.activa, #menu li.activa:hover {
  border: #d3d3d3 1px solid; 
  background-color: #fff;
  
}
 #menu li.activa a, #menu li.activa:hover a{
    color: #000;
 }
-->
</style>
<head>

<style type="TEXT/CSS">
<!--
		body,td{
			color:0066CC;
			font-family:Arial,Helvetica,Sans-serif;
		}
		-->
</style>
</head>

<body bgcolor="#EDEEE0" text="#0056CC" vlink="#0056CC" link="#0056CC" leftmargin="0" topmargin="0" >
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td bgcolor="#0066CC" colspan="2" height="81"><img src="logo1.jpg" width="238" height="136"></td>
	
    <td bgcolor="#0066CC" height="81" width="7%">&nbsp;</td>
    <!--Color original 0056CC--> 
    <td bgcolor="#0066CC" colspan="2" align="center" height="81"> 
      <p><font size="5" color="#FFFFFF"><b>LISTA DE ALUMNOS MATRICULADOS</b></font></p>
      <p><img src="alumnos.jpeg" width="272" height="119"></p></td>
    <td bgcolor="#0066CC" valign="top" height="81" width="9%"><img src="endcurve0.gif" width="100%" height="82"></td>
  </tr>
  <tr> 
    <td bgcolor="#0066CC" width="17%">&nbsp;</td>
    <td bgcolor="#0066CC" width="11%">&nbsp;</td>
    <td bgcolor="#0066CC" valign="top" width="7%"><img src="midcurve.gif" width="100%"></td>
    <td colspan="3"><p><strong>ALUMNOS MATRICULADOS </strong></p>
      <p>&nbsp;</p></td>    
  </tr>
  <tr> 
    <td bgcolor="#0066CC" link="#0066CC" colspan="2" align="right" valign="top"> 
     <ul id="menu">
  <li>Inicio</li>
  <li><a href="reservacion.php">Matricula</a></li>
  <li class="activa"><a href="informacion.php">Informaci&oacute;n</a></li>
  <li><a href="galeria.php">Bienvenidos</a></li>
  </ul>
</td>
    <td width="7%">&nbsp;</td>
    <td colspan="2"> 
      <table width="115%" cellpadding="5" border="0">
        <tbody>
        <tr align="left"> 
          <td width="115%"><br>
          
        
<?php
$cn=mysqli_connect("127.0.0.1","root","12345")or die("Error en Conexion");
$db=mysqli_select_db($cn,"matriculabd");
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";

$sql="select * from clientes2";
$cs=mysqli_query($sql,$cn);
echo"<center>
<table border='3' bgcolor='#CCFFFF'>
<tr>
<td bgcolor='#99CC99'>Codigo</td>
<td bgcolor='#99CC99'>Nombres</td>
<td bgcolor='#99CC99'>Apellidos</td>
<td bgcolor='#99CC99'>Edad</td>
<td bgcolor='#99CC99'>Sexo</td>
<td bgcolor='#99CC99'>Dni</td>
<td bgcolor='#99CC99'>Curso</td>
<td bgcolor='#99CC99'>Procedencia</td>
<td bgcolor='#99CC99'>Fecha</td>
</tr>";
		while($resul=mysqli_fetch_array($cs)){
			$var=$resul[0];
			$var1=$resul[1];
			$var2=$resul[2];
			$var3=$resul[3];
			$var4=$resul[4];
			$var5=$resul[5];
			$var6=$resul[6];
			$var7=$resul[7];
		    $var8=$resul[8];
			echo "<tr>
<td>$var</td>
<td>$var1</td>
<td>$var2</td>
<td>$var3</td>
<td>$var4</td>
<td>$var5</td>
<td>$var6</td>
<td>$var7</td>
<td>$var8</td>
</tr>";
			}
			
			echo "</table>
</center>";
	
?>


		
				
		</tbody></table>
    </td>
    <td width="9%">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#0066CC" width="17%"><img src="spacer.gif" width="116" height="1"></td>
    <td width="11%"><img src="bottomcurve0.gif" width="100%" height="82"></td>
    <td width="7%">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
</tbody></table>
</body>
</html>