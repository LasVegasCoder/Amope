<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Dashboard_Model extends Model{

    function __construct() {
        parent::__construct();
        }
    
    public function xhrInsert(){
        $text = $_POST['testInsert'];
        $sth = $this->db->prepare('INSERT INTO datas(data) VALUES(:testInsert)');   
        $sth->execute(array(':testInsert' => $_POST['testInsert']));
    }
    
    public function xhrGetData(){
        $sth = $this->db->prepare('
                SELECT * FROM data;
            ');
        return $sth->fetchAll();
    }
}