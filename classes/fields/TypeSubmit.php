<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-03
 * Time: 00:06
 */

class TypeSubmit extends Fields
{

    public $submitHtml;
    function __construct() {

        /* Do nothing here */

    }


    public function __call($name,$field){
        $field = $field[0];
        $submitHtml = "<div class='submit-".$field['class']."'>";
        $submitHtml .= "<input type='submit' value='".$field['value']."' name='".$field['id']."'/>";
        $submitHtml .= "</div>";
        $this->submitHtml = $submitHtml;
    }

}