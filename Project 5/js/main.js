$(document).ready(function(){
    $("nav").toggleClass("active")
    $(".menu-toggle").click(function(){
        $("nav").toggleClass("active")
    })

    var myIndex = 0;

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 3000); // Change image every 2 seconds
    }
    carousel();


})