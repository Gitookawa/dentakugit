<?php
/*
 $limit = 32;
 
if(mb_strlen($text) > $limit) { 
$title = mb_substr($text,0,$limit);
echo $title. ･･･ ;

 */

class dentaku
{
   public $atai;

   public function keisan()
   {      

	  session_start(); 
	  $limit = 10;
	  $_SESSION['atai'] .= $this->atai;
	  // echo $_SESSION['atai'];
	     if($_SESSION['atai'] =="C"){
		     echo"delete";
	     }elseif(mb_strlen($_SESSION['atai']) > $limit){
		     $_SESSION['atai'] = null;
		     echo"Error!!!9桁以上の数字は計算出来ません";
	     }else{
		     echo $_SESSION['atai'];
	     }

	    $search_string =array("+","−","×","÷","C","=");
            for($i=0; $i < count($search_string); $i++){
		    if(strpos($this->atai, $search_string[$i]) !== false){
		    if($this->atai=="C"){
			    $_SESSION['atai'] = null;
			    echo $_SESSION['atai'];

		    }else if($this->atai=="+"||"÷"||"×"||"−"){
			    $_SESSION['enzan'] = $this->atai;
			    $_SESSION['atai'] = str_replace($this->atai, '', $_SESSION['atai']);
			    $_SESSION['atai2'] = $_SESSION['atai'];
			    $_SESSION['atai'] = null;
		    }
                 }
		    


		     if($this->atai=="="){
			    if($_SESSION['enzan']=="+"){
			       $syamu = $_SESSION['atai'];
			       $syamu2 = $_SESSION['atai2']; 
			       $result = $syamu+$syamu2;
			       $_SESSION['atai'] = null;
			       $_SESSION['atai2'] = null;
			       echo $result;
			       break;

		    }else if($_SESSION['enzan']=="÷"){
                               $syamu = $_SESSION['atai'];
                               $syamu2 = $_SESSION['atai2'];
                               $result = $syamu2 / $syamu;
                               $_SESSION['atai'] = null;
                               $_SESSION['atai2'] = null;
			       echo $result;
			       break;

		    }else if($_SESSION['enzan']=="×"){
                               $syamu = $_SESSION['atai'];
                               $syamu2 = $_SESSION['atai2'];
                               $result = $syamu*$syamu2;
                               $_SESSION['atai'] = null;
                               $_SESSION['atai2'] = null;
			       echo $result;
			       break;

		    }else if($_SESSION['enzan']=="−"){
                               $syamu = $_SESSION['atai'];
                               $syamu2 = $_SESSION['atai2'];
			       $result = $syamu-$syamu2;
			       $result = str_replace('-', '', $result);
                               $_SESSION['atai'] = null;
                               $_SESSION['atai2'] = null;
			       echo $result;
			       break;
	             }

		  }
			    
		 }

   }
   }
$dentaku = new dentaku();
$dentaku->atai = $_GET['no'];
$dentaku->keisan()
?>
