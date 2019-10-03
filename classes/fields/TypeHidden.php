<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-02
 * Time: 23:19
 */

class TypeHidden extends Fields
{

    public $hiddenHtml;
    function __construct() {

        /* Do nothing here */

    }


     function __call($name,$field){
         $field = $field[0];
         $hiddenHtml = "<div class='hidden-".$field['class']."'>";
         $hiddenHtml .= "<input type='hidden' value='".$field['value']."' name='".$field['id']."'/>";
         $hiddenHtml .= "</div>";
         $this->hiddenHtml = $hiddenHtml;
    }


}