<?php
/* @var $this TransferController */
/* @var $model Transfer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
	$script = Yii::app()->clientscript->registerScript(
		'update_player_club_on_page_load',
		'$(document).ready(function(){
			$("#'.CHtml::activeId($model, 'player').'").change();
		});'
	);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transfer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'player'); ?>
		<?php echo $form->dropDownList($model,'player', CHtml::listData(Player::model()->findAll(), 
		'id', 'name'), array(
			'ajax' => array(
			'type'=>'POST', //request type
			'url'=>CController::createUrl('transfer/getPlayerClub'), //url to call.
			//Style: CController::createUrl('currentController/methodToCall')
			'update'=>'#from_name', //selector to update
			))); ?>
		<?php echo $form->error($model,'player'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->dateField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from'); ?>
		<div id="from_name"> <?php echo "wait for data..." ?> </div>
		<?php echo $form->error($model,'from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to'); ?>
		<?php echo $form->dropDownList($model,'to', CHtml::listData(Club::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->numberField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->