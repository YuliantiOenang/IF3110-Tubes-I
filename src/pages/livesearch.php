<?php
	function baseUrl()
        {
		$_scriptUrl = null;
                if($_scriptUrl===null)
                {
                        $scriptName=basename($_SERVER['SCRIPT_FILENAME']);
                        //echo "SCRIPT NAME: ". $scriptName;
						if(basename($_SERVER['SCRIPT_NAME'])===$scriptName)
                                $_scriptUrl=$_SERVER['SCRIPT_NAME'];
                        elseif(basename($_SERVER['PHP_SELF'])===$scriptName)
                                $_scriptUrl=$_SERVER['PHP_SELF'];
                        elseif(isset($_SERVER['ORIG_SCRIPT_NAME']) && basename($_SERVER['ORIG_SCRIPT_NAME'])===$scriptName)
                                $_scriptUrl=$_SERVER['ORIG_SCRIPT_NAME'];
                        elseif(($pos=strpos($_SERVER['PHP_SELF'],'/'.$scriptName))!==false)
                                $_scriptUrl=substr($_SERVER['SCRIPT_NAME'],0,$pos);
                        elseif(isset($_SERVER['DOCUMENT_ROOT']) && strpos($_SERVER['SCRIPT_FILENAME'],$_SERVER['DOCUMENT_ROOT'])===0)
                                $_scriptUrl=str_replace('\\','/',str_replace($_SERVER['DOCUMENT_ROOT'],'',$_SERVER['SCRIPT_FILENAME']));
                        else
                                throw new CException(Yii::t('yii','CHttpRequest is unable to determine the entry script URL.'));
                }
                return $_scriptUrl;
       }

	$xmlDoc=new DOMDocument();
	$xmlDoc->load("links.xml");

	$x=$xmlDoc->getElementsByTagName('link');

	//get the q parameter from URL
	$q=$_GET["q"];

	//lookup all links from the xml file if length of q>0
	if (strlen($q)>0)
	{
	$hint="";
	for($i=0; $i<($x->length); $i++)
	{
	  $y=$x->item($i)->getElementsByTagName('name');
	  $v=$x->item($i)->getElementsByTagName('price');
	  $w=$x->item($i)->getElementsByTagName('category');
	  $z=$x->item($i)->getElementsByTagName('url');
	  
	  
		if ($y->item(0)->nodeType==1)
		{
		//find a link matching the search text
		  if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
		  {
			if ($hint=="")
			{
				$hint="<a href='" . explode("livesearch.php", baseUrl())[0] .$z->item(0)->childNodes->item(0)->nodeValue . "' target='_blank'>" . 
				$y->item(0)->childNodes->item(0)->nodeValue . "</a>";
			}
		  else
			{
				$hint=$hint . "<br /><a href='" .explode("livesearch.php", baseUrl())[0].  
				$z->item(0)->childNodes->item(0)->nodeValue . 
				"' target='_blank'>" . 
				$y->item(0)->childNodes->item(0)->nodeValue . "</a>";
			}
		  }
		}
	  }
	}

	// Set output to "no suggestion" if no hint were found
	// or to the correct values
	if ($hint=="")
	  {
	  $response="no suggestion";
	  }
	else
	  {
	  $response=$hint;
	  }

	//output the response
	echo $response;
?>