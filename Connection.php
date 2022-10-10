<?php
	class db
	{
		function  __construct()
		{
			if(mysqli_connect("localhost","root","","wedding"))
				$this->con=mysqli_connect("localhost","root","","wedding");
			else
				die("Could Not Connect to database:".mysqli_error($this->con));
		}
	}
	
	class Cart extends db
	{
		function add($a,$b,$c,$d)
		{
			$token="";
			$this->cmd="insert into cartmaster(qty,id,price,uid) values('$a','$b','$c','$d')";
			if(mysqli_query($this->con,$this->cmd))
				$token=1;
			else
			{
				$token=mysqli_error($this->con);
			}	
			return $token;
		}
		
		function display($uid)
		{
			$this->cmd="Select * from cartmaster where uid='$uid'";
			$res=mysqli_query($this->con,$this->cmd);
			$arr=array();
			while($row=mysqli_fetch_array($res))
			{
				$arr[]=$row;
			}
			$array=json_encode($arr);
			//echo $array;
			return $array;
		}
		
		function item($id)
		{
			$this->cmd="Select name,image from products where code='$id'";
			$res2=mysqli_query($this->con,$this->cmd);
			$arr2=array();
			while($row1=mysqli_fetch_array($res2))
			{
				$arr2=$row1;
			}
			$array2=json_encode($arr2);
			return $array2;
		}
	}
	
	class Order extends db
	{
		function move($uid)
		{
			$inf="";
			$this->cmd="Select * from cartmaster where uid='$uid'";
			$res=mysqli_query($this->con,$this->cmd);
			while($row=mysqli_fetch_array($res))
			{
				$this->ins="Insert into ordermaster(id,uid,price,qty) values('$row[0]','$row[2]','$row[3]','$row[4]')";
				$query=mysqli_query($this->con,$this->ins);
			}
			$this->del="delete from cartmaster where uid='$uid'";
			if($res2=mysqli_query($this->con,$this->del))
				$inf=1;
			else
				$inf=-1;
			return $inf;
		}
		
		function display($uid)
		{
			$this->cmd="Select * from ordermaster where uid='$uid'";
			$res=mysqli_query($this->con,$this->cmd);
			$arr=array();
			while($row=mysqli_fetch_array($res))
			{
				$arr[]=$row;
			}
			$array=json_encode($arr);
			return $array;
		}
	}
	
	class Products extends db
	{
		function display()
		{
			$this->cmd="Select * from ordermaster order by uid";
			$res=mysqli_query($this->con,$this->cmd);
			$arr=array();
			while($row=mysqli_fetch_array($res))
			{
				$arr[]=$row;
			}
			$array=json_encode($arr);
			return $array;
		}
		
		function disp_user($uid)
		{
			$this->cmd2="Select fname,lname,address from usermaster where uid='$uid'";
			$res2=mysqli_query($this->con,$this->cmd2);
			$arr2=array();
			$row2=mysqli_fetch_array($res2);
			$arr2=$row2;
			$array2=json_encode($arr2);
			return $array2;
		}
	}
?>