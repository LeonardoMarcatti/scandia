<?php
    namespace scandiweb\model;

    interface BasicAttributes
    {
        public function getSKU();
        public function getName();
        public function getPrice();
        public function getType();
    }

    interface DVDAttributes extends BasicAttributes
    {
        public function getSize();
    }

    interface BookAttributes extends BasicAttributes
    {
        public function getWeight();
    }

    interface FurnitureAttributes extends BasicAttributes
    {
        public function getHeight();
        public function getLength();
        public function getWidth();
    }
    abstract class Product implements BasicAttributes
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
    };

    final class DVD extends Product implements DVDAttributes
    {
        private int $size;

        public function __construct(string $sku, string $name, string $type, float $price, int $size)
        {
            parent::__construct($sku, $name, $type, $price);
            $this->size = $size;
        }

        public function getSize()
        {
            return $this->size;
        }
    }

    final class Furniture extends Product implements FurnitureAttributes
    {
        private float $height, $width, $length;

        public function __construct(string $sku, string $name, string $type, float $price, float $height, float $length, float $widht)
        {
            parent::__construct($sku, $name, $type, $price);
            $this->height = $height;
            $this->width = $widht;
            $this->length = $length;
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
    }

    final class Book extends Product implements BookAttributes
    {
        private float $weight;

        public function __construct(string $sku, string $name, string $type, float $price, float $weight)
        {
            parent::__construct($sku, $name, $type, $price);
            $this->weight = $weight;
        }

        public function getWeight()
        {
            return $this->weight;   
        }
    }    
?>