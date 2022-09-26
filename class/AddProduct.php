<?php 
class AddProduct
{
    public function add(Item $item)
    {
        
        $product_id = $this->addProduct($item);

        if($product_id)
        {
            $descriptions = $this->addDescription($item);
            $category = $this->addCategory($item);
            $store = $this->addProductToStore($product_id);
            $layout = $this->addProductToLayout($product_id);
            $images = $this->addProductImages($item);
            $filters = $this->addProductFilters($item);
            $attributes = $this->addProductAttributes($item);
            
            if($descriptions&&$category&&$store&&$layout&&$images&&$filters&&$attributes)
            {
                return "Продукт $product_id успешно добавлен!";
            } else {
                return "Ошибка добавления продукта $product_id!";
            }

        } else {
            return false;
        }
    }

    private function addProduct(Item $item) : int
    {
        $sql = 'INSERT INTO    `'. DB_PREFIX.'_product` SET `model` = :model, `sku` = :sku, `upc` = :upc, `ean` = :ean, `jan` = :jan, `location` = :location, `quantity`='.$item->quantity.', `stock_status_id`='.$item->stock_status_id.', `image` = :image, `manufacturer_id`='.$item->manufacturer_id.', `price`='.$item->price.', `status`=1, `date_added`=NOW(), `date_modified`=NOW()';
        
        $dbh = DB::getInstance()->connect();
        $sth = $dbh->prepare($sql);
        $sth->bindValue(':model', $item->model, PDO::PARAM_STR);
		$sth->bindValue(':sku', $item->sku, PDO::PARAM_STR);
        $sth->bindValue(':upc', $item->upc, PDO::PARAM_STR);
        $sth->bindValue(':ean', $item->ean, PDO::PARAM_STR);
        $sth->bindValue(':jan', $item->jan, PDO::PARAM_STR);
        $sth->bindValue(':location', $item->location, PDO::PARAM_STR);
        $sth->bindValue(':image', $item->image, PDO::PARAM_STR);
        $sth->execute();
		if($sth->errorInfo()[2]){ 
            print_r($sth->errorInfo()[2]);
        } else {
            return $dbh->lastInsertId();     
        }
    }

    private function addDescription(Item $item) : bool
    {
        return true;
    }

    private function addCategory(Item $item) : bool
    {
        return true;
    }

    private function addProductToStore(int $product_id) : bool
    {
        return true;
    }

    private function addProductToLayout(int $product_id) : bool
    {
        return true;
    }

    private function addProductImages(Item $item) : bool
    {
        return true;
    }

    private function addProductFilters(Item $item) : bool
    {
        return true;
    }

    private function addProductAttributes(Item $item) : bool
    {
        return true;
    }



}