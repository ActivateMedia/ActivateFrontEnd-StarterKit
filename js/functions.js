$(function(){ 
    // Main JS code here (delete this comment)
});

function toggleAnimation(target, animation) {
    console.log("Animation("+animation+") on " + target);
    $(target).addClass('animated ' + animation);
    $(target).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(target).removeClass('animted ' + animation);
    });
}