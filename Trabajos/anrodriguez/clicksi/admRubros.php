<?php
include_once 'config.php';
include_once("HTML/Template/Sigma.php");

include_once 'clases/pear/dataobjects/Rubro.php';

$tpl = new HTML_Template_Sigma(".");
$retOK = $tpl->loadTemplateFile("./templates/admRubros.html");

if (!$retOK) {
    die ('Error al cargar template');
}

$rubro     = new DO_Rubro();
$nRubros   = $rubro->find();

if ($nRubros>0) {
	while($rubro->fetch()) {
        $tpl->setVariable(rubroNombre, $rubro->getnombre());
        $tpl->setVariable(rubroId, $rubro->getid());
        $tpl->parse('rubros_administracion');
    }
}

$tpl->show();

?>
