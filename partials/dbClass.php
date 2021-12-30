<?php
require_once dirname(__DIR__).'/partials/header.php';

class Database{
    /**
     * Database connection variables
     *
     * @var string
     */
    private $dbServer='localhost';
    private $dbUser='root';
    private $dbPassword='';
    private $characterSet='utf8';
    private $dbName='php_advance_crud';
    protected $conn;

    //Public constructor to initialise variables
    public function __construct()
    {
        try { 
            $dsn="mysql:host={$this->dbServer}; dbname={$this->dbName}; charset={$this->characterSet}";
            $options=array(PDO::ATTR_PERSISTENT);
            $this->conn=new PDO($dsn, $this->dbUser, $this->dbPassword, $options);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // if($conn instanceof PDO){
            //     print "<div class='container text-success'>Connection success</div>";
            // }
        } catch (PDOException $e) {
            print 'Error in connection: '.$e->getMessage();
            // $conn=null;
        }
        
    }

    

}





?>