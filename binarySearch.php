<?php

/**
 * 二分查找
 * @author anci
 *
 */
function binarySearch($arr,$search){
	$max = count($arr)-1;
	$min = 0;
	if($arr[0] > $search || $arr[$max] < $search){
		return false;
	}
	while($min<=$max){
		$mid = floor(($max+$min)/2);
		if($arr[$mid] == $search){
			return $mid;//查找到的Mid
		}else if($arr[$mid] > $search){//中间值比查找的数大，则往左边查找
			$max = $mid - 1;
		}else if($arr[$mid] < $search){//中间值比查找的数小，则往右边查找
			$min = $mid + 1;
		}
	}	
}

/**
 * 二分查找的递归实现法则 
 */
function recursiveBinarySearch($arr,$min,$max,$search){
	if($min <= $max){
		$mid = floor(($min+$max)/2);
		if($arr[$mid] == $search){
			return $mid;
		}else if($arr[$mid] > $search){
			recursiveBinarySearch($arr,$min,$mid-1,$search);
		}else if($arr[$mid] < $search){
			recursiveBinarySearch($arr,$mid+1,$max,$search);
		}
	}	
	return false;
}


//二分查找的变形，查询出第一个等于给定元素的值
function binarySearch1($arr,$search){
	$max = count($arr)-1;
	$min = 0;
	if($arr[0] > $search || $arr[$max] < $search){
		return false;
	}
	while($min<=$max){
		$mid = floor(($max+$min)/2);
		if($arr[$mid] == $search){
			if($mid == 0 || $arr[$mid-1] != $search){
				return $mid;
			}else {
				$max = $mid - 1;
			}
			
		}else if($arr[$mid] > $search){//中间值比查找的数大，则往左边查找
			$max = $mid - 1;
		}else if($arr[$mid] < $search){//中间值比查找的数小，则往右边查找
			$min = $mid + 1;
		}
	}
}


//查找最后一个值等于给定值的元素

//查找第一个大于等于给定值的元素

//查找最后一个小于等于给定值的元素


