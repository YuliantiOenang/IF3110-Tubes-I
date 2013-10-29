// AJAX Script for Shop
// Dongkol Ampas Bro - 29 October 2013
// @version 1.0.0

function onAddToCart(strUrl, id) {
        var xmlHttpRequest = false;
        var self = this;
            
        if (window.XMLHttpRequest) { // jika menggunakan browser selain IE
            self.xmlHttpRequest = new XMLHttpRequest();
        } else if (window.ActiveXObject) { // jika menggunakan browser IE
            self.xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }
        self.xmlHttpRequest.open('POST', strUrl, true); // URL tempat POST akan di-directkan
        self.xmlHttpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        self.xmlHttpRequest.onreadystatechange = function() {
            if (self.xmlHttpRequest.readyState == 4) { // Menunggu sampai POST selesai dilakukan
                var str = self.xmlHttpRequest.responseText;
                var n = str.indexOf("Success");
                alert(self.xmlHttpRequest.responseText);
                if (n != -1) {
                   document.getElementById('qty_' + id).value = 0;
                }
            }
        }
        
        var submitValue = true;
        var params;

        if (document.getElementById('deskripsi_tambahan').innerHTML.trim() != "") {
            params = "submit=" + submitValue + "&id_barang=" + id + "&qty=" + document.getElementById('qty_' + id).value
                    + "&deskripsi_tambahan=" + document.getElementById('deskripsi_tambahan').innerHTML.trim();    
        } else {
            params = "submit=" + submitValue + "&id_barang=" + id + "&qty=" + document.getElementById('qty_' + id).value;    
        }               

        self.xmlHttpRequest.send(params); // Melakukan proses pengiriman POST
}