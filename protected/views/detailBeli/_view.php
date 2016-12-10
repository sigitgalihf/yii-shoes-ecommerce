<?php
/* @var $this DetailBeliController */
/* @var $data DetailBeli */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_beli')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_beli), array('view', 'id'=>$data->kd_beli)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_pembeli')); ?>:</b>
	<?php echo CHtml::encode($data->kd_pembeli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_barang')); ?>:</b>
	<?php echo CHtml::encode($data->kd_barang); ?>
	<br />


</div>