<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19" style="color:#f50057;">
	<div id="content" style="border:10px solid #f50057; border-radius:50px;">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last" style="margin-top:-120px; margin-left:-950px;" >
	<div id="sidebar" >
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>