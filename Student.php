<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author jeffn
 */
class Student {
    
    #constructor for surname, firstname, email and grades
    function __construct() {
    $this->surname = '';
    $this->first_name = '';
    $this->emails = array();
    $this->grades = array();

    }
    #email function adds email address to either work/home email address
    function add_email($which,$address) {
    $this->emails[$which] = $address;
    }
    
    #add grade function 
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    #will calculate the average of the grades and return it as grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    #format to display first name, last name and average grade in parenthesis ()
    #new line for individual emails
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
