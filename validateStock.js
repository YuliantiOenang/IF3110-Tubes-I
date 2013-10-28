function validateStock()
{
  var idField = document.getElementById("idField").value;
  var namaField = document.getElementById("namaField").value;
  var hargaField = document.getElementById("hargaField").value;
  var jumlahField = document.getElementById("jumlahField").value;
  var keteranganField = document.getElementById("keteranganField").value;
  var param = "id="+idField+"&nama="+namaField+"&harga="+hargaField+"&jumlah="+jumlahField+"&keterangan="+keteranganField;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST","addtobag.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.setRequestHeader("Content-length", param.length);
  xmlhttp.setRequestHeader("Connection", "close");
  xmlhttp.onreadystatechange = function()
  {
    if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
    {
      var arr = xmlhttp.responseText.split("|");
      if (arr[0] == "false")
        alert("Stok tidak mencukupi! Hanya tersisa "+arr[1]+" buah.");
    }
  };
  xmlhttp.send(param);
}