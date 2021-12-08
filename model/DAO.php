<?php
    namespace scandiweb\model;
    use PDO;
    interface DAO
    {
        public function getAllProducts();
    }

    abstract class ProductDAO implements DAO
    {
        protected object $conn;

        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }

        abstract public function getAllProducts();
    }

    final class DVDDAO extends ProductDAO
    {
        final public function save(DVD $d)
        {
            $sql = 'insert into products(sku, name, price, size, type) values(:sku, :name, :price, :size, :type)';
            $insert = $this->conn->prepare($sql);
            $insert->bindValue(':sku', $d->getSKU());
            $insert->bindValue(':name', $d->getName());
            $insert->bindValue(':price', $d->getPrice());
            $insert->bindValue(':size', $d->getSize());
            $insert->bindValue(':type', $d->getType());
            $insert->execute();
        }

        final public function getAllProducts()
        {
            $sql = "select * from products where type = 'dvd'";
            $select = $this->conn->prepare($sql);
            $select->execute();
            if ($select->rowCount() > 0) {
                $result = $select->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            };
        }
    }

    final class FurnitureDAO extends ProductDAO
    {
        final public function save(Furniture $f)
        {
            $sql = 'insert into products(sku, name, price, height, width, length, type) values(:sku, :name, :price, :h, :w, :l, :type)';
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

        final public function getAllProducts()
        {
            $sql = "select * from products where type = 'furniture'";
            $select = $this->conn->prepare($sql);
            $select->execute();
            if ($select->rowCount() > 0) {
                $result = $select->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            };
        }
    }

    final class BookDAO extends ProductDAO
    {
        final public function save(Book $b)
        {
            $sql = 'insert into products(sku, name, price, weight, type) values(:sku, :name, :price, :weight, :type)';
            $insert = $this->conn->prepare($sql);
            $insert->bindValue(':sku', $b->getSKU());
            $insert->bindValue(':name', $b->getName());
            $insert->bindValue(':price', $b->getPrice());
            $insert->bindValue(':weight', $b->getWeight());
            $insert->bindValue(':type', $b->getType());
            $insert->execute();
        }

        final public function getAllProducts()
        {
            $sql = "select * from products where type = 'book'";
            $select = $this->conn->prepare($sql);
            $select->execute();
            if ($select->rowCount() > 0) {
                $result = $select->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            };
        }
    }

    final class All extends ProductDAO
    {
        final public function getAllProducts()
        {
            $sql = 'select * from products';
            $select = $this->conn->prepare($sql);
            $select->execute();
            if ($select->rowCount() > 0) {
                $result = $select->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            };
        }

        final public function delete(int $id)
        {
            $sql = 'delete from products where id = :id';
            $select = $this->conn->prepare($sql);
            $select->bindValue(':id', $id);
            $select->execute();
        }
    }
    
?>