<?php

namespace MikroOdeme\Common;

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

use MikroOdeme\Common\BaseResourceModel;

class SaleResourceModel extends BaseResourceModel
{

    public function __construct(){
        self::$wsdlAddress = "https://www.wirecard.com.tr/services/saleservice.asmx?wsdl";
    }

}
