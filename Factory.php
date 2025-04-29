<?php
class Profile{
   private $name;
   private $phone;
    public function __construct($name,$phone){
         $this->name = $name;
         $this->phone = $phone;
    }
}
class ProfileFactory{
    private $data;
    public function __construct($data){
        $this->data = $data;
    }
    public function create(){
        $result=[];
        foreach($this->data as $data){
            $name = $data['name']?? "Unknown";
            $phone = $data['phone']??"N/A";
            $result[] = new Profile($name,$phone);
        }
        return $result;
    }
}
$data = [
    [ "name" => "Alice", "phone" => "321456" ],
    [ "name" => "Bob" ],
    [ "name" => "Tom", "phone" => "654123" ],
 ];
 $pf= new ProfileFactory($data);
    $profiles = $pf->create();
    var_dump($profiles);