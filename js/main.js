$(document).ready(function(){
	$(".button-collapse").sideNav();
	 $('.tooltipped').tooltip({delay: 50});
    var availableTags = [
    "All",
      "PRI",
      "PAN",
      "PRD",
      "MOVCI",
      "PANAL"
    ];
var estados=[
"All",
"Aguascalientes",
"Baja California",
"Baja California Sur",
"Campeche",
"Chiapas",
"Chihuahua",
"Coahuila",
"Colima",
"Distrito Federal",
"Durango",
"Estado de Mexico",
"Guanajuato",
"Guerrero",
"Hidalgo",
"Jalisco",
"Michoacan",
"Morelos",
"Nayarit",
"Nuevo León",
"Oaxaca",
"Puebla",
"Queretaro",
"Quintana Roo",
"San Luis Potosi",
"Sinaloa",
"Sonora",
"Tabasco",
"Tamaulipas",
"Tlaxcala",
"Veracruz",
"Yucatan",
"Zacatecas"];

$("#reset").on("click",function(){
	$(".avatar").removeClass("hide");
	$( "#partido" ).val("");
	$( "#estado").val("");
});
	$( "#partido" ).autocomplete({
      source: availableTags,
      select: function( event, ui ) {
	      	console.log("entro");
	    	$(".avatar").addClass("hide");

	    	if($("#estado").val()==""){
	    		$("."+$(this).val()).removeClass("hide");	
	    	}else{
	    		$("."+$(this).val()+"."+$("#estado").val()).removeClass("hide");
	    	}

      }
    });
	$( "#estado" ).autocomplete({
      source: estados,
      select: function( event, ui ) {
	      	console.log("entro");
	    	$(".avatar").addClass("hide");

	    	if($("#partido").val()==""){
	    		$("."+$(this).val()).removeClass("hide");	
	    	}else{
	    		$("."+$(this).val()+"."+$("#partido").val()).removeClass("hide");
	    		//$('.'+$("#partido").val()).removeClass("hide");
	    	}
	    	
      }
    });    
    /*$( "#partido" ).on("change",function(){
    	console.log("entro");
    	$(".collection-item").addClass("hidden");

    	if($("#estado").val()==""){
    		$("."+$(this).val()).removeClass("hidden");	
    	}else{
    		$("."+$(this).val()+" "+$("#estado").val()).removeClass("hidden");
    	}
    	
    });*/

});


