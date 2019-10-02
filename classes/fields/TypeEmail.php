<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-03
 * Time: 00:03
 */

class TypeEmail extends Fields
{

    function __construct() {

        /* Do nothing here */

    }


    public function create($field){

        $textHtml = "<div class='email-".$field['class']."'>";
        $textHtml .= "<input type='email' value='".$field['value']."' name='".$field['id']."'/>";
        $textHtml .= "</div>";
        return $textHtml;
    }


}