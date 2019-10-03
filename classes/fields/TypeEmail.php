<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-03
 * Time: 00:03
 */

class TypeEmail extends Fields
{
    public $emailHtml;
    function __construct() {

        /* Do nothing here */

    }


     function __call($name,$field){
         $field = $field[0];
         $emailHtml = "<div class='email-".$field['class']."'>";
         $emailHtml .= "<input type='email' value='".$field['value']."' name='".$field['id']."'/>";
         $emailHtml .= "</div>";
         $this->emailHtml =  $emailHtml;
    }


}