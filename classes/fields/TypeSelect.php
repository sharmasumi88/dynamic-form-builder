<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-03
 * Time: 01:43
 */

class TypeSelect extends Fields
{

    function __construct() {

        /* Do nothing here */

    }


    public function create($field){

        $textHtml = "<div class='email-".$field['class']."'>";
        $textHtml .= "<select class='email-".$field['class']."' name='".$field['id'].">";

        foreach ($field['options'] as $key => $option){
            $textHtml .= "<option value='".$key."' >".$option."</option>";

        }

        $textHtml .= "</select>";
        $textHtml .= "</div>";
        return $textHtml;
    }


}