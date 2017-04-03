<?php
require '../SRC/config.php';

class Images{
    private $id;
    private $productId;
    private $imageUrl;
    
    private function __construct(){
        $this->id=-1;
        $this->productId="";
        $this->imageUrl="";   
    }
    
    public function getImagePath(){
        return "../productsimg/".$this->imageUrl;
    }
    public static function loadAllImagesById($connection, $id){
        $sql="SELECT * From Products_images where product_id='$id'";
        
        $result = $connection->query($sql);
                
        if ($result == TRUE && $result->num_rows != 0) {
            
                $arr=[];
                    while ($row = $result->fetch_assoc()){
                    $oImages = new Images();
                    $oImages->id = $row['id'];
                    $oImages->product_id = $row['product_id'];
                    $oImages->imageUrl = $row['image'];

                    $arr[] = $oImages;
                }
                return $arr;

        }
        return NULL;    
    }
}
