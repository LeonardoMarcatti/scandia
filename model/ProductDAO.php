<?php
    namespace scandiweb\model;
    use PDO;
    interface DAO
    {
        public function getAllProducts();
        public function delete(int $id);
        public function save(Product $p);
    }

    class ProductDAO implements DAO
    {
        protected object $conn;

        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }
        
        public function getAllProducts()
        {
            $sql = 'select * from products';
            $select = $this->conn->prepare($sql);
            $select->execute();
            if ($select->rowCount() > 0) {
                $result = $select->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            };
        }

        public function delete(int $id)
        {
            $sql = 'delete from products where id = :id';
            $select = $this->conn->prepare($sql);
            $select->bindValue(':id', $id);
            $select->execute();
        }

        public function save(Product $p)
        {
            $sql = 'insert into products(sku, name, price, size, weight, length, width, height, product_type) values(:sku, :name, :price, :size, :weight, :length, :width, :height, :type)';
            $insert = $this->conn->prepare($sql);
            $insert->bindValue(':sku', $p->getSKU());
            $insert->bindValue(':name', $p->getName());
            $insert->bindValue(':price', $p->getPrice());
            $insert->bindValue(':size', $p->getSize());
            $insert->bindValue(':type', $p->getType());
            $insert->bindValue(':size', $p->getSize());
            $insert->bindValue(':weight', $p->getWeight());
            $insert->bindValue(':height', $p->getHeight());
            $insert->bindValue(':length', $p->getLength());
            $insert->bindValue(':width', $p->getWidth());
            $insert->execute();
        }
    }    
?>