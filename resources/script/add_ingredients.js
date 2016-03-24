$().ready(function(){
    
    /*$('#pressMe2').prop('disabled', true);	*/

        $("#pressMe1").click(function(){ 
            var name = $("#name").val();
            var text = $("#procedure").val();
            console.log(name+" "+text);
            $.ajax('sendRecipe',
            {
                type: 'POST',
                data: {'newRecipeName': name, 'newRecipeProcedure': text, '_token': $('input[name=_token]').val()},
                success:function(){
                window.location.href = 'read_recipes';
            },
            });      
            
           $('#name').val(" ");
           $('#procedure').val(" ");
    
        });
        
         $("#pressMe2").click(function(){ 
    		var text2 = $('#ingrName').val();
    		$("#ingredients_list").prepend(text2 + '<br />');
    		arrIngredients.push(text2);
    		$('#ingrName').val(" ");
    
            console.log(text2);
            $.ajax('sendIngredient',
            {
                type: 'POST',
                data: {'addIngredients': text2, '_token': $('input[name=_token]').val()},
            });     

        });
        
        
        /* 
        ingredients array.
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