<?php
/* @var $this BeliController */
/* @var $data Beli */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_beli')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_beli), array('view', 'id'=>$data->kd_beli)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_beli')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_beli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pembeli')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pembeli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telefon')); ?>:</b>
	<?php echo CHtml::encode($data->no_telefon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_barang')); ?>:</b>
	<?php echo CHtml::encode($data->kd_barang); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_beli')); ?>:</b>
	<?php echo CHtml::encode($data->total_beli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_bayar')); ?>:</b>
	<?php echo CHtml::encode($data->total_bayar); ?>
	<br />

	*/ ?>

</div>