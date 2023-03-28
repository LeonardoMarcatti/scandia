<?php
    namespace scandiweb\config;
    
    use PDO;
    
    class Database
    {
        private string $server = 'localhost';
        private string $db = 'scandiweb';
        private string $user = 'leo';
        private string $password = 'Aa119539$';
        private object $conn;

        public function getConnection()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->server; dbname=$this->db", $this->user, $this->password);
            } catch (\Throwable $th) {
                echo 'Erro linha: ' . $th->getLine() . "<br>";
                echo ('Código: ' . $th->getMessage());
            };

            return $this->conn;
        }
    };
?>