<?php
/* @var $this PembeliController */
/* @var $model Pembeli */

$this->breadcrumbs=array(
	'Pembelis'=>array('index'),
	$model->email,
);

$this->menu=array(
	array('label'=>'List Pembeli', 'url'=>array('index')),
	array('label'=>'Create Pembeli', 'url'=>array('create')),
	array('label'=>'Update Pembeli', 'url'=>array('update', 'id'=>$model->email)),
	array('label'=>'Delete Pembeli', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->email),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pembeli', 'url'=>array('admin')),
);
?>

<h1>View Pembeli #<?php echo $model->email; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nama_pembeli',
		'password',
		'alamat',
		'email',
		'no_telefon',
	),
)); ?>
