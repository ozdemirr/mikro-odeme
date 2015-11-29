<?php

namespace MikroOdeme\Model\Sale;

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

use MikroOdeme\Common\SaleResourceModel;

class SaleWithoutConfirm extends SaleResourceModel
{

    public function setInput(Input $input){
        $this->input = $input;
    }

}

