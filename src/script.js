var purchased=new Array();
var totalPrice=0;

$(document).ready(function() {
	tooltip(e,message);
	
	$("product img").draggable({
		containment:'document',
		opacity:0.6,
		revert:'invalid',
		helper:'clone',
		zIndex:100
	});
	
	$("div.content.drop-here").droppable({
		drop:
			function(e, ui) {
				var param = $(ui.draggable).attr('src');
				addlist(param);
			}
	});
});

function tooltip(e,message) {
	var x=0;
	var y=0;
	var m;
	var h;
	if(!e) var e=window.event;
	if(e.pageX||pageY) {
		x=e.pageX;
		y=e.pageY;
	} else if(e.clientX||e.clientY) {
		x=e.clientX+document.body.scrollLeft+document.documentElement.scrollLeft;
		y=e.clientY+document.body.scrollTop+document.documentElement.scrollTop;
	}
	m=document.getElementById('mktipmsg');
	
	if((Y>10)&&(y<450)) {
		m.style.top=y-4+"px";
	} else {
		m.style.top=y+4+"px";
	}
	
	var messageHeight=(message.length/20)*10+25;
	
	if((e.clientY+messageHeight)>510) {
		m.style.top=y-messageHeight+"px";
	} else if (x<850) {
		m.style.left=x+20+"px";
	} else {
		m.style.left=x-170+"px";
	}
	
	m.innerHTML=message;
	m.style.display="block";
	m.style.zIndex=203;
	
	onShow: function() {
		var param = this.getParent().find('img').attr('src');
		this.load('ajax/tips.php',{img:param});
	}
}

function hidetip() {
	var m;
	m=document.getElementById('mktipmsg');
	m.style.display="none";
}

function addlist(param) {
	$.ajax({
		type:"POST",
		url:"ajax/addtocart.php",
		data:'img='+encodeURIComponent(param), dataType:'json', beforeSend: function(x) {$('ajax-loader').CSS('visibility','visible');},success: function(msg)''
}

