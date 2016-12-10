<?php
/* @var $this DetailBeliController */
/* @var $model DetailBeli */

$this->breadcrumbs=array(
	'Detail Belis'=>array('index'),
	$model->kd_beli=>array('view','id'=>$model->kd_beli),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetailBeli', 'url'=>array('index')),
	array('label'=>'Create DetailBeli', 'url'=>array('create')),
	array('label'=>'View DetailBeli', 'url'=>array('view', 'id'=>$model->kd_beli)),
	array('label'=>'Manage DetailBeli', 'url'=>array('admin')),
);
?>

<h1>Update DetailBeli <?php echo $model->kd_beli; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>