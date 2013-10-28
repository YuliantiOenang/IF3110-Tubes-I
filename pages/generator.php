<?php
	
	function baseUrl()
        {
		$_scriptUrl = null;
                if($_scriptUrl===null)
                {
                        $scriptName=basename($_SERVER['SCRIPT_FILENAME']);
                        echo "SCRIPT NAME: ". $scriptName;
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

	$xml = simplexml_load_file("links.xml");
	$con=mysqli_connect("127.0.0.1","root","","toko_imba");
	
	// Check connection
	if (mysqli_connect_errno($con)){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	//check data posted				
	$result = mysqli_query($con,"SELECT * FROM kategori NATURAL JOIN inventori");
	
	while($row = mysqli_fetch_array($result)){
		$child = $xml->addChild('link');
		$child->addChild('name', $row['nama_inventori']);
		$child->addChild('price', $row['harga']);
		$child->addChild('category', $row['nama_kategori']);
		$child->addChild('url', explode("generator.php", baseUrl())[0]."details.php?gid=". $row['id_inventori']);
	}
	// Add the text attribute
	//$child->addAttribute("text", "geography");
	//You can either display the new XML code with echo or store it in a file.

	// Display the new XML code
	//echo $xml->asXML();
	// Store new XML code in questions.xml
	$xml->asXML("links.xml");
?>