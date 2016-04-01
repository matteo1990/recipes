$().ready(function(){
    
    

        $("#pressMe1").click(function(){ 
            var name = $("#name").val();
            var text = $("#procedure").val();
    	    var text3 = arrIngredients;
    		
            $.ajax('sendRecipe',
            {
                type: 'POST',
                data: {'addIngredients': text3, 'newRecipeName': name, 'newRecipeProcedure': text, '_token': $('input[name=_token]').val()},
               success:function(){
               window.location.href = 'recipes';
            },
            });      
             
           $('#name').val(" ");
           $('#procedure').val(" ");
           $('#ingrName').val(" ");
    
        });
        
         $("#pressMe2").click(function(){ 
    	    var text2 = $('#ingrName').val();
    		$("#ingredients_list").prepend(text2 + "<br />");
    		arrIngredients.push(text2);
    		$('#ingrName').val("");

        });
        
       
        
        
        /* 
        ingredients' array.
        */

        var arrIngredients = [];
        


        /*button controls: from disabled to enabled.
        */
        
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
        
        
	
});