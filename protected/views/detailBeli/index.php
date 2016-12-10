<?php
/* @var $this DetailBeliController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detail Belis',
);

$this->menu=array(
	array('label'=>'Create DetailBeli', 'url'=>array('create')),
	array('label'=>'Manage DetailBeli', 'url'=>array('admin')),
);
?>

<h1>Detail Belis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
