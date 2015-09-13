<script type="text/javascript">
$(document).ready(function(){

	Parse.initialize("yNNYWc4bNyk1okUlCQfO81QJ2r0WQk78MieWtJuS", "tHr3JKcmhxVLTClvUQ9LOjxxvfx99zA3Pb1HkEl4");	
	encontrar(id);
 	
});
var diputado = new Parse.Object("Diputado");
var json={};
var id=<?=$_REQUEST['id']?>;
function encontrar(id){	

var banderas={"PRI":"pri01.png","PAN":"pan.png","PRD":"prd01.png","MOVCI":"movci.png","PANAL":"ali.gif"};

		var query = new Parse.Query("Diputado");
		//query.limit(360);
		query.equalTo("number",parseInt(id));
		
		query.first({
		  success: function(object) {
		  	diputado=object;
		  	json=object.toJSON();
		  	//console.log(object.toJSON());
		    //object.set("DName", "aaaa");
		    //object.save();
		    $("#nombre").val(object.get("name"));
		    $("#tipoEleccion").val(object.get('tipoEleccion'));
		    $("#entidad").val(object.get('entidad'));
		    $("#circunscripcion").val(object.get("circunscripcion"));
		    $("#curul").val(object.get("curul"));
		    console.log(object.get("foto"));
		    $("#imgDip").attr("src",object.get("foto"));
		    $("#imgPar").attr("src","/images/ico/"+banderas[object.get("party")]);
		    var dat=object.get("correo");
		    dat=dat.split(" ");
		    $("#email").val(dat[1]);
		    //console.log(json.academicos);
//[{"concepto":"Maestra","descripcion":"Administracin Pblica Estatal y Municipal","grupo":"ESCOLARIDAD","tiempo":"Ag 2006 Dic 2008"},{"concepto":"Especialidad","descripcion":"Orientacin y Desarrollo Humano","grupo":"ESCOLARIDAD","tiempo":"20002002"},{"concepto":"Licenciatura","descripcion":"Psicologa Clnica","grupo":"ESCOLARIDAD","tiempo":"1984  1988"},{"concepto":"Sria de Accin Ciudadana CDM Len Gto","descripcion":"PAN","grupo":"TRAYECTORIA POLTICA","tiempo":"19891991"},{"concepto":"Integrante del CDE del PAN en Qro","descripcion":"PAN","grupo":"TRAYECTORIA POLTICA","tiempo":"20042007"},{"concepto":"Integrante del CDE del PAN en Qro","descripcion":"PAN","grupo":"TRAYECTORIA POLTICA","tiempo":"20072010"},{"concepto":"Diputado Local Suplente PAN","descripcion":"LV Legislatura","grupo":"EXPERIENCIA LEGISLATIVA","tiempo":"19911994"},{"concepto":"Diputado Local Propietario PAN","descripcion":"LIV Legislatura","grupo":"EXPERIENCIA LEGISLATIVA","tiempo":"20032006"},{"concepto":"Diputado Federal Propietario PAN","descripcion":"LXII Legislatura","grupo":"EXPERIENCIA LEGISLATIVA","tiempo":"20122015"},{"concepto":"Delegada Estatal","descripcion":"INAPAM","grupo":"ADMINISTRACIN PBLICA FEDERAL","tiempo":"Sept 2011Feb 2012"},{"concepto":"Dir Relaciones Pblicas","descripcion":"Mpio de Len Gto","grupo":"ADMINISTRACIN PBLICA LOCAL","tiempo":"19921996"},{"concepto":"Dir Programas de la niez","descripcion":"DIF Mpal Len Gto","grupo":"ADMINISTRACIN PBLICA LOCAL","tiempo":"19961998"},{"concepto":"Dir Rel Pblicas y Comunicacin","descripcion":"Mpio de Corregidora Qro","grupo":"ADMINISTRACIN PBLICA LOCAL","tiempo":"20012003"},{"concepto":"Psicloga Clnica","descripcion":"Casa Cuna Amigo Daniel","grupo":"INICIATIVA PRIVADA","tiempo":"19871988"},{"concepto":"Psicloga Clnica","descripcion":"Consulta Privada en consultorio","grupo":"INICIATIVA PRIVADA","tiempo":"19871991"},{"concepto":"Docente","descripcion":"Asignatura Teora de la Psicologa ","grupo":"ACTIVIDADES DOCENTES","tiempo":"1988 1990"},{"concepto":"Docente","descripcion":"Asignatura Orientacin Educativa","grupo":"ACTIVIDADES DOCENTES","tiempo":"19881989"},{"concepto":"Ponente","descripcion":"Taller Oratoria y Debate","grupo":"ACTIVIDADES DOCENTES","tiempo":"2003"},{"concepto":"Artculos Varios","descripcion":"Revista","grupo":"PUBLICACIONES","tiempo":"Mensual "},{"concepto":"Cpsulas Radiofnicas en Grupo ACIR","descripcion":"Editorial","grupo":"PUBLICACIONES","tiempo":"Sept 2011 Feb 2012"},{"concepto":"Presidente de Mesa Directiva Congreso Local Quertaro","descripcion":"LIV Legislatura","grupo":"CARGOS EN LEGISLATURAS LOCALES O FEDERALES","tiempo":" "},{"concepto":"Integrante Comisin Administracin y Procuracin de Justicia Congreso Local Quertaro","descripcion":"LIV Legislatura","grupo":"CARGOS EN LEGISLATURAS LOCALES O FEDERALES","tiempo":" "},{"concepto":"Presidenta Comisin de Equidad y Grupos Vulnerables Congreso Local Quertaro","descripcion":"LIV Legislatura","grupo":"CARGOS EN LEGISLATURAS LOCALES O FEDERALES","tiempo":" "},{"concepto":"Integrante Comisin de Redaccin y Estilo Congreso Local Quertaro","descripcion":"LIV Legislatura","grupo":"CARGOS EN LEGISLATURAS LOCALES O FEDERALES","tiempo":" "},{"concepto":"Integrante Comisin de Educacin Congreso Local Guanajuato","descripcion":"LV Legislatura","grupo":"CARGOS EN LEGISLATURAS LOCALES O FEDERALES","tiempo":" "}]
		    for (var i = 0;i<json.academicos.length ; i++) {
		    		//console.log(json.academicos);
		    	var card='<div class="card blue-grey darken-1 hovered">'+
			            '<div class="card-content white-text">'+
			              '<span class="card-title">'+json.academicos[i].grupo+'</span>'+
			              '<p>'+json.academicos[i].concepto+' - '+json.academicos[i].tiempo+' <br>'+json.academicos[i].descripcion+'</p>'+
			            '</div>'+
			          '</div>';
			    $("#comisionesTexto").append(card);      

		    };
		    var concepntos={"A":"light-blue accent-4 black-text","AC":"red","PM":"red","AOI":"red darken-1","IJ":"teal lighten-1","I":"black white-text","IV":"teal darken-3"}
//[{"dias":[{"concepto":"A","dia":"1"},{"concepto":"A","dia":"3"},{"concepto":"A","dia":"5"},{"concepto":"A","dia":"10"},{"concepto":"A","dia":"12"},{"concepto":"A","dia":"17"},{"concepto":"A","dia":"19"},{"concepto":"A","dia":"24"},{"concepto":"A","dia":"26"}],"mes":" Febrero 2015 "},{"dias":[{"concepto":"A","dia":"3"},{"concepto":"A","dia":"5"},{"concepto":"PM","dia":"10"},{"concepto":"PM","dia":"12"},{"concepto":"PM","dia":"18"},{"concepto":"PM","dia":"19"},{"concepto":"A","dia":"24"},{"concepto":"A","dia":"25"},{"concepto":"A","dia":"26"}],"mes":" Marzo 2015 "},{"dias":[{"concepto":"A","dia":"7"},{"concepto":"A","dia":"8"},{"concepto":"A","dia":"9"},{"concepto":"A","dia":"14"},{"concepto":"A","dia":"16"},{"concepto":"A","dia":"21"},{"concepto":"A","dia":"22"},{"concepto":"A","dia":"23"},{"concepto":"PM","dia":"28"},{"concepto":"A","dia":"29"},{"concepto":"A","dia":"30"}],"mes":" Abril 2015 "}]		    
		    for (var i = 0;i<json.asistencias.length ; i++) {
		    		//console.log(json.academicos);
		    	var card='<div class="col s12">';
		    	card+='<div class="col s12"><h5 class="center-align">'+json.asistencias[i].mes+'</h5></div>';
		    	card+='<div class="col s12">';	
		    	for (var y = 0;y<json.asistencias[i].dias.length ; y++) {
		    		console.log(json.asistencias[i].dias);
		    		card+='<a class="btn-floating btn-large red tooltipped '+concepntos[json.asistencias[i].dias[y].concepto]+'" data-position="bottom" data-delay="50" data-tooltip="'+json.asistencias[i].dias[y].concepto+'" btn-floating btn-large waves-effect waves-light red">'+json.asistencias[i].dias[y].dia+'</a>';	
		    	}	
		    	card+='</div></div>';
			    $("#asistenciasTexto").append(card);      

		    }; 
		     $('.tooltipped').tooltip({delay: 50});
		  },
		  error: function(error) {
		    alert("Error: " + error.code + " " + error.message);
		  }
		});
		
}
</script>
<div class="row"><br></div>
<div class=" row">
	<div class="col s12 m10 l8 offset-m1 offset-l2  comisionesTitle">
	 	<div class="col s12 m3 l4"><img id="imgDip" class="responsive-img" src=""></div>
	 	<div  class="col s12 m3 l4"><img id="imgPar" class="responsive-img circle" src=""></div>
	 	<div  class="col s12 m3 l4"><button class="btn waves-effect"><i class="material-icons">thumb_down</i>JSON</button></div>
	</div>
