<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-02
 * Time: 23:19
 */

class TypeHidden extends Fields
{


    function __construct() {

        /* Do nothing here */

    }


    public function create($field){

        $textHtml = "<div class='hidden-".$field['class']."'>";
        $textHtml .= "<input type='hidden' value='".$field['value']."' name='".$field['id']."'/>";
        $textHtml .= "</div>";
        return $textHtml;
    }


}