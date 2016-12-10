<?php
/* @var $this DetailBeliController */
/* @var $model DetailBeli */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detail-beli-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_pembeli'); ?>
		<?php echo $form->textField($model,'kd_pembeli'); ?>
		<?php echo $form->error($model,'kd_pembeli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_barang'); ?>
		<?php echo $form->textField($model,'kd_barang'); ?>
		<?php echo $form->error($model,'kd_barang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->