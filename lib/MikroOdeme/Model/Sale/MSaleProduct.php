<?php

namespace MikroOdeme\Model\Sale;

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

use MikroOdeme\Common\BaseModel;

class MSaleProduct extends BaseModel
{

    public function __construct(){
        $this->ProductId = 0;
        $this->Unit = 1;
    }

    public function setProductCategory($ProductCategory){
        $this->ProductCategory = $ProductCategory;
    }

    public function setProductDescription($ProductDescription){
        $this->ProductDescription = $ProductDescription;
    }

    public function setPrice($Price){
        $this->Price = (double)$Price;
    }

}