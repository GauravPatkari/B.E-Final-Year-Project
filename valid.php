<?php
    include('db.php');
	
	//++++++++Character Only+++++++++++++++
	function Namevalid($names,$nametital,$length)
	{
		$x=strlen($names);
		if($x<$length)
		{
			return $nametital."(Min Length $length),";
		}
        else if(!preg_match('/^[_a-z]+$/i',$names))
         {
         return $nametital;
         }
	}

	//++++++++Character Only+++++++++++++++
	function Namespacevalid($names,$nametital,$length)
	{
		$x=strlen($names);
		if($x<$length)
		{
			return $nametital."(Min Length $length),";
		}
        else if(!preg_match('/^[_a-z ]+$/i',$names))
         {
         return $nametital;
         }
	}

	//++++++++Number Valid+++++++++++++++
	function Numbervalid($names,$nametital,$length)
	{
         $x=strlen($names);
		if($x<$length)
		{
			return $nametital."(Min Length $length),";
		}
        else if(!preg_match('/^[_0-9]+$/i',$names))
         {
         return $nametital;
         }
	}

	//++++++++Only Number Valid+++++++++++++++
	function OnlyNumbervalid($names,$nametital)
	{
		if($names!="")
		{
			if(!preg_match('/^[_0-9]+$/i',$names))
			{
				return $nametital;
			}
		}
	}

	//++++++++Full Name Only+++++++++++++++
	function Fullnamevalid($names,$nametital)
	{
         if(!preg_match('/^[_a-z]+( [_a-z]+)$/i',$names))
         {
         return $nametital;
         }
	}

	//++++++++Not Empty+++++++++++++++
	function nullvalid($names,$nametital)
	{
		if($names=="")
		{
         return $nametital;
		}	
	}

	//++++++++Not Empty+++++++++++++++
	function nullvalidlength($names,$length,$nametital)
	{
		if($names!="")
		{
		$x=strlen($names);
			if($x>$length)
			{
				return $nametital."(Max $length Character), ";
			}	
		}
		else
		{
			return $nametital;
		}
	}

	//++++++++Not Empty+++++++++++++++
	function nullvalidminlength($names,$length,$nametital)
	{
		if($names!="")
		{
		$x=strlen($names);
			if($x<$length)
			{
				return $nametital."(Min $length Character), ";
			}	
		}
		else
		{
			return $nametital;
		}
	}

	//++++++++Empty if Not Empty then length+++++++++++++++
	function nullNotEmptyvalid($names,$length,$nametital)
	{
		if($names!="")
		{
			$x=strlen($names);
         		if($x>$length)
				{
					return $nametital."(Max $length Character), ";
				}
		}	
	}

	//++++++++Phone No+++++++++++++++
	function phonevalid($names,$nametital,$length)
	{
		 $x=strlen($names);
		 if($x!=$length)
		{
				return $nametital."(Min Length $length),";
		}
		else if(!preg_match('/[0-9 -()+]+$/', $names))
		{
				return $nametital;
		}

	}
    
	//++++++++Email Valid+++++++++++++++
	function EmailValid($names,$nametital)
	{
		if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $names))
		{
			 return $nametital;
		}
	}

	//++++++++Equal String+++++++++++++++
	function EqualValid($names1,$names2,$nametital)
	{
		if($names1!=$names2)
		{
			 return $nametital;
		}
	}

	//++++++++From Database True+++++++++++++++
	function DatbaseValid($Tablenm,$colmnm,$valuechk,$nametital)
	{
	$select_table = "select * from $Tablenm where $colmnm ='".$valuechk."'";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)>=1)
		{
		 return $nametital;
		}
	}

	//++++++++From Database False+++++++++++++++
	function DatbaseValidCheck($Tablenm,$colmnm,$valuechk,$nametital)
	{
	$select_table = "select * from $Tablenm where $colmnm ='".$valuechk."'";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)>=1)
		{
		}
		else
		{
			return $nametital;
		}
	}

