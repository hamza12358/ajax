$("#submit").click( function () {
	
		$.post( $("#myform").attr("action"),
	            $("#myform :input") .serializeArray(),
                function(info){
					$("#ack").empty();
                    $("#ack").html(info);
					clear();
		    }); 

         $("#myform").submit( function(){
			 return false;
        });
});
function clear () {
	$("#myform :input").each( function (){
		$(this).val("");
	})
}