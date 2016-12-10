<?php
/* @var $this BeliController */
/* @var $model Beli */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beli-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_beli'); ?>
		<?php echo $form->textField($model,'tgl_beli'); ?>
		<?php echo $form->error($model,'tgl_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pembeli'); ?>
		<?php echo $form->textField($model,'nama_pembeli',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nama_pembeli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_telefon'); ?>
		<?php echo $form->textField($model,'no_telefon',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'no_telefon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_barang'); ?>
		<?php echo $form->textField($model,'kd_barang'); ?>
		<?php echo $form->error($model,'kd_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_beli'); ?>
		<?php echo $form->textField($model,'total_beli'); ?>
		<?php echo $form->error($model,'total_beli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_bayar'); ?>
		<?php echo $form->textField($model,'total_bayar'); ?>
		<?php echo $form->error($model,'total_bayar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->