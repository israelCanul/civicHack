<script type="text/javascript">
$(document).ready(function(){

	Parse.initialize("yNNYWc4bNyk1okUlCQfO81QJ2r0WQk78MieWtJuS", "tHr3JKcmhxVLTClvUQ9LOjxxvfx99zA3Pb1HkEl4");	
	var lista=listar();

});


function listar(){	

var banderas={"PRI":"pri01.png","PAN":"pan.png","PRD":"prd01.png","MOVCI":"movci.png","PANAL":"ali.gif","MORENA":"mor.jpg"}

		var query = new Parse.Query("Diputado");
		query.limit(360);
		query.find({
	    success:function(results) {
	    	var jsonArray = [];

	        for(var i = 0; i < results.length; i++) {
	           jsonArray.push(results[i].toJSON());
	        } 
	            
	    	var colection='';
			for (var i = 0; i < results.length; i++) {
		    	colection+='<li class="collection-item avatar '+jsonArray[i].party+' '+jsonArray[i].entidad+'" data-partido="'+jsonArray[i].party+'" data-estado="'+jsonArray[i].entidad+'" ">'+
						      	'<img src="/images/ico/'+banderas[jsonArray[i].party]+'" alt="" class="circle">'+
						      	'<span class="title">'+jsonArray[i].name+'</span>'+
						      	'<p>'+jsonArray[i].entidad+'<br>'+jsonArray[i].party+'</p>'+
						      	'<a href="/site/busqueda?id='+jsonArray[i].number+'" class="secondary-content"><i class="material-icons">search</i></a>'+
						    	'</li>';					
				//results[i]
				//console.log("Total: "+jsonArray[i].name);
			};	    	
			$(".collection").html(colection);
	            
	            /*console.log("entro");*/
	        	//return results;      


	        	 $('.tooltipped').tooltip({delay: 50});
	        },
	        error:function(error) {
	        alert("Error when getting objects!");
	        }
	    });
		
}
</script>
<div class="row">
<div class="col s12 m10 offset-m1 l8 offset-l2 white black-text">
	<div class="input-field col s5">
      <input value="" id="estado" type="text" class="validate">
      <label class="active " for="estado">Estado</label>
    </div>
	<div class="input-field col s5">
      <input value="" id="partido" type="text" class="validate">
      <label class="active" for="partido">Partido</label>
    </div>    
	<div class="input-field col s2">
      <button class="btn-floating btn-large waves-effect waves-light red" id="reset"><i class="material-icons">settings_backup_restore</i></button>
      
    </div>
</div>
	<div class="col s12 m10 offset-m1 l8 offset-l2">
		<ul class="collection">

		</ul>
	</div>
</div>