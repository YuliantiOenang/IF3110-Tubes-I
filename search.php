<?php 
$q = $_GET['cari'];
  include "koneksi.inc.php";
  $query = "select nama from barang";
  $hasil = mysql_query($query,$koneksi);
  $p = -1;
  $a = array();
  while($row = mysql_fetch_array($hasil)){
        $p++;
        $a[$p] = $row["nama"];
    }
if (strlen($q) > 0)
  {
  $hint="";
  $acc =-1;
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
        $acc++;
        $temp = '<li><a href="#">'.$a[$i].'</a></li>';
        $hint=$hint.$temp;
      }
    }
  }
//output the response
echo $hint;

?>