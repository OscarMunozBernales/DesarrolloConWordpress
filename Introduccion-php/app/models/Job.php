<?php

require_once 'BaseElement';
class Job extends BaseElement{

    public function __construct( $title, $descrition ){
        $newTitle = 'Job: ' . $title;
        parent::__construct( $newTitle, $descrition );
    }

    public function getDurationAsString () {
        $year = floor( $this->months / 12 );
        $extraMonths = ($this->months % 12);

        return "Job duration: $year years $extraMonths months";
    }
}