<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-03
 * Time: 01:38
 */

class TypeCheckbox extends Fields
{

    function __construct() {

        /* Do nothing here */

    }


    public function create($field){

        $textHtml = "<div class='email-".$field['class']."'>";
            foreach ($field['options'] as $key => $option){
                $textHtml .= "<label>".$option."</label>";
                $textHtml .= "<input type='checkbox' value='".$key."' name='".$field['id']."[]'/>";
            }

        $textHtml .= "</div>";
        return $textHtml;
    }


}