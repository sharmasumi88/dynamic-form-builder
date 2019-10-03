<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-03
 * Time: 01:38
 */

class TypeCheckbox extends Fields
{

    public $checkboxHtml;
    function __construct() {

        /* Do nothing here */

    }


     function __call($name,$field){
         $field = $field[0];
         $checkboxHtml = "<div class='checkbox-".$field['class']."'>";
            foreach ($field['options'] as $key => $option){
                $checkboxHtml .= "<label>".$option."</label>";
                $checkboxHtml .= "<input type='checkbox' value='".$key."' name='".$field['id']."[]'/>";
            }

         $checkboxHtml .= "</div>";
         $this->checkboxHtml = $checkboxHtml;
    }


}