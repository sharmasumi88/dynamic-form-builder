<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-02
 * Time: 23:26
 */

class TypeTextarea extends Fields
{
    public $textareaHtml;
    function __construct() {

        /* Do nothing here */

    }

     function __call($name,$field){
        $field = $field[0];
        $textareaHtml = "<div class='textarea-".$field['class']."'>";
        $textareaHtml .= "<textarea name='".$field['id']."' >".$field['value']."</textarea>";
        $textareaHtml .= "</div>";
        $this->textareaHtml =  $textareaHtml;
    }

}