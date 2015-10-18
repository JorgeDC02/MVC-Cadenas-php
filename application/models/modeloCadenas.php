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

namespace models;


class modeloCadenas
{
    private $cad1;
    private $cad2;
    private $resultado;

    public function __construct($_cad1, $_cad2)
    {
        $this->cad1 = $_cad1;
        $this->cad2 = $_cad2;
    }

    public function concatenar()
    {
        $this->resultado = $this->cad1.$this->cad2;
    }

    public function vocales()
    {
        $arrayCadena=str_split($this->cad1);
        $n=0;
        for($c=0; $c<strlen($this->cad1); $c++){
            if($arrayCadena[$c] == $this->cad2){
                $n++;
            }
        }
        $this->resultado = $n;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->resultado;
    }

}