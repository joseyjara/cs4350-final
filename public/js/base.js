/**
* FileName: base.js
*
* Description: Serves as our base Javascript object that provides base functionality throughout our app.
*
*
**/


var MainApp = (function(){
  
  
  
  
  
   app = function(){
    
    
    
    
    
    
  };

  
  search = function(){
    
    
    
    
    
    
  };
  
  lexicon = function(data){
    
    
    //Take the data and parse it.
    
    //Is data a string?
    
    
    
    
    
    
    
    
    
    
    
  }
  
  
  
  
  
  
  //We follow the format -
  //Each argument is an object.
  //{element, eventName:, function: }
  register_events = function(){
    
    var args = Array.prototype.slice.call(arguments);
    
    //Now we break this up into our events.
    for(var i=0;i<args.length; i++){
      args[0][i].element.on(args[0][i].event, args[0][i].function);
    
    }
    
    
    
  };
  //Format {element, method, dataType, function}
  register_ajax = function(){
    
    var args = Array.prototype.slice.call(arguments);
    
    for(var i=0; i<args.length; i++){
      
      
      
      
      
    }
    
   
  };
  
  
  return {
    
    register_events:register_events,
    register_ajax: register_ajax
    
    
  };
  
  

  
})();