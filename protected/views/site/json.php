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
		query.equalTo("number",parseInt(id));
		
		query.first({
		  success: function(object) {
		  	diputado=object;
		  	json=object.getACL();
		  	console.log(json);
		  	//document.write('<pre>'+json.toJSON()+'</pre>');	

		  	
		  },
		  error: function(error) {
		    alert("Error: " + error.code + " " + error.message);
		  }
		});
		
}
</script>