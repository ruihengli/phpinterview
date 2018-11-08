<?php

/**
 * 单链表
 * @author anci
 *
 */
class Node{
	
	
	public $next = null;
	public $data = null;
	
	
	public function __construct($data){
		$this->data = $data;
	}
}
	function countNode($head){
		$cur = $head;
		$i   = 0;
		while(!is_null($cur->next)){
			$i++;
			$cur = $cur->next;
		}
		return $i;
	}
	
	function addNode($head,$data){
		$cur = $head;
		while(!is_null($cur->next)){
			$cur = $cur->next;
		}
		$new = new Node($data);
		$cur->next = $new;
	}
	
	function insertNode($head,$data,$no){
		if($no >countNode($head)){
			return false;
		}
		$cur = $head;
		$new = new Node($data);
		for($i=0;$i<$no;$i++){
			$cur = $cur->next;
		}
		$new->next = $cur->next;
		$cur->next = $new;
	}
	
    function delNode($head,$no){
		if($no > countNode($head)){
			return false;
		}
		$cur = $head;
		for($i=0;$i<$no-1;$i++){
			$cur = $cur->next;	
		}
		$cur->next = $cur->next->next;
	}
	
	function showNode($head){
		$cur = $head;
		while(!is_null($cur->next)){
			$cur = $cur->next;
			echo $cur->data.PHP_EOL;
		}
	}
	
	$head = new Node(null);// 定义头节点
	addNode($head, 'a');
	addNode($head, 'b');
	addNode($head, 'c');
	insertNode($head, 'd', 0);
	showNode($head);
	delNode($head, 2);
	showNode($head);