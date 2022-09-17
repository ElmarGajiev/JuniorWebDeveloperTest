<?php
namespace connect;
class Connect {
    public $connect;
    public function __construct($connect){
        $this->connect = $connect;
    }
    public function connect(){
        $params = func_get_args();
        foreach ($params as $sql){
            $this->connect->query($sql);
        }
    }
}
