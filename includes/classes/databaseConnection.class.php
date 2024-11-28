 <?php
    /**
     * Class DatabaseConnection
     * Handles the database connection
     */
    class DatabaseConnection
    {
        private $host = "localhost";
        private $user = "root";
        private $pwd = "";
        private $dbName = "photogalleryweb";

        /**
         * Establishes database connection using PDO
         * @return PDO
         */
        protected function connect()
        {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->exec("USE {$this->dbName}");
            return $pdo;
        }
    }
