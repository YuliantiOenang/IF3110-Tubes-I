// AJAX Script for Login Authentication
// Dongkol Ampas Bro - 27 October 2013
// @version 1.0.0

function onLoginClick(strUrl, formName, responseDiv) {
    var xmlHttpRequest = false;
    var self = this;
    
    if (window.XMLHttpRequest) {
        self.xmlHttpRequest = new XMLHttpRequest();
    } else if (window.ActiveXObject) { // if IE
        self.xmlHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    }
    self.xmlHttpRequest.open('POST', strUrl, true);
    self.xmlHttpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    self.xmlHttpRequest.onreadystatechange = function() {
        if (self.xmlHttpRequest.readyState == 4) {
            updatePage("Login Berhasil", responseDiv);
        }
		else{
			updatePage("Please wait...", responseDiv);
		}
    }
    
    self.xmlHttpRequest.send(getString(formName));
}

function getString(formName) {
    var form = document.forms[formName]; // mendapat form dari dokumen
    var qstr = "";
    
    function getElement(name, value) { // mendapat nilai-nilai dari form
        qstr += (qstr.length > 0 ? "&" : "")
            + escape(name).replace(/\+/g, "%2B") + "="
            + escape(value ? value : "").replace(/\+/g, "%2B");
    }
    
    var elementArray = form.elements;

    for (var i = 0; i < elementArray.length; i++) {
        var element = elementArray[i];
        var elementType = element.type.toUpperCase();
        var elementName = element.name;
        
        if (elementName) {
            if (elementType == "TEXT" || elementType == "PASSWORD") {
                getElement(elementName, element.value);
            }
        }
    }

    return qstr;
}

function updatePage(str, responseDiv) {
    document.getElementById(responseDiv).innerHTML = str;
}