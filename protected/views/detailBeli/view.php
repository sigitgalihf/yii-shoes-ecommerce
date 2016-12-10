<?php
/* @var $this DetailBeliController */
/* @var $model DetailBeli */

$this->breadcrumbs=array(
	'Detail Belis'=>array('index'),
	$model->kd_beli,
);

$this->menu=array(
	array('label'=>'List DetailBeli', 'url'=>array('index')),
	array('label'=>'Create DetailBeli', 'url'=>array('create')),
	array('label'=>'Update DetailBeli', 'url'=>array('update', 'id'=>$model->kd_beli)),
	array('label'=>'Delete DetailBeli', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kd_beli),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetailBeli', 'url'=>array('admin')),
);
?>

<h1>View DetailBeli #<?php echo $model->kd_beli; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kd_beli',
		'kd_pembeli',
		'kd_barang',
	),
)); ?>
