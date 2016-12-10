<?php
/* @var $this PembeliController */
/* @var $model Pembeli */

$this->breadcrumbs=array(
	'Pembelis'=>array('index'),
	$model->email=>array('view','id'=>$model->email),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pembeli', 'url'=>array('index')),
	array('label'=>'Create Pembeli', 'url'=>array('create')),
	array('label'=>'View Pembeli', 'url'=>array('view', 'id'=>$model->email)),
	array('label'=>'Manage Pembeli', 'url'=>array('admin')),
);
?>

<h1>Update Pembeli <?php echo $model->email; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>