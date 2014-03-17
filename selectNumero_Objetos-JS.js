//DWN4A-Parcial01-Tecnologia de las comunicaciones IV
var div = document.createElement('div');
div.setAttribute('id','div');
div.style.display = 'inline-block';
div.style.border = '1px solid red';
div.style.padding = '5px';
div.style.borderRadius = '7px'; 
var body = document.body;
body.appendChild(div);
body.style.textAlign='center';

var select = selectInsert({
	dentroDe:'div',
	id:'opciones',
	valores:['Uno','Dos','Tres','Cuatro','Cinco']		});
	
function selectInsert(config){
	/*
	var select = selectInsert({
		dentroDe:'div',
	 	id:'opciones',
		valores:['Uno','Dos','Tres','Cuatro','Cinco','Seis']
 	});
 	*/
 	var objtPrivado = {
 		domSelect:document.createElement('select'),
 		domOption:new Array(),
 		domSpan:new Array(),
 		cuantos:0,
 		dentroDe:function (){
 				if (! (objtPrivado.dentroDe = document.getElementById(config.dentroDe)	)	) 
 						 objtPrivado.dentroDe = document.body;
 				return objtPrivado.dentroDe;		},
 				
 		comienzo:function () {
 			//Si no puedo optener el campo select, procedo a crearlo
 			if (! (objtPrivado.select = document.getElementById(config.id))){
 				var contenido = objtPrivado.dentroDe();
 				contenido.appendChild(objtPrivado.domSelect);
 				objtPrivado.domSelect.setAttribute('id',config.id);
 				objtPrivado.domSelect.setAttribute('multiple','multiple');
 				objtPrivado.select = objtPrivado.domSelect;
 			}
 		
 			for (var i=0; i < config.valores.length ;i++) {
 				objtPrivado.domOption[i] = document.createElement('option');
 				objtPrivado.select.appendChild(objtPrivado.domOption[i]);
 				objtPrivado.domOption[i].value = config.valores[i];
 				objtPrivado.domOption[i].innerHTML = config.valores[i];
 				objtPrivado.cuantos++;
 			}
 			objtPrivado.listener.agregarDescripcion();
 			objtPrivado.padre = objtPrivado.select.parentNode;		},
 				
 		listener:{
 			agregarDescripcion:function () {
 				objtPrivado.select.onchange = function () {
 					for (var i=0; i < objtPrivado.cuantos ;i++) {
 					
 					if(objtPrivado.domOption[i].selected){
 						if(objtPrivado.domSpan[i] == undefined){ //control de caos
 							objtPrivado.domSpan[i] = document.createElement('div');
 							objtPrivado.padre.appendChild(objtPrivado.domSpan[i]);
	 						
 							objtPrivado.domSpan[i].innerHTML = config.valores[i];
 							objtPrivado.domSpan[i].style.border = '1px solid red';
 							objtPrivado.domSpan[i].style.padding = '5px';
 							objtPrivado.domSpan[i].style.marginTop = '10px';
 							objtPrivado.domSpan[i].style.backgroundColor = 'white';
	 						objtPrivado.domSpan[i].style.borderRadius = '7px';	
 						}
 					}else objtPrivado.listener.quitarDescripcion(i);	}	}	},
 						
 			quitarDescripcion:function (i) {
						var op = 0.99;
						var ocultar = setInterval(function () {
							if( objtPrivado.domSpan[i] != undefined){ //control de caos
								op = parseFloat(op-0.01);
								objtPrivado.domSpan[i].style.opacity = op;
								if(op <= 0.1){
									clearInterval(ocultar);
									objtPrivado.padre.removeChild(objtPrivado.domSpan[i]);
									objtPrivado.domSpan[i] = undefined;
								}
							}else clearInterval(ocultar); }, 3);	}
 		}//cierre listener
 	};//cierre objtPrivado
 	objtPrivado.comienzo();
};