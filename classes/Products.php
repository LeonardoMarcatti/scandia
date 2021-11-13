<?php
    namespace classes;

    abstract class Product
    {
        private string $sku, $name, $desc;

        public function setSKU(string $val)
        {
            $this->sku = $val;
        }

        public function setName(string $val)
        {
            $this->name = $val;
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

        public function getDesc()
        {
            return $this->desc;
        }
    };

    final class DVD extends Product 
    {
        private int $size;

        public function setSize(int $val)
        {
            $this->size = $val;
        }

        public function getSize()
        {
            return $this->size;
        }
    };

    final class Furniture extends Product 
    {
        private string $hight, $widh, $lengh;

        public function setHight(string $val)
        {
            $this->hight = $val;
        }

        public function setWidth(string $val)
        {
            $this->widh = $val;
        }

        public function setLength(string $val)
        {
            $this->lengh = $val;
        }

        public function getHight()
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
    };

    final class Book extends Product
    {
        private int $weight;

        public function setWeight(int $val)
        {
            $this->weight = $val;
        }

        public function getWeight()
        {
            return $this->weight;
        }
    };
?>