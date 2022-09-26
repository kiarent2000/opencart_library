<?php
class CheckProduct
{
    public function __construct($sku)
    {
        $this->sku=$sku;
    }

    public function check()
    {
        $sql = "SELECT `product_id` FROM `oc_product` WHERE `sku` = '$this->sku'";
        $sth = (DB::getInstance()->connect())->query($sql);
        $result = $sth->fetch();
        if($result)
        {
            return $result['product_id'];
        } else {
            return false;
        }
    }
}