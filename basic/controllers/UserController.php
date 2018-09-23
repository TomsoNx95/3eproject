<?php
/**
 * Created by PhpStorm.
 * User: tppli
 * Date: 23.09.2018
 * Time: 12:17
 */

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
}