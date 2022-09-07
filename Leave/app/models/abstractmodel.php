<?php

abstract class abstractmodel extends Database
{
    abstract public function inserting($name,$email,$password,$number): string;
    abstract public function display($id);
    abstract public function updating($id,$name,$email,$password,$number,$Sno):string;
    abstract public function deleting($id,$Sno): string;
    abstract public function deletingAssoc($id, $Sno): string;
    abstract public function display_logindata($name);
    abstract public function pagination();
    abstract public function page();
}



?>