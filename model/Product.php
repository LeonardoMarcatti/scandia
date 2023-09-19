<?php
    namespace scandiweb\model;

    interface BasicAttributes
    {
        public function getSKU();
        public function getName();
        public function getPrice();
        public function getType();
    }

    interface ExtendedAttributes extends BasicAttributes
    {
        public function getSize();
        public function getWeight();
        public function getHeight();
        public function getLength();
        public function getWidth();
    }
    abstract class Main implements BasicAttributes
    {
        private ?string $sku, $name;
        private string $type;
        private ?float $price;
        

        public function __construct(string $sku, string $name, string $type, float $price)
        {
            $this->sku = $sku;
            $this->name = $name;
            $this->type = $type;
            $this->price = $price;
        }

        public function getSKU()
        {
            return $this->sku;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getPrice()
        {
            return $this->price;
        }
        
        public function getType()
        {
            return $this->type;
        }
    }

    final class Product extends Main implements ExtendedAttributes
    {
        private ?int $size;
        private ?float $height, $length, $width, $weight;

        public function __construct(string $sku, string $name, string $type, float $price, ?int $size, ?float $height, ?float $length, ?float $widht, ?float $weight)
        {
            parent::__construct($sku, $name, $type, $price);
            $this->size = $size;
            $this->height = $height;
            $this->width = $widht;
            $this->length = $length;
            $this->weight = $weight;
        }

        public function getSize()
        {
            return $this->size;
        }

        public function getHeight()
        {
            return $this->height;
        }

        public function getLength()
        {
            return $this->length;
        }

        public function getWidth()
        {
            return $this->width;
        }        

        public function getWeight()
        {
            return $this->weight;   
        }
    }
?>