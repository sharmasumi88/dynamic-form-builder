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
                   $textType = new TypeText();
                   $html[] = $textType->create($type);
                    break;
                case 'hidden':
                    $hiddenType = new TypeHidden();
                    $html[] = $hiddenType->create($type);
                    break;
                case 'textarea':
                    $textareaType= new TypeTextarea();
                    $html[] = $textareaType->create($type);
                    break;
                case 'email':
                    $emailType= new TypeEmail();
                    $html[] = $emailType->create($type);
                    break;
                case 'checkbox':
                    $checkboxType= new TypeCheckbox();
                    $html[] = $checkboxType->create($type);
                    break;
                case 'select':
                    $selectType= new TypeSelect();
                    $html[] = $selectType->create($type);
                    break;
                case 'submit':
                    $submitType= new TypeSubmit();
                    $html[] = $submitType->create($type);
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
        echo $this->output;
    }

}