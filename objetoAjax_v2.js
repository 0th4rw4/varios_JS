//sebastianarca@riseup.net
//sebastianarca.com.ar
//GPG KeyID 80FEA850
//80FEA850 D3A8 D50C 17D8 91EC 0E0E AB16 67F7 E997 80FE A850
var ajax = function (conf){
	var priv = {
	ajaxES:[
		function () {return new XMLHttpRequest()},
		function () {return new ActiveXObject("Microsoft.XMLHTTP")},
		function () {return new ActiveXObject("Msxml2.XMLHTTP")},
		function () {return new ActiveXObject("Msxml3.XMLHTTP")}
	],
	gen: function(){
		var ajax2 = undefined;
		for(var i =0; i < priv.ajaxES.length; i++) {
			var f = priv.ajaxES[i];
			try {
				ajax2 = f();
				break;
			} catch (error) {
				console.log(error);
				continue;
			} }
		return ajax2;
	},
	init:function(){ 
		//funcion = que funcion se dispara
		var xhr = priv.gen();
		
		if(conf.metodo=='GET') var url = conf.url+'?'+conf.param;
		else var url = conf.url;
		
		xhr.open(conf.metodo, url, true); 
		
		if(conf.metodo == 'POST') {
			xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			xhr.setRequestHeader("Content-length", conf.param.length);
			xhr.setRequestHeader("Connection", "close");
		}
 		xhr.onreadystatechange=function() { 
			if (this.readyState == 4 && this.status == '200') 	conf.funcion(this);
			else return this.readyState;	
		}
		if(conf.metodo=='POST') xhr.send( conf.param );
		else  xhr.send( null );
	} } 
	return { 
		init:priv.init,
		valorRetorno:
	}
}
//Modo de Uso 
/*
var pirataLoro = ajax({
	metodo:'POST',
	url:'ajax.php',
	param:'m=holaMundo&siguiente=valor',
	funcion:function (xhr){ console.log(xhr.responseText); }
});
pirataLoro.init();
*/