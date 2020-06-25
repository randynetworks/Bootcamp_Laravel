<?

class Animal
{
    public $name = "";
    public $legs = 2 ;
    public $cold_blooded = false;

    public function __construct($name){
        return $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getLegs(){
        return $this->legs;
    }

    public function getCold_Blooded(){
        return (boolval($this->cold_blooded)? 'True' : 'False');
    }


}