<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-02
 * Time: 23:26
 */

class TypeTextarea extends Fields
{
    function __construct() {

        /* Do nothing here */

    }

    public function create($field){

        $textHtml = "<div class='textarea-".$field['class']."'>";
        $textHtml .= "<textarea name='".$field['id']."' >".$field['value']."</textarea>";
        $textHtml .= "</div>";
        return $textHtml;
    }

}