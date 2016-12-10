<?php
/* @var $this BeliController */
/* @var $model Beli */
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
		<?php echo $form->label($model,'tgl_beli'); ?>
		<?php echo $form->textField($model,'tgl_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pembeli'); ?>
		<?php echo $form->textField($model,'nama_pembeli',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_telefon'); ?>
		<?php echo $form->textField($model,'no_telefon',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_barang'); ?>
		<?php echo $form->textField($model,'kd_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_beli'); ?>
		<?php echo $form->textField($model,'total_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_bayar'); ?>
		<?php echo $form->textField($model,'total_bayar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->