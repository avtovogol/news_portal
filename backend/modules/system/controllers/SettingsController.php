<?php

namespace backend\modules\system\controllers;


use common\components\keyStorage\FormModel;
use Yii;
use yii\web\Controller;

class SettingsController extends Controller
{

    public function actionIndex()
    {
        $model = new FormModel([
            'keys' => [
                'frontend.maintenance' => [
                    'label' => 'Сервисный режим фронтенд части',
                    'type' => FormModel::TYPE_DROPDOWN,
                    'items' => [
                        'disabled' => 'Неактивно',
                        'enabled' => 'Активно',
                    ],
                ],
                'backend.theme-skin' => [
                    'label' => 'Тема панели управления',
                    'type' => FormModel::TYPE_DROPDOWN,
                    'items' => [
                        'skin-black' => 'skin-black',
                        'skin-blue' => 'skin-blue',
                        'skin-green' => 'skin-green',
                        'skin-purple' => 'skin-purple',
                        'skin-red' => 'skin-red',
                        'skin-yellow' => 'skin-yellow',
                    ],
                ],
                'backend.layout-fixed' => [
                    'label' => 'Фиксированный шаблон панели управления',
                    'type' => FormModel::TYPE_CHECKBOX,
                ],
                'backend.layout-boxed' => [
                    'label' => 'Коробочный шаблон панели управления',
                    'type' => FormModel::TYPE_CHECKBOX,
                ],
                'backend.layout-collapsed-sidebar' => [
                    'label' => 'Скрыть боковую панель',
                    'type' => FormModel::TYPE_CHECKBOX,
                ],
                'backend.sidebar-mini' => [
                    'label' => 'Mini Backend Sidebar on Collapse',
                    'type' => FormModel::TYPE_CHECKBOX,
                ],
            ],
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('alert', [
                'body' => 'Настройки были успешно сохранены',
                'options' => ['class' => 'alert alert-success'],
            ]);

            return $this->refresh();
        }

        return $this->render('index', ['model' => $model]);
    }

}