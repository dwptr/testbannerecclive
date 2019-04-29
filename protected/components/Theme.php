<?php
/**
 * Theme class
 * 
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 27 April 2019, 00:42 WIB
 * @link https://github.com/ommu/ommu
 * 
 */

namespace app\components;

use Yii;

class Theme extends \yii\base\Theme
{
	/**
	 * {@inheritdoc}
	 */
	public function getName() {
		$themePath = preg_replace("/(\/)/", '\/', Yii::getAlias('@themes'));

		return preg_replace("/(\/)/", '', preg_replace("/^($themePath)/", '', $this->basePath));
	}
}