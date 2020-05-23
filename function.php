<?php
	 $active_home = "";
	 $active_docs = "";
		switch($title){
                case 'Home':
                  $active_home = "current";
                  break;
                case 'Docs':
                  $active_docs = "current";
                  break;
		}

  function convertTimetoDate($timeunix){
    return date('Y, F j',$timeunix);
  }

?>