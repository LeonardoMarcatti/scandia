<?php
    namespace scandiweb\model;
    final class Product
    {
        private ?string $sku, $name;
        private string $type;
        private ?float $price, $hight, $widht, $length, $weight;
        private ?int $size;

        public function __construct(string $sku, string $name, string $type, float $price = null, float $hight = null, float $widht = null, float $length = null, float $weight = null, int $size = null )
        {
            $this->sku = $sku;
            $this->name = $name;
            $this->type = $type;
            $this->price = $price;
            $this->hight = $hight;
            $this->widht = $widht;
            $this->length = $length;
            $this->weight= $weight;
            $this->size = $size;
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

        public function getHeight()
        {
            return $this->hight; 
        }

        public function getWidth()
        {
            return $this->widht;
        }

        public function getLength()
        {
            return $this->length;
        }

        public function getSize()
        {
            return $this->size;
        }

        public function getWeight()
        {
            return $this->weight;
        }
        
        public function getType()
        {
            return $this->type;
        }
    };
?>