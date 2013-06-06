<?php
/* @var $this TransferController */
/* @var $model Transfer */

$this->breadcrumbs=array(
	'Transfers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Transfer', 'url'=>array('index')),
	array('label'=>'Create Transfer', 'url'=>array('create')),
	array('label'=>'Update Transfer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Transfer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transfer', 'url'=>array('admin')),
);
?>

<h1>View Transfer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'player',
		'date',
		'from',
		'to',
		'price',
	),
)); ?>
