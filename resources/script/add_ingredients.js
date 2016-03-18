$().ready(function(){
    
    /*$('#pressMe2').prop('disabled', true);	*/
    
        $("#pressMe1").click(function(){ 
            var name = $("#name").val();
            var text = $("#text").val();
            $.ajax({
                type: 'POST',
                data: {'newRecipeName': name, 'newRecipeProcedure': text},
                url: 'sendRecipe'
                })
    
        });
        
        $("#name").keypress( function() {
            var textlength = $('#name').val().length;
                if (textlength > 0){
        	    	$('#pressMe1').prop('disabled', false);
            	}
        });
        


       $("#ingrName").keypress( function() {
            var textlength = $('#ingrName').val().length;
                if (textlength > 0){
        	    	$('#pressMe2').prop('disabled', false);
            	}
        });

 
 
    	 $("#pressMe2").click(function(){ 
    		var text2 = $('#ingrName').val();
    		$("#ingredients_list").prepend(text2 + '<br />');
    		$('#ingrName').val(" ");
    	});
});


    


    
