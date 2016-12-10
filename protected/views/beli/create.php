<?php
/* @var $this BeliController */
/* @var $model Beli */

$this->breadcrumbs=array(
	'Belis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Beli', 'url'=>array('index')),
	array('label'=>'Manage Beli', 'url'=>array('admin')),
);
?>

<h1>Create Beli</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>