</div>
<div class=" row">
	<div class="col s12 m10 l8 offset-m1 offset-l2  comisionesTitle">
	 	<h5 class="center-align card-panel teal lighten-2">Datos</h5>
	</div>
</div>
<div class="row">
	<div class="col s12 m10 l8 offset-m1 offset-l2">
		<div class="input-field col s5">
      		<input value="w" id="nombre" type="text" class="inactive validate">
      		<label class="active " for="nombre">Nombre</label>
    	</div>
		<div class="input-field col s5">
      		<input value="w" id="tipoEleccion" type="text" class="inactive validate">
      		<label class="active " for="tipoEleccion">Tipo de eleccion</label>
    	</div>
		<div class="input-field col s5">
      		<input value="w" id="entidad" type="text" class="inactive validate">
      		<label class="active " for="entidad">Entidad</label>
    	</div>
		<div class="input-field col s5">
      		<input value="w" id="circunscripcion" type="text" class="inactive validate">
      		<label class="active " for="circunscripcion">Circunscripcion</label>
    	</div>
		<div class="input-field col s5">
      		<input value="w" id="curul" type="text" class="inactive validate">
      		<label class="active " for="curul">Curul</label>
    	</div>    	    	    
		<div class="input-field col s5">
      		<input value="w" id="email" type="text" value="" class="inactive validate">
      		<label class="active " for="email">Email</label>
      	</div>    		    	
	</div>
