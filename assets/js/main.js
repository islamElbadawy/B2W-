$(function() {
   
    //cachthe window object
    var $window = $(window);
    
    //parallax background effect
    $('section[data-type="background"]').each(function(){
       
        var $bgobj = $(this); //assigning the object
        
        $window.scroll(function(){
            
                //scroll the background at var speed
                //the y pos is a negative value because we're scrolling up

                var yPos = -($window.scrollTop() / $bgobj.data('speed'))

                //put together ourcfinal background position 

                var coords = '50%' + yPos + 'px';

                //move the background 
                $bgobj.css({backgroundPosition: coords});
        });//end window scroll
        
    });
    
});