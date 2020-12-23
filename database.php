<?PHP

class database{

private $_host;
private $_db;
private $_user;
private $_pass;
public static $_pdo;

public function __construct()
{
   $this->_host='';
   $this->_db='';
   $this->_user='';
   $this->_pass='';
   $this->_pdo='';
}

public static function connect() :PDO
{
    $host = 'localhost';
    $db   = 'csp';
    $user = 'root';
    $pass = '123369963';
    $_pdo=null;

    $dsn = "mysql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass);
} 
catch (\PDOException $e)
 {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
return $pdo;
}
}


?>