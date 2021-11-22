<?php
    namespace scandiweb\model;

    abstract class Product
    {
        private string $sku, $name, $desc;
        private float $price;

        public function setSKU(string $val)
        {
            $this->sku = $val;
        }

        public function setName(string $val)
        {
            $this->name = $val;
        }

        public function setPrice(float $val)
        {
            $this->price = $val;
        }

        public function setDesc(string $val)
        {
            $this->desc = $val;
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

        public function getDesc()
        {
            return $this->desc;
        }
    };

    class DVD extends Product 
    {
        private float $size;
        private string $type;

        public function setSize(float $val)
        {
            $this->size = $val;
        }

        public function getSize()
        {
            return $this->size;
        }

        public function setType(string $val)
        {
            $this->type = $val;
        }

        public function getType()
        {
            return $this->type;
        }
    };

    final class Furniture extends Product 
    {
        private float $hight, $widh, $lengh;
        private string $type;

        public function setHeight(float $val)
        {
            $this->hight = $val;
        }

        public function setWidth(float $val)
        {
            $this->widh = $val;
        }

        public function setLength(float $val)
        {
            $this->lengh = $val;
        }

        public function getHeight()
        {
            return $this->hight; 
        }

        public function getWidth()
        {
            return $this->widh;
        }

        public function getLengh()
        {
            return $this->lengh;
        }

        public function setType(string $val)
        {
            $this->type = $val;
        }

        public function getType()
        {
            return $this->type;
        }
    };

    final class Book extends Product
    {
        private float $weight;
        private string $type;

        public function setWeight(float $val)
        {
            $this->weight = $val;
        }

        public function getWeight()
        {
            return $this->weight;
        }

        public function setType(string $val)
        {
            $this->type = $val;
        }

        public function getType()
        {
            return $this->type;
        }
    };
?>