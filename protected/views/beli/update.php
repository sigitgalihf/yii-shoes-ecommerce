<?php
/* @var $this BeliController */
/* @var $model Beli */

$this->breadcrumbs=array(
	'Belis'=>array('index'),
	$model->kd_beli=>array('view','id'=>$model->kd_beli),
	'Update',
);

$this->menu=array(
	array('label'=>'List Beli', 'url'=>array('index')),
	array('label'=>'Create Beli', 'url'=>array('create')),
	array('label'=>'View Beli', 'url'=>array('view', 'id'=>$model->kd_beli)),
	array('label'=>'Manage Beli', 'url'=>array('admin')),
);
?>

<h1>Update Beli <?php echo $model->kd_beli; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>