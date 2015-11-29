<?php

namespace MikroOdeme\Validation;

/**
 * Mikro Odeme library in PHP.
 *
 * @package   mikro-odeme
 * @version   0.1.0
 * @author    Hüseyin Emre Özdemir <h.emre.ozdemir@gmail.com>
 * @copyright Hüseyin Emre Özdemir <h.emre.ozdemir@gmail.com>
 * @license   http://opensource.org/licenses/GPL-3.0 GNU General Public License 3.0
 * @link      https://github.com/ozdemirr/mikro-odeme
 */

use MikroOdeme\Exception\MikroOdemeException;

class MikroOdemeErrorChecker
{

    public static function check($resultObject, $methodName){

        $baseProperty = $methodName."Result";

        //something went wrong on Mikro Ödeme
        if($resultObject->$baseProperty->StatusCode == 1){
            throw new MikroOdemeException($resultObject->$baseProperty->ErrorMessage);
        }

    }

}