</div>
<div class=" row">
	<div class="col s12 m10 l8 offset-m1 offset-l2  comisionesTitle">
	 	<h5 class="center-align card-panel teal lighten-2">Comisiones a las que Pertenece</h5>
	</div>
</div>
<div class=" row">
	<div class="col s12 m10 l8 offset-m1 offset-l2 " id="comisionesTexto">
	 	
	</div>
</div>
<div class=" row">
	<div class="col s12 m10 l8 offset-m1 offset-l2  comisionesTitle">
	 	<h5 class="center-align card-panel teal lighten-2">Segundo Período de Sesiones Ordinarias del Tercer Año</h5>
	</div>
</div>
<div class=" row">
	<div class="col s12 m10 l8 offset-m1 offset-l2 " id="asistenciasTexto">
	 	
	</div>
</div>
<div class=" row">
	<div class="col s12 m10 l8 offset-m1 offset-l2 " >
	 	<p style="font-weight:bold;">
		A = Asistencia por sistema<br>
		AC = Asistencia por cédula<br>
		AO = Asistencia por Comisión Oficial<br>
		  
		PM = Permiso de Mesa Directiva<br>
		IJ = Inasistencia justificada<br>
		I = Inasistencia<br>
		IV = Inasistencia por Votaciones<br>
		</p>
	</div>
</div>




