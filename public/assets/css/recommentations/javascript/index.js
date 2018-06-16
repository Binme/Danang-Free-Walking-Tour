 var slideIndex;
      // funtion show slide
 function showSlides() {
      var i;
      var slides = document.getElementsByClassName("hiddenslide");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }

      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }

      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //next slide
      slideIndex++;
      // if stay at slide last to slide fist
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      } 
      //after 5s run slide
      setTimeout(showSlides, 3000);  
 }

 function currentSlide(n) {
        showSlides(slideIndex = n);
}
// fix slide fist
    showSlides(slideIndex = 0);

///////////////////////////////////////////////////////////////////
// save date order 
// function myFunction() {
//     var x = document.getElementById("myDate").value;
//     document.getElementById("demo").innerHTML = x;
// }
// button top for web 
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "inline-block";
    } else {
        document.getElementById("myBtn").style.display = "inline-block";
    }
}

// When the user clicks on the button, scroll to the top of the document

if($(".btn-top").length > 0){
        $(window).scroll(function () {
            var e = $(window).scrollTop();
            if (e > 300) {
                $(".btn-top").show()
            } else {
                $(".btn-top").hide()
            }
        });
        $(".btn-top").click(function () {
            $('body,html').animate({
                scrollTop: 0
            })
        })
    }   //go to top  


// ///////////////////////////////////////////////////

//LOGIN AND REGISTER

$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});

$(document).ready(function(){
    $("#myBtn1").click(function(){
        $("#myModal1").modal();
    });
});

///////////////////////////////////////////////////////
var data = new Array();
function register(){
  var usname = document.getElementById('usname').value;
  var password = document.getElementById('psw1').value;
  var confimPsw = document.getElementById('cfpsw').value;

  // data.push({uname:usname, passw:password, cfpw:confimPsw});

  if(password != confimPsw){
    alert('Đăng Kí Không Thành Công');
  }
  else{
    alert('Đăng kí thành công');
  }
}

// var arrLogin = new Array();
// function login(){
//   var usName_login = document.getElementById('usrname').value;
//   var pass_login = document.getElementById('psw').value;
//   var checkbox = document.getElementById('check').value;

//   if (usName_login == usname && password == pass_login ) {
//     alert('Đăng Nhập thành công');
//   }
//   else{
//     alert('Đăng Nhập Không Thành Công');
//   }
// }

//////////////////////////////////////////
//save information for customer
    var array = new Array();

    function imfor_cus(){
      var email = document.getElementById("mail").value;
      // alert('email');
      var name = document.getElementById("fname").value;
      var adress = document.getElementById("address").value;
      var phone = document.getElementById("phone").value;
      var date = document.getElementById("myDate").value;
      var name_food = document.getElementById("namefood").value;
      var price_food = document.getElementById("price").value;
      var quanlity = document.getElementById("quanlity").value;

      document.write(array[1].address_cus);
      document.getElementById("display").innerHTML = adress ;

      array.push({emailC:email, name_cus:name, address_cus:adress, phone_cus:phone, dateorder:date});


}










