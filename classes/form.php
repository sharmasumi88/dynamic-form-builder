<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-02
 * Time: 15:28
 */

require 'classes/Fields.php';

class form extends Fields
{

    function __construct($elements) {

        /* Do nothing here */
        $this->elements = $elements;
        $this->createForm($this->elements);

    }

    public function createForm($elements){

        $this->fieldType($elements);
    }

    public function render()
    {
        parent::render();
    }
}