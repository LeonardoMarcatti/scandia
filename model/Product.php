<?php
    namespace scandiweb\model;

    final class Product
    {
        private ?string $sku, $name, $desc;
        private string $type;
        private ?float $price, $hight, $widht, $length, $weight;
        private ?int $size;

        public function setSKU(string $val)
        {
            $this->sku = $val;
        }

        public function getSKU()
        {
            return $this->sku;
        }

        public function setName(string $val)
        {
            $this->name = $val;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setPrice(float $val)
        {
            $this->price = $val;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function setDesc(?string $val)
        {
            $this->desc = $val;
        }

        public function getDesc()
        {
            return $this->desc;
        }

        public function setHeight(?float $val)
        {
            $this->hight = $val;
        }

        public function getHeight()
        {
            return $this->hight; 
        }

        public function setWidth(?float $val)
        {
            $this->widht = $val;
        }

        public function getWidth()
        {
            return $this->widht;
        }

        public function setLength(?float $val)
        {
            $this->length = $val;
        }

        public function getLength()
        {
            return $this->length;
        }

        public function setSize(?int $val)
        {
            $this->size = $val;
        }

        public function getSize()
        {
            return $this->size;
        }

        public function setWeight(?float $val)
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