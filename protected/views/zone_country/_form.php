<?php
/**
 * Ommu Zone Countries (ommu-zone-country)
 * @var $this ZonecountryController
 * @var $model OmmuZoneCountry
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2015 Ommu Platform (ommu.co)
 * @link https://github.com/oMMu/Ommu-Core
 * @contect (+62)856-299-4114
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'ommu-zone-country-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>
<div class="dialog-content">
	<fieldset>
		<?php //begin.Messages ?>
		<div id="ajax-message">
			<?php echo $form->errorSummary($model); ?>
		</div>
		<?php //begin.Messages ?>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'country'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'country',array('maxlength'=>64)); ?>
				<?php echo $form->error($model,'country'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'code'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'code',array('maxlength'=>2)); ?>
				<?php echo $form->error($model,'code'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>
	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Phrase::trans(1,0) : Phrase::trans(2,0) ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Phrase::trans(4,0), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>

