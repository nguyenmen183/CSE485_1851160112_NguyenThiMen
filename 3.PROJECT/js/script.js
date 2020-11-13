//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


$(document).ready(function(){
  // màu cho nút khi hover
    $(".btn").mouseover(function () {
      $(this).css("background-color","#273716") 
      
    });
    $(".btn").mouseleave(function () { 
      $(this).css("background-color","#82b74b")
    });
    // màu cho thẻ khi hover
    $(".iconbox").mouseover(function () { 
      $(this).css("background-color","#f4f4f4")
        let chil= $(this).children().children(".iconcircle");
        chil.css("background-color","#82b74b")
        let chil2 =chil.children()
        chil2.css("color","white")
    });
    $(".iconbox").mouseleave(function () { 
      $(this).css("background-color","white")
      let chil= $(this).children().children(".iconcircle");
      chil.css("background-color","white")
      let chil2 =chil.children()
      chil2.css("color","#82b74b")
    });
    $(".iconbox").mouseleave(function () { 
      $(this).css("background-color","#efefef")
    });

})