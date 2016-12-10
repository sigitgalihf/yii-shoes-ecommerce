<?php
/* @var $this BeliController */
/* @var $model Beli */

$this->breadcrumbs=array(
	'Belis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Beli', 'url'=>array('index')),
	array('label'=>'Create Beli', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('beli-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Belis</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'beli-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kd_beli',
		'tgl_beli',
		'nama_pembeli',
		'alamat',
		'email',
		'no_telefon',
		/*
		'kd_barang',
		'total_beli',
		'total_bayar',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
