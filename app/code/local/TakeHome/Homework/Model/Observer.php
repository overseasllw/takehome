<?php
 class TakeHome_Homework_Model_Observer {
     /*
     4. The value of "Contains Radioactive Item" on the order should be "1" 
     if any of the items in the order are a product with a half-life value 
     less than the current radioactive threshold setting, otherwise "0".

     5. The value of "Contains Radioactive Item" on the order should be 
     determined at order time
      */
    function radioactiveCheck($observer){
        $order = $observer->getEvent()->getOrder();
        $store = Mage::app()->getStore(); 
        $threholdValue = Mage::getStoreConfig('radioactive_section/radioactive_content/radioactive_threhold_value', $store);
        $items = $order->getAllItems();
        $pro = Mage::getModel('catalog/product');
        foreach($items as $item){
          $product =  $pro->load($item->getProductId());
        //  Mage::log($product->getHalfLifeSeconds(),null,"test.log");
          if ($product->getHalfLifeSeconds() < $threholdValue){
            $order->setContainsRadioactiveItem(1);
            break;
          }
        }
     }
 }
?>