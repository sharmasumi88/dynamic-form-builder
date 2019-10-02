<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-03
 * Time: 00:06
 */

class TypeSubmit extends Fields
{

    function __construct() {

        /* Do nothing here */

    }


    public function create($field){

        $textHtml = "<div class='submit-".$field['class']."'>";
        $textHtml .= "<input type='submit' value='".$field['value']."' name='".$field['id']."'/>";
        $textHtml .= "</div>";
        return $textHtml;
    }

}