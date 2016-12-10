<?php
/* @var $this PembeliController */
/* @var $model Pembeli */

$this->breadcrumbs=array(
	'Pembelis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pembeli', 'url'=>array('index')),
	array('label'=>'Manage Pembeli', 'url'=>array('admin')),
);
?>

<h1>Create Pembeli</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>