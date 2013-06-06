<?php
/* @var $this TransferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transfers',
);

$this->menu=array(
	array('label'=>'Create Transfer', 'url'=>array('create')),
	array('label'=>'Manage Transfer', 'url'=>array('admin')),
);
?>

<h1>Transfers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
