<?php
require_once "database.php";

    class Part
    {
    private $_part_id;
    private $_part_name;
    private $_part_model;
    private $_part_price;
    private $_part_image;
    public $description;

    public function __construct()
    {
        $this->part_id='null';
        $this->part_name='null';
        $this->part_model='null';
        $this->part_price='null';
        $this->part_image='null';
        $this->description='null';
    }
    function __destruct() {
        
      }

    public function setp_id($pid)
    {
        $this->part_id=$pid;
    }
    public function setp_name($pname)
    {
        $this->part_name=$pname;
    }
    public function setp_model($pmodel)
    {
        $this->part_model=$pmodel;
    }
    public function setp_price($pprice)
    {
        $this->part_price=$pprice;
    }
    public function setp_img($pimg)
    {
        $this->part_image=$pimg;
    }

    public function setp_desc($pdesc)
    {
        $this->description=$pdesc;
    }

    public function getp_id($var)
    {
        if(property_exists($this,$var))
        return $this->$var;
    }

    public function getp_name($var)
    {
        if(property_exists($this,$var))
        return $this->$var;
    }

    public function getp_model($var)
    {
        if(property_exists($this,$var))
        return $this->$var;
    }

    public function getp_price($var)
    {
        if(property_exists($this,$var))
        return $this->$var;
    }

    public function getp_img($var)
    {
        if(property_exists($this,$var))
        return $this->$var;
    }

    public function getp_desc($var)
    {
        if(property_exists($this,$var))
        return $this->$var;
    }

    function showpro()
    {
      $sql = "SELECT * FROM `Part`";
      $pdo=database::connect();  
      $stm= $pdo->prepare('SELECT * FROM Part');
      $temp=array();
      if($stm->execute())
      {
          $temp=$stm->fetchAll(PDO::FETCH_CLASS, 'Part' );
      }
      return $temp;
    }
}
    ?>