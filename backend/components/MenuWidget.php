<?php

namespace app\components;
use yii\base\Widget;
use app\modules\wallet\models\User;
use Yii;

class MenuWidget extends Widget{

    public $tpl;
    public $model;
    public $data;
    public $tree;
    public $menuHtml;

    public function init(){
        parent::init();
        if( $this->tpl === null ){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){

        $this->data = User::find()->indexBy('id')->asArray()->all();
        $this->menuHtml = $this->getMenuHtml($this->data);
        return $this->menuHtml;
    }



    protected function getMenuHtml($tree, $tab = ''){
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category, $tab);
        }
        return $str;
    }

    protected function catToTemplate($category, $tab){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}