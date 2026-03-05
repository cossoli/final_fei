<?php

namespace app\modules\controllers;

use yii\rest\ActiveController
;


/**
 * Default controller for the `apiv1` module
 */
class ComprobanteController extends ActiveController
{
    public $modelClass = 'app\modules\apiv1\models\Comprobante';
  
 public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset($behaviors['authenticator']); // ← esto va acá
        return $behaviors;
    }


}

