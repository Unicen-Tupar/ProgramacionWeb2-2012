<?php
/**
 * Table Definition for consulta
 */
require_once 'DB/DataObject.php';

class DO_Consulta extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'consulta';            // table name
    public $idconsulta;                      // int(4)  primary_key not_null
    public $descripcion;                     // text   not_null
    public $idcliente;                       // int(4)  unique_key not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DO_Consulta',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
