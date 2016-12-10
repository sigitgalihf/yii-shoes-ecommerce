<?php
/* @var $this PembeliController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pembelis',
);

$this->menu=array(
	array('label'=>'Create Pembeli', 'url'=>array('create')),
	array('label'=>'Manage Pembeli', 'url'=>array('admin')),
);
?>

<h1>Pembelis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
