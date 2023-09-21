<?php
include_once './Models/Product.php';
class DigitalProduct extends Product {
     private $downloadLink;
    public function __construct($name ,$price ,$downloadLink)
    {
        parent::__construct($name, $price);
        $this->setDownloadLink($downloadLink);

    }

    /**
     * @return mixed
     */
    public function getDownloadLink()
    {
        return $this->downloadLink;
    }

    /**
     * @param mixed $downloadLink
     */
    public function setDownloadLink($downloadLink)
    {
        $this->downloadLink = $downloadLink;
    }



}
