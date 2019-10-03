<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-02
 * Time: 16:00
 */


require 'classes/fields/TypeText.php';
require 'classes/fields/TypeHidden.php';
require 'classes/fields/TypeTextarea.php';
require 'classes/fields/TypeEmail.php';
require 'classes/fields/TypeCheckbox.php';
require 'classes/fields/TypeSelect.php';
require 'classes/fields/Repeter.php';
require 'classes/fields/TypeSubmit.php';

abstract class Fields
{

    public $html;
    public $output;
    public $fields;


    function __construct($fields) {
        $this->fieldType($fields['fields']);
    }
    public function initForm($fieldsData){

        $output = "<form method='".$this->elements['method']."' action='".$this->elements['action']."' class='".$this->elements['class']."' name='".$this->elements['name']."'>";
        $output .= $fieldsData;
        $output .= "</form>";
        $this->output = $output;
    }

    public function fieldType($fields=null){
       //print_r($fields['fields']);

        foreach($fields['fields'] as $type){
            switch ($type['type']){
                case 'text':
                   $textType = new TypeText;
                   $textType->textHtml($type);
                   $html[] = $textType->textHtml;
                    break;
                case 'hidden':
                    $hiddenType = new TypeHidden;
                    $hiddenType->hiddenHtml($type);
                    $html[] = $hiddenType->hiddenHtml;
                    break;
                case 'textarea':
                    $textareaType= new TypeTextarea;
                    $textareaType->textareaHtml($type);
                    $html[] = $textareaType->textareaHtml;
                    break;
                case 'email':
                    $emailType= new TypeEmail;
                    $emailType->emailHtml($type);
                    $html[] = $emailType->emailHtml;
                    break;
                case 'checkbox':
                    $checkboxType= new TypeCheckbox;
                    $checkboxType->checkboxHtml($type);
                    $html[] = $checkboxType->checkboxHtml;
                    break;
                case 'select':
                    $selectType = new TypeSelect;
                    $selectType->selectHtml($type);
                    $html[] = $selectType->selectHtml;
                    //$selectType->create($type);
                    break;
                case 'repeter':
                    $repeterType = new Repeter;
                    $repeterType->repeterHtml($type);
                    $html[] = $repeterType->repeterHtml;
                    break;
                case 'submit':
                    $submitType= new TypeSubmit;
                    $submitType->submitHtml($type);
                    $html[] = $submitType->submitHtml;
                    break;
            }
        }
        $this->html = $html;
    }

   public function render(){

       $output  = '';
        foreach ($this->html as $outputData){
            $output .= $outputData;
        }
        $this->initForm($output);

       // print_r($this);
        echo $this->output;
    }

}