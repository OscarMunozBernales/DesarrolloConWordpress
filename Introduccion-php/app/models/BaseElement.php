<?php 

class BaseElement{

    protected $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct( $title, $description ){
        $this->title        = $title;
        $this->description  = $description;
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

?>