<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace controllers;

use models\modeloCadenas;

require 'application/models/modeloCadenas.php';



class cadenasControlador
{
    public function  concatAction()
    {
        $action = 'doConcat';
        require 'application/views/form.phtml';
    }

    public function doConcatAction()
    {
        $model     = new modeloCadenas($_POST['cad1'], $_POST['cad2']);
        $model->concatenar();
        $resultado = $model->getResult();
        require 'application/views/result.phtml';
    }

    public  function vocalesAction()
    {
        $action='doVocals';
        require 'application/views/form.phtml';
    }
    public function doVocalsAction()
    {
        $model  =new modeloCadenas($_POST['cad1'], $_POST['cad2']);
        $model  ->vocales();
        $resultado=$model->getResult();
        require 'application/views/result.phtml';
    }
} 