<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: sumitsharma
 * Date: 2019-10-02
 * Time: 15:24
 */

require 'classes/form.php';



 
$form = array(
    'method'=>'POST',
    'action' => '#',
    'class' => 'custom-form',
    'name' => 'custom-form',
    'fields' => array(
            array(
            'id'=>'test',
            'type'=>'text',
            'class' =>'test',
            'value'=>'hello',
            ),
            array(
                'id'=>'shit',
                'type'=>'text',
                'class' =>'shit',
                'value'=>'shit',
            ),
            array(
                'id'=>'email',
                'type'=>'email',
                'class' =>'email',
                'value'=>'hello@email.com',
            ),
            array(
                'id'=>'id',
                'type'=>'hidden',
                'class' =>'hidden-text',
                'value'=>'hello',
            ),
            array(
                'id'=>'skills',
                'type'=>'checkbox',
                'class' =>'checkbox-text',
                'options'=> array(
                    'php'=>'PHP',
                    'html'=>'HTML',
                    'css'=>'CSS',
                    'jquery'=>'jQuery',
                ),
            ),
            array(
                'id'=>'skills-select',
                'type'=>'select',
                'class' =>'select-text',
                'options'=> array(
                    'php'=>'PHP',
                    'html'=>'HTML',
                    'css'=>'CSS',
                    'jquery'=>'jQuery',
                ),
            ),
            array(
                'type'=>'repeter',
                'fields' => array(
                    array(
                        'id'=>'rshit',
                        'type'=>'text',
                        'class' =>'rshit',
                        'value'=>'rshit',
                    ),
                    array(
                        'id'=>'remail',
                        'type'=>'email',
                        'class' =>'remail',
                        'value'=>'rhello@email.com',
                    )
                )
            ),
            array(
                'id'=>'message',
                'type'=>'textarea',
                'class' =>'textarea-text',
                'value'=>'Your Message',
            ),
            array(
                'id'=>'submit',
                'type'=>'submit',
                'class' =>'submit',
                'value'=>'Submit',
            ),
        )
);



$formBuild = new form($form);
$formBuild->render();

?>

<script>
    $(document).ready(function () {
        $("a.add-more").click(function() {
            let rendonid = Math.random().toString(36).substring(7);
            var element = $(this).prev();
            var newElement = element.html();
            $(this).before('<div class="rep-'+rendonid+'">'+newElement+'</div>');
        });
    })

</script>
