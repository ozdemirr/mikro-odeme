<?php

namespace MikroOdeme\Enum;

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

class PaymentTypeId
{
    CONST TEK_CEKIM = 1;
    CONST AYLIK_ABONELIK = 2;
    CONST HAFTALIK_ABONELIK = 3;
    CONST IKI_AYLIK_ABONELIK = 4;
    CONST UC_AYLIK_ABONELIK = 5;
    CONST ALTI_AYLIK_ABONELIK = 6;
    CONST AYLIK_DENEMELI = 7;
    CONST HAFTALIK_DENEMELI = 8;
    CONST IKI_HAFTALIK_DENEMELI = 9;
    CONST UC_AYLIK_DENEMELI = 10;
    CONST ALTI_AYLIK_DENEMELI = 11;
    CONST OTUZ_GUNLUK = 13;
}
