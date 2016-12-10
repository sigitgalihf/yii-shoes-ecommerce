<?php
/* @var $this BeliController */
/* @var $model Beli */

$this->breadcrumbs=array(
	'Belis'=>array('index'),
	$model->kd_beli,
);

$this->menu=array(
	array('label'=>'List Beli', 'url'=>array('index')),
	array('label'=>'Create Beli', 'url'=>array('create')),
	array('label'=>'Update Beli', 'url'=>array('update', 'id'=>$model->kd_beli)),
	array('label'=>'Delete Beli', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kd_beli),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Beli', 'url'=>array('admin')),
);
?>

<h1>View Beli #<?php echo $model->kd_beli; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kd_beli',
		'tgl_beli',
		'nama_pembeli',
		'alamat',
		'email',
		'no_telefon',
		'kd_barang',
		'total_beli',
		'total_bayar',
	),
)); ?>
