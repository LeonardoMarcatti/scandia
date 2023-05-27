<?php
    namespace scandiweb\config;
    
    use PDO;
    
    class Database
    {
        private string $server = 'server_ip';
        private string $db = 'DB name';
        private string $user = 'db user';
        private string $password = 'user password';
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
