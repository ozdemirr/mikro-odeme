<?php

namespace MikroOdeme\Model\Shared;

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
use MikroOdeme\Enum\RequestGsmOperator;

class Input extends BaseModel
{

    public function __construct(){
        $this->RequestGsmType = 0;
        $this->TurkcellServiceId = 0;
        $this->ReceivedSMSObjectId = "00000000-0000-0000-0000-000000000000";
    }

    public function setMpay($MPAY){
        $this->MPAY = $MPAY;
    }

    public function setContent($Content){
        $this->Content = $Content;
    }

    public function setSendOrderResult($SendOrderResult){
        $this->SendOrderResult = $SendOrderResult;
    }

    public function setPaymentTypeId($PaymentTypeId){
        $this->PaymentTypeId = $PaymentTypeId;
    }

    public function setReceivedSMSObjectId($ReceivedSMSObjectId){
        $this->ReceivedSMSObjectId = $ReceivedSMSObjectId;
    }

    public function setSendNotificationSMS($SendNotificationSMS){
        $this->SendNotificationSMS = $SendNotificationSMS;
    }

    public function setOnSuccessfulSMS($OnSuccessfulSMS){
        $this->OnSuccessfulSMS = $OnSuccessfulSMS;
    }

    public function setOnErrorSMS($OnErrorSMS){
        $this->OnErrorSMS = $OnErrorSMS;
    }

    public function setRequestGsmOperator($RequestGsmOperator){
        $this->RequestGsmOperator = $RequestGsmOperator;
        //append extra
        $this->setExtra($RequestGsmOperator);
    }

    public function setUrl($Url){
        $this->Url = $Url;
    }

    public function setSuccessfulPageUrl($SuccessfulPageUrl){
        $this->SuccessfulPageUrl = $SuccessfulPageUrl;
    }

    public function setErrorPageUrl($ErrorPageUrl){
        $this->ErrorPageUrl = $ErrorPageUrl;
    }

    public function setCountry($Country){
        $this->Country = $Country;
    }

    public function setCurrency($Currency){
        $this->Currency = $Currency;
    }

    public function setTurkcellServiceId($TurkcellServiceId){
        $this->TurkcellServiceId = $TurkcellServiceId;
    }

    private function setProductList($ProductList){
        $this->ProductList = $ProductList;
    }

    private function getProductList(){
        return $this->ProductList;
    }

    public function addMSaleProduct($MSaleProduct)
    {
        if (!$this->getProductList()) {
            $this->setProductList(array($MSaleProduct));
        } else {
            $this->setProductList(
                array_merge($this->getProductList(), array($MSaleProduct))
            );
        }
    }

    private function setExtra($RequestGsmOperator){
        if($RequestGsmOperator == RequestGsmOperator::CREDIT_CARD){
            $this->Extra = "3pay=true&cconly=true";
        }
    }

    public function setCustomerIpAddress($CustomerIpAddress){
        $this->CustomerIpAddress = $CustomerIpAddress;
    }

    public function setGsm($gsm){
        $this->Gsm = $gsm;
    }

    public function setBeginDate($BeginDate){
        $this->BeginDate = $BeginDate;
    }

    public function setEndDate($EndDate){
        $this->EndDate = $EndDate;
    }

    public function setProductId($ProductId){
        $this->ProductId = $ProductId;
    }

    public function setOrderChannelId($OrderChannelId){
        $this->OrderChannelId = $OrderChannelId;
    }

    public function setActive($Active){
        $this->Active = $Active;
    }

    public function setSubscriberType($SubscriberType){
        $this->SubscriberType = $SubscriberType;
    }

    public function setStartDateMin($StartDateMin){
        $this->StartDateMin = $StartDateMin;
    }

    public function setStartDateMax($StartDateMax){
        $this->StartDateMax = $StartDateMax;
    }

    public function setLastSuccessfulPaymentDateMin($LastSuccessfulPaymentDateMin){
        $this->LastSuccessfulPaymentDateMin = $LastSuccessfulPaymentDateMin;
    }

    public function setLastSuccessfulPaymentDateMax($LastSuccessfulPaymentDateMax){
        $this->LastSuccessfulPaymentDateMax = $LastSuccessfulPaymentDateMax;
    }

}