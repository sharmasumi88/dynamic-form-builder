<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-03
 * Time: 23:38
 */

class Repeter extends Fields
{


    public $repeterHtml;

    public function __construct()
    {

    }

    public function __call($name, $arguments)
    {
        $arguments = $arguments[0];
        $this->fieldType($arguments);
        $repeterHtml = '<div class="repeter-1">';
        $repeterHtml .= '<h4 class="repeter-1">Add More fields</h4><div class="rep-1">';
        foreach ($this->html as $html){

            $repeterHtml .= $html;
        }
        $repeterHtml .= "</div><a class='add-more'>Add More</a></div>";
        $this->repeterHtml = $repeterHtml;
       // print_r($repeterHtml);

        // TODO: Implement __call() method.
    }


}