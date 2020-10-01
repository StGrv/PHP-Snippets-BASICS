<?php
use frontend\models\Problems ;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="problems-form">
    
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($problems, 'name')->label('Please specify your name:') ?>
        <?= $form->field($problems, 'email') ?>
        <?= $form->field($problems, 'address') ?>
        <?= $form->field($problems, 'phonenum') ?>
        <?= $form->field($problems, 'info') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>

<?php

//Test if the number is 10 or more
try {
    $num = 5 ;
    if($num <= 10)  
{
        
//If the exception throws then catch block will display the following error message
throw new Exception("The number must be 10 or more!") ;
}
    
//Executes this line if no error appears.    
else { echo "The number is: " .$num ; }

}
 
//catch the exception from try block
catch(Exception $e)
{
//Print the error message passed from try block
echo $e->getMessage();
}

finally {
    echo "<br>" ."Maths is not thard hard c'mon!" ;
}
 
?>