<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-02
 * Time: 15:47
 */

class TypeText extends Fields
{

    function __construct() {

        /* Do nothing here */

    }

    public function create($field){

        $textHtml = "<div class='text-".$field['class']."'>";
        $textHtml .= "<input type='text' value='".$field['value']."' name='".$field['id']."'/>";
        $textHtml .= "</div>";
        return $textHtml;
    }

}