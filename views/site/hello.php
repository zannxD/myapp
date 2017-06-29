<?php
 use yii\helpers\HTML;
 use yii\widgets\ActiveForm;
 ?>

 
<?php 
  if(Yii::$app->session->hasFlash('success')){
?>
    <div class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times; </a>
      <strong> Success! </strong>  
  <?php    echo Yii::$app->session->getFlash('success');  ?>
    </div>
   
  <?php  } ?>
  
<?php $form=ActiveForm::begin([
    'options' => ['class' => 'form-horizontal'],
]); ?>
<?= $form->field($model,'email'); ?>
<?= $form->field($model,'password'); ?>

<?= Html::submitButton('Submit',['class' => 'btn btn-success']); ?>



  <?php ActiveForm::end() ?>

