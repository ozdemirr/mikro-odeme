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

use MikroOdeme\Common\BaseModel;
use MikroOdeme\Core\SoapConnection;
use MikroOdeme\Validation\MikroOdemeErrorChecker;
use MikroOdeme\Model\Shared\Token;

class BaseResourceModel extends BaseModel
{

    protected static $wsdlAddress;
    private $soapConnection;
    private static $lastRequest;
    private static $lastResponse;

    public function setToken(Token $token){
        $this->token = $token;
    }

    protected function executeCall($methodName, $requestData){
        $this->soapConnection = new SoapConnection(self::$wsdlAddress);
        $resultObject = $this->soapConnection->execute($methodName, $requestData);
        //preprocess error codes and throw error
        $this->preProcessErrorCodes($resultObject, $methodName);
        $this->setResultToProperties($resultObject);
        self::$lastResponse = $this->soapConnection->getLastResponse();
        self::$lastRequest = $this->soapConnection->getLastRequest();
    }

    private function preProcessErrorCodes($resultObject, $methodName){
        MikroOdemeErrorChecker::check($resultObject, $methodName);
    }

    private function setResultToProperties($resultObject){
        $arrayOfResultObject = $this->objectToArray($resultObject);
        if(!empty($arrayOfResultObject)){
            foreach($arrayOfResultObject as $key => $value){
                if(is_array($value)){
                    foreach($value as $k => $v){
                        $this->__set($k, $v);
                    }
                }
            }
        }
    }

    private function objectToArray( $object ){
        if( !is_object( $object ) && !is_array( $object ) )
        {
            return $object;
        }
        if( is_object( $object ) )
        {
            $object = get_object_vars( $object );
        }
        return array_map( array($this, 'objectToArray'), $object );
    }

    public function getLastRequest(){
        return self::$lastRequest;
    }

    public function getLastResponse(){
        return self::$lastResponse;
    }

    public function send(){

        $requestData = $this->toArray();

        $this->executeCall(
            $this->getClassName(),
            $requestData
        );

    }

    private function getClassName(){
        $classPath = get_class($this);
        $classPathArray = explode("\\",$classPath);
        return end($classPathArray);
    }

}