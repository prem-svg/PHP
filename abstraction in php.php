<?php
//abstraction 
 abstract class a{
 	abstract public function add();
    abstract public function mul();
           public function div()
           {
           	echo "division....<br/>";
           }
 }
 class b extends  a{
 	public function add(){
 			echo "addirtion...<br/>";
 	}
 	public function mul(){
 			echo "multiplication...<br/>";
 	}
 }
 $obj=new b;
 $obj->add();
 $obj->mul();
 $obj->div();
 ?>