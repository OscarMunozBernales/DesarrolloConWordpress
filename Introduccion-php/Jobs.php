<?php

class Jobs{
    private $title;
    private $title2;
    public $description;
    public $visible;
    public $months;

    public function __construct( $title, $description, $visible = null, $months = null ){
        $this->title = $title;
        $this->title2 = null;
        $this->description = $description;
        $this->visible = $visible;
        $this->months = $months;        
    }

    public function __get($title2){
        return $this->title2;
    }

    public function __set( $title2, $valor ){
        $this->title2 = $valor;
    }

    public function setTitle( $title ){

        $this->title = $title == '' ? 'N/A' : $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDurationAsString () {
        $year = floor( $this->months / 12 );
        $extraMonths = ($this->months % 12);

        return "$year years $extraMonths months";
    }
}

$job1 = new Jobs('Hola mundo', 'Es un mensaje');
$job1->title2 = 'valor';
echo ($job1->title2);

?>