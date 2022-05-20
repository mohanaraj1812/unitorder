<?php


namespace oe\unitorder\Model;

/**
 * Class Order.
 */
class Order extends Order_parent
{

 public function finalizeOrder(\OxidEsales\Eshop\Application\Model\Basket $oBasket, $oUser, $blRecalculatingOrder = false)
    {
file_put_contents('function.txt',print_r(get_class().PHP_EOL, true), FILE_APPEND);			
file_put_contents('function.txt',print_r(__function__.PHP_EOL, true), FILE_APPEND);			
//~ file_put_contents('nn_unit_user.txt',print_r($oUser, true), FILE_APPEND);			
//~ file_put_contents('nn_unit_oBasket.txt',print_r($oBasket, true), FILE_APPEND);	
		//~ // payment information
        //~ $oUserPayment = $this->_setPayment($oBasket->getPaymentId());        
		
		//~ $iRet = parent::_sendOrderByEmail($oUser, $oBasket);
        
        return parent::finalizeOrder($oBasket, $oUser, $blRecalculatingOrder);
	}

	
   protected function _sendOrderByEmail($oUser = null, $oBasket = null, $oPayment = null) {
file_put_contents('function.txt',print_r(__function__, true), FILE_APPEND);				   
	   file_put_contents('nn_unit_user.txt',print_r($oUser, true), FILE_APPEND);			
	file_put_contents('nn_unit_oBasket.txt',print_r($oBasket, true), FILE_APPEND);	
	file_put_contents('nn_unit_oPayment.txt',print_r($oPayment, true), FILE_APPEND);	
		
        $iRet = parent::_sendOrderByEmail($oUser, $oBasket, $oPayment);
        return $iRet;
    }

}
?>
