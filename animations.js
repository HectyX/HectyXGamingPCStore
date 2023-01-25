var elements = document.getElementsByClassName("fade-in");

window.addEventListener("scroll", function(){
  for (var i = 0; i < elements.length; i++){
    var positionFromTop = elements[i].getBoundingClientRect().top;
    if(positionFromTop - window.innerHeight <= 0){
      elements[i].classList.remove("fade-in");
    }
  }
});
  