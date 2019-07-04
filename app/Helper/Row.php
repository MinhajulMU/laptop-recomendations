<?php

namespace App\Helper;

class Row{
    
    private $data = [];

    /**
     * @var mixed $data 
     */
    public function addData($data){
        $this->data[] = $data;
    }
    public function render(){
        $html = "<tr>";
        foreach ($this->data as $key => $value) {
            $html.= "<td>".$value."</td>";
        }
        $html.= "</tr>";
        return $html;
    }
}