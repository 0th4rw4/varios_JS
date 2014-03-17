
var ajax = {
	ajaxES:[
		function () {return new XMLHttpRequest()},
		function () {return new ActiveXObject("Microsoft.XMLHTTP")},
		function () {return new ActiveXObject("Msxml2.XMLHTTP")},
		function () {return new ActiveXObject("Msxml3.XMLHTTP")}
	],
	gen: function(){
		var ajax2 = undefined;
		for(var i =0; i < ajax.ajaxES.length; i++) {
			var f = ajax.ajaxES[i];
			try {
				ajax2 = f();
				break;
			} catch (error) {
				console.log(error);
				continue;
			} }
		return ajax2;
	},
	init:function(metodo, url, envio, funcion){ 
		//funcion = que funcion se dispara
		var xhr = ajax.gen();
		xhr.open(metodo,url,true); 
		
		if(metodo == 'POST') xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
 		xhr.onreadystatechange=function() { 
			if (this.readyState == 4 && this.status == '200') 	funcion(this);
			else return this.readyState;	
		};
		xhr.send(envio);
	} };
var pirataLoro = ajax.init('GET','ajax.php?m=Tesoros',null,function(xhr){
	console.log(xhr.responseText);
});