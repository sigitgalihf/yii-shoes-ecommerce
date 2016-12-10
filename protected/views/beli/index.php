<?php
/* @var $this BeliController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Belis',
);

$this->menu=array(
	array('label'=>'Create Beli', 'url'=>array('create')),
	array('label'=>'Manage Beli', 'url'=>array('admin')),
);
?>

<h1>Belis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
