function validateStock(i)
{
  var idField = document.getElementById("idField"+i).value;
  var namaField = document.getElementById("namaField"+i).value;
  var hargaField = document.getElementById("hargaField"+i).value;
  var jumlahField = document.getElementById("jumlahField"+i).value;
  var keteranganField = document.getElementById("keteranganField"+i).value;
  var param = "id="+idField+"&nama="+namaField+"&harga="+hargaField+"&jumlah="+jumlahField+"&keterangan="+keteranganField;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST","addtobag.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.onreadystatechange = function()
  {
    if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
    {
      var arr = xmlhttp.responseText.split("|");
      if (arr[0] == "false")
      {
        document.getElementById("jumlahField"+i).value = arr[1];
        alert("Stok tidak mencukupi! Hanya tersisa "+arr[1]+" buah.");
      }
    }
  };
  xmlhttp.send(param);
}

function validateCart(i,barangID)
{
  var jumlah = document.getElementById("barang"+i).value;
  var param = "id="+i+"&jumlah="+jumlah+"&barangID="+barangID;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("POST","changebag.php",true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.onreadystatechange = function()
  {
    if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
    {
      var arr = xmlhttp.responseText.split("|");
      if (arr[0] == "true")
      {
        document.getElementById("hargabarang"+i).innerHTML = arr[1];
        document.getElementById("totalharga").innerHTML = arr[2];
      }
      else
      {
        document.getElementById("barang"+i).value = arr[1];
        alert("Stok tidak mencukupi! Hanya tersisa "+arr[1]+" buah.");
      }
    }
  };
  xmlhttp.send(param);
}