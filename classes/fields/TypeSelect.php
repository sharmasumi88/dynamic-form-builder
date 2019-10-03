<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-03
 * Time: 01:43
 */

class TypeSelect extends Fields
{

    public $selectHtml;

    function __construct() {

        /* Do nothing here */

    }

    function __call($name,$prop){
        $prop = $prop[0];
        $selectHtml = "<div class='select-".$prop['class']."'>";
        $selectHtml .= "<select class='select-".$prop['class']."' name='".$prop['id']."'>";

        foreach ($prop['options'] as $key => $option){
            $selectHtml .= "<option value='".$key."' >".$option."</option>";

        }

        $selectHtml .= "</select>";
        $selectHtml .= "</div>";
        $this->selectHtml = $selectHtml;

    }


}