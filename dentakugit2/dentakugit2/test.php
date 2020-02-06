<?php
/*
  session_start();
  $atai  = $_GET['no'];

  $_SESSION['atai'] .= $atai;

  echo $_SESSION['atai'];
 */

class dentaku
{
   public $atai;

   public function keisan()
   {      

	     session_start();
             $_SESSION['atai'] .= $this->atai;
             echo $_SESSION['atai'];
	  

	    $search_string =array("＋","−","×","÷","C","=");
            for($i=0; $i < count($search_string); $i++){
		    if(strpos($this->atai, $search_string[$i]) !== false){
		    if($this->atai=="C"){
			    $_SESSION['atai'] = null;
			    echo $_SESSION['atai'];

		    }else if($this->atai=="＋"){
			    $_SESSION['enzan'] = "＋";
			    $_SESSION['atai'] = str_replace('＋', '', $_SESSION['atai']);
			    $_SESSION['atai2'] = $_SESSION['atai'];
			    $_SESSION['atai'] = null;
		
		    }else if($this->atai=="÷"){
                            $_SESSION['enzan'] = "÷";
                            $_SESSION['atai'] = str_replace('÷', '', $_SESSION['atai']);
                            $_SESSION['atai2'] = $_SESSION['atai'];
			    $_SESSION['atai'] = null;

		    }else if($this->atai=="×"){
                            $_SESSION['enzan'] = "×";
                            $_SESSION['atai'] = str_replace('×', '', $_SESSION['atai']);
                            $_SESSION['atai2'] = $_SESSION['atai'];
			    $_SESSION['atai'] = null;

		    }else if($this->atai=="−"){
                             $_SESSION['enzan'] = "−";
                            $_SESSION['atai'] = str_replace('−', '', $_SESSION['atai']);
                            $_SESSION['atai2'] = $_SESSION['atai'];
                            $_SESSION['atai'] = null;

		    }else if($this->atai=="="){
			    if($_SESSION['enzan']=="＋"){
			       $syamu = $_SESSION['atai'];
			       $syamu2 = $_SESSION['atai2'];
			       $result = $syamu+$syamu2;
			       $_SESSION['atai'] = null;
			       $_SESSION['atai2'] = null;
			       echo $result;

		    }else if($_SESSION['enzan']=="÷"){
                               $syamu = $_SESSION['atai'];
                               $syamu2 = $_SESSION['atai2'];
                               $result = $syamu2 / $syamu;
                               $_SESSION['atai'] = null;
                               $_SESSION['atai2'] = null;
			       echo $result;

		    }else if($_SESSION['enzan']=="×"){
                               $syamu = $_SESSION['atai'];
                               $syamu2 = $_SESSION['atai2'];
                               $result = $syamu*$syamu2;
                               $_SESSION['atai'] = null;
                               $_SESSION['atai2'] = null;
			       echo $result;

	           }else if($_SESSION['enzan']=="−"){
                               $syamu = $_SESSION['atai'];
                               $syamu2 = $_SESSION['atai2'];
			       $result = $syamu-$syamu2;
			       $result = str_replace('-', '', $result);
                               $_SESSION['atai'] = null;
                               $_SESSION['atai2'] = null;
                               echo $result;
		  }


		   }
			    
		    }

      }
   }
}
$dentaku = new dentaku();
$dentaku->atai = $_GET['no'];
$dentaku->keisan()
?>
