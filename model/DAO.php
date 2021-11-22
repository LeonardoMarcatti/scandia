<?php
    namespace scandiweb\model;

    use PDO;
    interface DAO{
        public function saveDVD(DVD $d);
        public function saveFurniture(Furniture $f);
        public function saveBook(Book $b);
        public function getAllProducts();
        public function delProduct(Product $p);
    }

    final class ProductDAO implements DAO
    {
        private object $conn;

        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }

        public function saveDVD(DVD $p)
        {
            $sql = 'insert into products(sku, name, price, size, product_type) values(:sku, :name, :price, :size, :type)';
            $insert = $this->conn->prepare($sql);
            $insert->bindValue(':sku', $p->getSKU());
            $insert->bindValue(':name', $p->getName());
            $insert->bindValue(':price', $p->getPrice());
            $insert->bindValue(':size', $p->getSize());
            $insert->bindValue(':type', $p->getType());
            $insert->execute();
        }

        public function saveFurniture(Furniture $f)
        {
            $sql = 'insert into products(sku, name, price, height, width, length, product_type) values(:sku, :name, :price, :h, :w, :l, :type)';
            $insert = $this->conn->prepare($sql);
            $insert->bindValue(':sku', $f->getSKU());
            $insert->bindValue(':name', $f->getName());
            $insert->bindValue(':price', $f->getPrice());
            $insert->bindValue(':h', $f->getHeight());
            $insert->bindValue(':w', $f->getWidth());
            $insert->bindValue(':l', $f->getLengh());
            $insert->bindValue(':type', $f->getType());
            $insert->execute();
        }

        public function saveBook(Book $b)
        {
            $sql = 'insert into products(sku, name, price, weight, product_type) values(:sku, :name, :price, :w, :type)';
            $insert = $this->conn->prepare($sql);
            $insert->bindValue(':sku', $b->getSKU());
            $insert->bindValue(':name', $b->getName());
            $insert->bindValue(':price', $b->getPrice());
            $insert->bindValue(':w', $b->getWeight());
            $insert->bindValue(':type', $b->getType());
            $insert->execute();
        }

        public function getAllProducts()
        {
            $sql = 'select * from products';
            $select = $this->conn->prepare($sql);
            $select->execute();
            $result = $select->fetchAll(PDO::FETCH_ASSOC);
            $list = [];
            foreach ($result as $key => $value) {
                $list[] = $value;
            };
            return $list;
        }

        public function getDVD()
        {
            $sql = "select id, sku, name, price, size from products where product_type = 'dvd'";
            $select = $this->conn->prepare($sql);
            $select->execute();
            $result = $select->fetchAll(PDO::FETCH_ASSOC);
            $list = [];
            foreach ($result as $key => $value) {
                $list[] = $value;
            };
            return $list;
        }

        public function getFurniture()
        {
            $sql = "select id, sku, name, price, width, length, height from products where product_type = 'furniture'";
            $select = $this->conn->prepare($sql);
            $select->execute();
            $result = $select->fetchAll(PDO::FETCH_ASSOC);
            $list = [];
            foreach ($result as $key => $value) {
                $list[] = $value;
            };
            return $list;
        }

        public function getBook()
        {
            $sql = "select id, sku, name, price, weight from products where product_type = 'book'";
            $select = $this->conn->prepare($sql);
            $select->execute();
            $result = $select->fetchAll(PDO::FETCH_ASSOC);
            $list = [];
            foreach ($result as $key => $value) {
                $list[] = $value;
            };
            return $list;
        }

        public function delProduct($id)
        {
            $sql = 'delete from products where id = :id';
            $select = $this->conn->prepare($sql);
            $select->bindValue(':id', $id);
            $select->execute();
        }
        
    }
    
?>