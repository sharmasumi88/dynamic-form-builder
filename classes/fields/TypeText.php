<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-02
 * Time: 15:47
 */

class TypeText extends Fields
{

    public $textHtml;
    function __construct() {

        /* Do nothing here */

    }

     function __call($name,$field){
         $field = $field[0];
        $textHtml = "<div class='text-".$field['class']."'>";
        $textHtml .= "<input type='text' value='".$field['value']."' name='".$field['id']."'/>";
        $textHtml .= "</div>";
        $this->textHtml = $textHtml;
    }

}