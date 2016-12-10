<?php
/* @var $this DetailBeliController */
/* @var $model DetailBeli */

$this->breadcrumbs=array(
	'Detail Belis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DetailBeli', 'url'=>array('index')),
	array('label'=>'Manage DetailBeli', 'url'=>array('admin')),
);
?>

<h1>Create DetailBeli</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>