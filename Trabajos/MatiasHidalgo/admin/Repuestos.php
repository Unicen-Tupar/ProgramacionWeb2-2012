<?php
require_once ('../config.php');
require_once('../DataObjects/Repuestos.php');

require_once 'HTML/Template/Sigma.php';

session_start();

$tpl = new HTML_Template_Sigma('.');

if(isset($_SESSION['admin'])){
	$error=$tpl->loadTemplateFile("../templates/admin/Repuestos.html");
	$tpl->setVariable('titulo','Gestion Administrativa de Repuestos');
	} else {
		$error=$tpl->loadTemplateFile("../templates/error.html");
		$tpl->setVariable('titulo','Error: Acceso Denegado');
		$tpl->setVariable('error','Intento ingresar a una pagina invalida');
		$tpl->setVariable('anterior','index.php');
		$tpl->parse('Error');
	}
$tpl->parse('Cabecera');

$tpl->show();
?>