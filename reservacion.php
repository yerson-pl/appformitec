
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Desarrollo de aplicaciones de bases de datos</title>
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
.Estilo2 {font-size: 14px}
.Estilo9 {
	font-size: 24px;
	font-weight: bold;
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
.Estilo6 {font-size: 18; font-weight: bold; }
.Estilo8 {font-size: 12px; font-weight: bold; }
		-->
</style>
</head>

<body bgcolor="#EDEEE0" text="#0056CC" vlink="#0056CC" link="#0056CC" leftmargin="0" topmargin="0" >
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td bgcolor="#0066CC" colspan="2" height="81"><img src="img/logo1.jpg" width="241" height="150"></td>
	
    <td bgcolor="#0066CC" height="81" width="7%">&nbsp;</td>
    <!--Color original 0056CC--> 
    <td bgcolor="#0066CC" colspan="2" align="center" height="81"> 
      <p><font size="5" color="#FFFFFF"><b>SISTEMA DE MATRICULA &ldquo;SYSTEM SMF&rdquo;</b></font></p>
      </td>
    <td bgcolor="#0066CC" valign="top" height="81" width="9%"><img src="img/endcurve0.gif" width="100%" height="82"></td>
  </tr>
  <tr> 
    <td bgcolor="#0066CC" width="17%">&nbsp;</td>
    <td bgcolor="#0066CC" width="11%">&nbsp;</td>
    <td bgcolor="#0066CC" valign="top" width="7%"><img src="img/midcurve.gif" width="100%"></td>
    <td colspan="3"><center>
      <p class="Estilo9">REGISTRO DEL ALUMNO 
      </p>
      <p class="Estilo9">&nbsp;</p>
    </center></td>    
  </tr>
  <tr> 
    <td bgcolor="#0066CC" link="#0066CC" colspan="2" align="right" valign="top"> 
     <ul id="menu">
  <li><a href="index.php">Inicio</a></li>
  <li class="activa">Matricula</li>
  <li><a href="informacion.php">Informaci&oacute;n</a></li>
  <li>Busqueda</li>
  </ul>
     <img src="img/logo.jpg" width="67" height="59" alt="tecno">    </td>
    <td width="7%">&nbsp;</td>
    <td colspan="2"> 
      <table width="100%" cellpadding="5" border="0">
        <tbody><tr> 
          <td width="100%">
            
			<form id="miform" name="miform" method="post" action="agregar3.php">
			  <table width="570" border="5" align="center" cellpadding="0" cellspacing="0" bgcolor="#12A2CB" class="Estilo2">
                <tr bgcolor="#CCFFFF">
                  <td bgcolor="#EDEEE0"><strong>CODIGO</strong></td>
                  <td colspan="4" bgcolor="#EDEEE0"><label for="codigo"></label>
                    <input name="codigo" type="text" id="codigo" size="15"></td>
                </tr>
                <tr bgcolor="#CCFFFF">
                  <td width="137" bgcolor="#EDEEE0"><span class="Estilo2"><strong>NOMBRES</strong></span></td>
                  <td colspan="4" bgcolor="#EDEEE0"><input name="nombre" type="text" id="nombre" size="40"></td>
                </tr>
                <tr>
                  <td bgcolor="#EDEEE0"><strong>APELLIDOS</strong></td>
                  <td colspan="4" bgcolor="#EDEEE0"><label for="apellidos"></label>
                    <input name="apellidos" type="text" id="apellidos" size="40"></td>
                  </tr>
                <tr>
                  <td bgcolor="#EDEEE0"><strong>EDAD</strong></td>
                  <td colspan="4" bgcolor="#EDEEE0"><label for="edad"></label>
                    <input name="edad" type="text" id="edad" size="15"></td>
                  </tr>
                <tr>
                  <td bgcolor="#EDEEE0"><strong>SEXO</strong></td>
                  <td colspan="4" bgcolor="#EDEEE0"><label for="sexo"></label>
                    <input name="sexo" type="text" id="sexo" size="15"></td>
                  </tr>
                <tr>
                  <td bgcolor="#EDEEE0"><span class="Estilo2"> <strong>DNI </strong></span></td>
                  <td colspan="4" bgcolor="#EDEEE0"><span class="Estilo6">
                    <input name="dni" type="text" id="dni" size="15">
                  </span></td>
                  </tr>
  <tr bgcolor="#CCFFFF">
      <td bgcolor="#EDEEE0"><strong>CURSO</strong></td>
      <td colspan="4" bgcolor="#EDEEE0"><input name="curso" type="text" id="curso" size="40">      </td>
    </tr>
  <tr bgcolor="#CCFFFF">
    <td bgcolor="#EDEEE0"><strong>PROCEDENCIA</strong></td>
    <td colspan="4" bgcolor="#EDEEE0"><span class="Estilo6">
      <input name="procedencia" type="text" id="procedencia" size="40">
    </span></td>
    </tr>
  <tr bgcolor="#CCFFFF">
    <td bgcolor="#EDEEE0"><span class="Estilo2"><strong>FECHA DE INGRESO</strong></span></td>
    <td colspan="4" bgcolor="#EDEEE0"><input name="fecha" type="text" id="fecha" size="15"></td>
    </tr>
  <tr>
    <td height="131" colspan="5" bgcolor="#33FFFF"><div align="center" class="Estilo6"></div>      <div align="center" class="Estilo6"></div>      <div align="center" class="Estilo6">
      <input name="Submit" type="submit" class="Estilo9" value="Guardar Datos">
      </div>      <div align="center" class="Estilo6"></div></td>
    </tr>
              </table>
			  <div align="center"><br>
			  </div>
			  <tr> 
    <td bgcolor="#CCFFFF" link="#0066CC" colspan="2" align="center" valign="center"><li><a href="ejecuta1.php">MOSTRAR CANTIDAD DE MATRICULADOS<br>
    </a><br>
</li></td></tr>
			</form>	          </td>
        </tr>
        <tr align="left"> 
          <td><p>&nbsp;</p>
            <p><img src="img/alumnos.jpeg" width="740" height="480"></p>
            <p><font size="4"><b>Cont�ctenos</b></font><br>
              
              <span class="Estilo25">Jr. La Mar 236 ( Plaza Zarumilla ) Telef. 326493</span>
              </p>
              <br><IMG SRC="img/tt.jpg" width="740" height="480"><br>
            </p>            </tr>
      </tbody></table>
    </td>
    <td width="9%">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#0066CC" width="17%"><img src="img/spacer.gif" width="116" height="1"></td>
    <td width="11%"><img src="img/bottomcurve0.gif" width="100%" height="82"></td>
    <td width="7%">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
</tbody></table>
</body>
</html>