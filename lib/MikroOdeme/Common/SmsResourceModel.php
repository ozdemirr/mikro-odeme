<?php

namespace MikroOdeme\Common;

use MikroOdeme\Model\Shared\Input;

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

class SmsResourceModel extends BaseResourceModel
{

    public function __construct($custom = null){

        self::$wsdlAddress = "http://www.wirecard.com.tr/vas/services/msendsmsservice.asmx?wsdl";

        //this means, custom number will be used
        if(!is_null($custom)){
            self::$wsdlAddress = "http://www.wirecard.com.tr/vas/services/MCustomSendSMSService.asmx?wsdl";
        }

    }

    public function setInput(Input $input){
        $this->input = $input;
    }

}
