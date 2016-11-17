Mikro Odeme PHP SDK

Composer üzerinden kurulum gerçekleştirmek için;

composer require "ozdemirr/mikro-odeme:*"

Mikro Ödeme' nin en çok kullanılan SaleWithTicket ödeme tipi için örnek Kullanım;

use MikroOdeme\Model\Sale\SaleWithTicket,
    MikroOdeme\Model\Shared\Input,
    MikroOdeme\Model\Sale\MSaleProduct,
    MikroOdeme\Model\Shared\Token,
    MikroOdeme\Exception\ConfigurationException,
    MikroOdeme\Exception\MikroOdemeException;
    
$token = new Token();
// mikro ödeme api bilgilerini setliyoruz.
$token->UserCode = "abcdef";
$token->Pin = "123456;
    
// siparişe dair tüm bilgileri input objesine set ediyoruz.
$input = new Input(); 
   
// Mikro ödeme ile aranızda, ödemeye dair kullanacağınız referans numarasıdır. 
// Sipariş id' yi set etmek mantıklı olacaktır.

$input->setMpay(12345);

// $orders isminde, sipariş edilen ürün bilgilerini tutan bir diziniz olduğunu varsayalım
// tüm ürünlerin gerekli bilgilerini tek tek Input objemize set etmemiz gerekiyor.

    foreach($orders as $order){

        $mSaleProduct = MSaleProduct();
        $mSaleProduct->setPrice(10.00);
        
        $input->addMSaleProduct($mSaleProduct);

    }
    
// saleWithTicket objesini yaratırken $input datasını veriyoruz.   
$saleWithTicket = new SaleWithTicket($input);    
// api bilgilerini barındıran token objesini set ediyoruz.
$saleWithTicket->setToken($token);  

try {

    $response = $saleWithTicket->send();
    
    // ödeme ekranı açmamız için gerekli url
    $result->SaleWithTicketResult->RedirectUrl;

}catch(ConfigurationException $e){

}catch(MikroOdemeException){

}catch(\Exception $e){

}



