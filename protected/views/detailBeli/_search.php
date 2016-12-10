<?php
/* @var $this DetailBeliController */
/* @var $model DetailBeli */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kd_beli'); ?>
		<?php echo $form->textField($model,'kd_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_pembeli'); ?>
		<?php echo $form->textField($model,'kd_pembeli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_barang'); ?>
		<?php echo $form->textField($model,'kd_barang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->