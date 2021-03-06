<?php
/**
 * DashboardController
 * @var $this yii\web\View
 *
 * Reference start
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@ommu.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2018 OMMU (www.ommu.id)
 * @created date 3 January 2018, 00:24 WIB
 * @link https://github.com/ommu/ommu
 *
 */

namespace app\modules\admin\controllers;

use app\components\Controller;
use mdm\admin\components\AccessControl;

class DashboardController extends Controller
{
	/**
	 * {@inheritdoc}
	 */
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function allowAction(): array {
		return ['index'];
	}

	/**
	 * {@inheritdoc}
	 */
	public function actionIndex()
	{
		// $migrationPath = '/Users/putrasudaryanto/htdocs/project_ommu_module/module_users-v2/migrations';
		// \app\commands\MigrateController::webMigrateUp($migrationPath);
		$this->view->title = 'DashboardControllers';
		$this->view->description = '';
		$this->view->keywords = '';
		return $this->render('admin_index');
	}

}
