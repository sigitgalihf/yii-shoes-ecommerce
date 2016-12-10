<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_barang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_barang), array('view', 'id'=>$data->kd_barang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_barang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_barang')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok')); ?>:</b>
	<?php echo CHtml::encode($data->stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warna_barang')); ?>:</b>
	<?php echo CHtml::encode($data->warna_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('images')); ?>:</b>
	<?php echo CHtml::encode($data->images); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('ukuran')); ?>:</b>
	<?php echo CHtml::encode($data->ukuran); ?>
	<br />


</div>