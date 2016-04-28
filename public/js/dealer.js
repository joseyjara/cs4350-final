/**









**/


//This is a component of mainApp we activate when we need.
MainApp.Dealer = (function(){

    
    var dealer_table = $(".dealer_table"),
        dealer_table_tr = $(".dealer_table tr"),
        dealer_form = $(".dealer_form"),
        //This is where all the ratings are located. rating_col_data
        rating_col_data = $(".rating"),
        id_field = $("#id");
    
    //We make a submission on a form.
    
    
    init = function(){
      
      //Jose, stick what you need to here or create a method and link it here.
      //I referenced the table already with JQuery and added some helper methods.
      //One I use is 
      
      
      //Do whatever you want here.
      rating_col_data.each(function(index, element){
        
        //On each iteration, what do we do with each rating?
        var rating = parseInt(element.innerHTML);
        var htmlToInject ="";
        //There's your rating.
        if(rating < 5){
          
          for(var i = 0; i < rating; i++){
            htmlToInject += "<i class='glyphicon glyphicon-star'></i>";
          }  
          for(var j = 0; j < (5 - rating); j++){
            htmlToInject += "<i class='glyphicon glyphicon-star-empty'></i>";
          }
        }
        else{
            htmlToInject += "<i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i><i class='glyphicon glyphicon-star'></i>";
        }   
        
        element.innerHTML = htmlToInject;
      
      });
      
      
      
      
      
      
      var events = [{element: dealer_table_tr, event:"click", function: load_single}]
      MainApp.register_events(events);
      
      
    };
  
    load_single = function(event){
      console.log(event);
      //Make a call to the server by passing the id of the dealer back
      var id = $(this).children()[0].innerHTML;
      console.log(id);
      //Now we take the id and change the value of our id field.
      id_field.val(id);
      
      dealer_form.submit();
      
      
      
    };
  
  
    return {
      
      init: init
      
      
    };
  
  
  
})();

MainApp.Dealer.init();