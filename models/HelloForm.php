<?php

namespace app\models;

use yii\base\Model;

Class HelloForm extends model{
    public $email;
    public $password;

    public function rules(){
        return [[['email','password'],'required'],
        ['email','email']
        
        ];
    }
}