//++++++++From Database Two coloum True+++++++++++++++
	function DatbaseNextColoumnCheck($Tablenm,$colmnm1,$colmnm2,$valuechk1,$valuechk2,$nametital)
	{
	$select_table = "select * from $Tablenm where $colmnm1 ='$valuechk1' and $colmnm2 ='$valuechk2'";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)>=1)
		{
			return $nametital;
		}
	}

//++++++++From Database Two coloum True In Both Coloumn+++++++++++++++
	function DatbaseBothTwoColoumnCheck($Tablenm,$colmnm1,$colmnm2,$valuechk1,$valuechk2,$nametital)
	{
	$select_table = "select * from $Tablenm where ($colmnm1 ='$valuechk1' and $colmnm2 ='$valuechk2') or ($colmnm1 ='$valuechk2' and $colmnm2 ='$valuechk1')";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)>=1)
		{
			return $nametital;
		}
	}

//++++++++From Database Three coloum True+++++++++++++++
	function DatbaseThreeColoumnCheck($Tablenm,$colmnm1,$colmnm2,$colmnm3,$valuechk1,$valuechk2,$valuechk3,$nametital)
	{
	$select_table = "select * from $Tablenm where $colmnm1 ='$valuechk1' and $colmnm2 ='$valuechk2' and $colmnm3 ='$valuechk3'";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)<1)
		{
			return $nametital;
		}

	}

	//++++++++From Database Two coloum True+++++++++++++++
	function DatbaseValuereturn($Tablenm,$colmnm,$colmnmreturn,$valuechk)
	{
	$select_table = "select * from $Tablenm where $colmnm ='$valuechk'";
	$fetch= mysql_query($select_table);
	while($row=mysql_fetch_array($fetch))
		{	
		return $row[$colmnmreturn];
		}
	}

	//++++++++From Database Two coloum True+++++++++++++++
	function FriendsOnly($me,$to,$trueresult,$falseresult)
	{
	$select_table = "select * from friend_request where (Sender_Uid='$me' and Receiver_Uid='$to') or (Receiver_Uid='$me' and Sender_Uid='$to') and Request_Status='A'";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)>=1)
		{
			return $trueresult;
		}
	else
		{
			return $falseresult;
		}
	}
	//++++++++From Database Two coloum True+++++++++++++++
	function FriendsOffriend($me,$to,$trueresult,$falseresult)
	{
	
	$select_table = "select * from ( SELECT * FROM friend_request WHERE Sender_Uid IN ( SELECT Receiver_Uid FROM friend_request WHERE Sender_Uid ='$to' or Receiver_Uid='$to' ) or Receiver_Uid IN ( SELECT Sender_Uid FROM friend_request WHERE Sender_Uid ='$to' or Receiver_Uid='$to' ) or Receiver_Uid IN ( SELECT Receiver_Uid FROM friend_request WHERE Sender_Uid ='$to' or Receiver_Uid='$to' ) or Sender_Uid IN ( SELECT Sender_Uid FROM friend_request WHERE Sender_Uid ='$to' or Receiver_Uid='$to' ) ) as abc where Sender_Uid='$me' or Receiver_Uid='$me'";
	$fetch= mysql_query($select_table);
	if(mysql_num_rows($fetch)>=1)
		{
			return $trueresult;
		}
	else
		{
			return $falseresult;
		}

	}

?><?php
/*
Namevalid("sadfssf","valid name","3");
Namespacevalid("sadfssf","valid name","3");
Numbervalid("22","valid number","2");
Fullnamevalid("asdsa afdasf","Valid full Name");
nullvalid("s","Valid null");
phonevalid("2222222222","Valid Ph","10");
EmailValid("dasfa@adad.in","Valid Mail");
EqualValid("1","1","Not Match");
DatbaseValid("halbum","ID","51","All Ready Exit");
echo DatbaseValuereturn("user_registration","User_Email","User_Password","Raj22@gmail.com");
*/
?>