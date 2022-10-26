<?php
class dbConfig
{
    // private adalah menyembunyikan atau menjaga property dan menthod agar tidak bisa diakses diluar class
    private $_host = 'localhost';
    private $_usernmae = 'riyani';
    private $_password = '';
    private $_database = 'film_pbo';
    
    //proteced adalah property ataupun menthod tersebut tidak bisa diakses dari luar class. namun bisa diakses oleh class itu sendiri atau turunan
    protected $connection;

    public function __construst() 
    {
        //menyambung pada database
        if(!isset($this->connection)) {
        
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

            //jika tidak terhubung ke database
            if (!$this->connection) {
                echo 'cannot connect to database server';
                exit;
            }
        }

        //untuk kembali pada database nya
        return $this->connection;
    }
}

$koneksi=mysqli_connect("localhost","riyani","","film_pbo");
function query($query){
    global $koneksi;
    $result =mysqli_query ($koneksi,$query);
    $rose= [];
    while ($riri = mysqli_fetch_assoc($result)){
        $rose[] = $riri;
    
    }
    return $rose;
}
?>