
function sendAjax(data, target, callback){
	/* mengirim ajax ke target
	 * data = data yg mau dikirim, bentuknya json
	 * target = alamat
	 * callback = fungsi yg dipanggil kalo udah dibales. format fungsinya:
	 * 			  function callback(response), dengan response adalah balasan dari server
	 * 			  dalam bentuk json	
	 */
	  
	var request = new XMLHttpRequest();
	request.open("POST", target, true);
	request.onload = function(){
		if (callback!=null){
			try{
				callback(JSON.parse(this.responseText));
			}catch(err){
				alert(this.responseText);
				callback({"status":"error"});
			}
			
		}
	}
	
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	request.send("ajax=" + JSON.stringify(data));
}
