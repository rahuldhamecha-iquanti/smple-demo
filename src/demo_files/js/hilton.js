let sliderName = document.getElementById("sliderRange");
$(".businessbenefits").hide();
let isDragging = false;

// Function to update the slider's position and handle value changes
function sliderval() {
    sldervalue = sliderName.value;
    //  document.querySelectorAll(".selected").classList.remove('selected');
    document.querySelectorAll(".selected").forEach(function (element) {
        element.classList.remove('selected');
    });
    if (sldervalue == 50000) {
        document.querySelectorAll(".range_1").forEach(function (element) {
            element.classList.add('selected');
        });
        document.querySelector(".span4" ).classList.add("selected");
    }
    else if (sldervalue == 100000) {
        document.querySelectorAll(".range_2").forEach(function (element) {
            element.classList.add('selected');
        });
        document.querySelector(".span3" ).classList.add("selected");
    }
    else if (sldervalue == 150000) {
        document.querySelectorAll(".range_3").forEach(function (element) {
            element.classList.add('selected');
        });
        document.querySelector(".span2" ).classList.add("selected");
    }
    else {
        // document.querySelector(".range_4").classList.add('selected');
        document.querySelectorAll(".range_4").forEach(function (element) {
            element.classList.add('selected');
        });
        document.querySelector(".span1" ).classList.add("selected");
    }
}
sliderval();

// // function changing the selected on hold
function sliderval2() {
    sldervalue = parseInt(sliderName.value);
    

    // Check the value and add 'selected' class accordingly
    if (sldervalue === 50000) {
        document.querySelectorAll(".reward_span4").forEach(function (element) {
            element.classList.add('selected');
        });
        document.querySelector(".span4").classList.add("selected");
      
       for(let i=1; i<=4; i++){
         if(i!=4){
            document.querySelectorAll(".span"+i).forEach(function (element) {
                element.classList.remove('selected');
            });
            document.querySelectorAll(".reward_span"+i).forEach(function (element) {
                element.classList.remove('selected');
            });
         }
       }
       

    } else if (sldervalue === 100000) {
        document.querySelectorAll(".reward_span3").forEach(function (element) {
            element.classList.add('selected');
        });
        document.querySelector(".span3").classList.add("selected");

        for(let i=1; i<=4; i++){
            if(i!=3){
               document.querySelectorAll(".span"+i).forEach(function (element) {
                   element.classList.remove('selected');
               });
               document.querySelectorAll(".reward_span"+i).forEach(function (element) {
                   element.classList.remove('selected');
               });
            }
          }


    } else if (sldervalue === 150000) {

        document.querySelectorAll(".reward_span2").forEach(function (element) {
            element.classList.add('selected');
        });
        document.querySelector(".span2").classList.add("selected");

        for(let i=1; i<=4; i++){
            if(i!=2){
               document.querySelectorAll(".span"+i).forEach(function (element) {
                   element.classList.remove('selected');
               });
               document.querySelectorAll(".reward_span"+i).forEach(function (element) {
                   element.classList.remove('selected');
               });
            }
          }
    } else if (sldervalue === 200000) {
        document.querySelectorAll(".reward_span1").forEach(function (element) {
            element.classList.add('selected');
        });
        document.querySelector(".span1").classList.add("selected");

        for(let i=1; i<=4; i++){
            if(i!=1){
               document.querySelectorAll(".span"+i).forEach(function (element) {
                   element.classList.remove('selected');
               });
               document.querySelectorAll(".reward_span"+i).forEach(function (element) {
                   element.classList.remove('selected');
               });
            }
          }
    }
}


// Call the sliderval function initially
sliderval();

// Attach the sliderval function to the change event of the slider

sliderName.addEventListener('change', sliderval);



// Step 1: Find the maximum height
function sameheight() {
    $('#compareCards .compare_eq').css("min-height", 0);
    sameclolum();
    let maxHeight = 0;
   setTimeout(function(){
    $('#compareCards .compare_eq').each(function () {

        if ($(this).closest(".compare_col").is(":hidden")){
      
    }
    else{
        const currentHeight = $(this).height();
        if (currentHeight > maxHeight) {
            maxHeight = currentHeight;
        }
    }
    });

    // Step 2: Set the maximum height to all divs
    $('#compareCards .compare_eq').css("min-height", maxHeight);
}, 500);
}

function sameclolum() {
    let maxHeight_padding_col = 0;
    $('#compareCards .padding_col').css("min-height", 0);
    $('.point_1').css("min-height", 0);
    $('.popup .padding_col').css("min-height", 0);
    $('#compareCards .padding_col').each(function () {
      
        if ($(this).closest(".compare_col").is(":hidden")){

        }
        else{
            const currentHeight_padding_col = $(this).height();
            if (currentHeight_padding_col > maxHeight_padding_col) {
                maxHeight_padding_col = currentHeight_padding_col;
            }
        }
    });

    let maxHeight_padding_pop = 0;
    $('.popup .padding_col').each(function () {
      
        if ($(this).closest(".compare_col").is(":hidden")){

        }
        else{
        const currentHeight_padding_pop = $(this).height();
        if (currentHeight_padding_pop > maxHeight_padding_pop) {
            maxHeight_padding_pop = currentHeight_padding_pop;
        }
    }
    });
    $('.popup .padding_col').css("min-height", maxHeight_padding_pop);
    $('#compareCards .padding_col').css("min-height", maxHeight_padding_col);
    let maxHeight_ponit = 0;
    $('.point_1').each(function () {
        
        if ($(this).closest(".compare_col").is(":hidden")){
        }
        else{
        const currentHeight_ponit = $(this).height();
        if (currentHeight_ponit > maxHeight_ponit) {
            maxHeight_ponit = currentHeight_ponit;
        }
    }
    });
    $('.point_1').css("min-height", maxHeight_ponit);
}
function sameheightpop() {
    $('.popup .compare_eq').css("min-height", 0);
    sameclolum();

    let maxHeight_popup = 0;
    setTimeout(function(){
    if ($(this).closest(".compare_col").is(":hidden")){
    }
    else{
        $('.popup .compare_eq').each(function () {

            const currentHeight_pop = $(this).height();
            if (currentHeight_pop > maxHeight_popup) {
                maxHeight_popup = currentHeight_pop;
            }

        });
    }


    // Step 2: Set the maximum height to all divs
    $('.popup .compare_eq').css("min-height", maxHeight_popup);
})
}

sliderName.addEventListener('change', sliderval);
   $(document).on('input', '#sliderRange', function() {
    sliderval();
});
var tabli = document.querySelectorAll(".tab li");
function handleClick(e) {
    // Add your code here to execute when the button is clicked
    tabli.forEach(function (element) {
        element.classList.remove('activetab');
    });
    document.querySelectorAll(".tab_details").forEach(function (element) {
        element.classList.remove('activeDel');
    });
    e.target.classList.add('activetab')
    //console.log(e.target.id)
    document.querySelector("." + e.target.id).classList.add("activeDel")

}

tabli.forEach(function (element) {
    //  element.classList.remove('activetab');
    element.addEventListener('click', handleClick);
});

 
vjcount = 0;
function handleResize() {
    // Check the window width and perform actions based on the width
    var windowWidth = window.innerWidth;

    if (windowWidth <= 769) {
        if (vjcount == 0){
    vjcount =+ 1;
	 let slideIndex = 2;
	
       
        showSlides(slideIndex);

        // function plusSlides(n) {
        //     showSlides(slideIndex += n);
        // }

        $('.mySlides ').bind('swiperight', handler3);
        function handler3(event) {




            slideIndex = slideIndex - 1;

            showSlides(slideIndex);
			 slider_mobile();
        }

        // swipe left

        $('.mySlides ').bind('swipeleft', handler4);
        function handler4(event) {
 


            showSlides(slideIndex += 1);
			slider_mobile();
		
        }
        document.querySelector(".prev").addEventListener("click", function () {
            slideIndex = slideIndex - 1;
            showSlides(slideIndex);
			 slider_mobile();
        });
        document.querySelector(".next").addEventListener("click", function () {
            showSlides(slideIndex += 1);
			 slider_mobile();
        });
        // function currentSlide(n) {
        //     showSlides(slideIndex = n);
        // }
        document.querySelectorAll(".dot").forEach(function (element) {
            element.addEventListener('click', function (e) {
                // showSlides(slideIndex = e.target.getAttribute('data-slide'));
                slideIndex = parseInt( e.target.getAttribute('data-slide'));
                showSlides(slideIndex);
				 slider_mobile();
            })
        })

        function showSlides(n) {
       
            document.querySelectorAll(".ApplyCardWrap").forEach(function (element) { element.classList.remove("banner_active"); });
            // var dataval = this.getAttribute('data-slide');
			document.querySelectorAll(".mySlides").forEach(function (element) { element.classList.remove("activeCard"); });

            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";

                //                     slides[i].className.replace(" activeCard", "");
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            //   document.querySelector(".wrap_" + slideIndex).classList.add("banner_active");

            var wrapClass = document.querySelector(".wrap_" + slideIndex);

            if (wrapClass) {
                // The element with the specified class was found
                wrapClass.classList.add("banner_active");  // Example: Adding a new class
            } else {
                // The element with the specified class was not found
             //   console.log("Element with class 'class' not found.");
            }

            //slides[i].classList.add("activeCard");
            //			  slides[slideIndex - 1].className += " activeCard";
			slides[slideIndex - 1].classList.add("activeCard");	
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";

        }
        document.querySelectorAll(".compare_eq").forEach(function (element) {
            element.style.height = 'auto';
        })
        document.querySelectorAll(".addMobcontainer").forEach(function (element) {
            element.classList.add("container")
        })
        document.querySelectorAll(".removeMobcontainer").forEach(function (element) {
            element.classList.remove("container")
        })
     if (window.location.href.indexOf("hil-dcl-q4") > -1) {
    //   showSlides(slideIndex = 1);
 $(".wrap_1").addClass("banner_active");
	 $(".wrap_2").removeClass("banner_active");
     $(".dot[data-slide='1']").click()
    }
	//  else if(window.location.href.indexOf("hil-bas-mclp-q4-dm") > -1) {
	//   showSlides(slideIndex = 1);
	//    $(".wrap_1").addClass("banner_active");
	//  $(".wrap_2").removeClass("banner_active");
    // }
	// else if(window.location.href.indexOf("hil-asp-mclp-q4-dm") > -1) {
	// 		  showSlides(slideIndex = 3);
	// 		   $(".wrap_3").addClass("banner_active");
	//  $(".wrap_2").removeClass("banner_active");
    // }
	// else if(window.location.href.indexOf("hil-ch-mclp-q4-dm") > -1) {
			
	// 	if(getCookie('card_info')=="base")
	// 	{
	// 	 $(".wrap_1").addClass("banner_active");
	//  $(".wrap_2").removeClass("banner_active");
	// 	  showSlides(slideIndex = 1);
	// 	}
	// 	else if(getCookie('card_info')=="aspire")
	// 	{
	// 		 $(".wrap_3").addClass("banner_active");
	//  $(".wrap_2").removeClass("banner_active");
	// 		showSlides(slideIndex = 2);
	// 	}
    // }

	}
   
	} else {
        vjcount = 0;
        // Code to execute for larger screens
        //height
        document.querySelectorAll(".addMobcontainer").forEach(function (element) {
            element.classList.remove("container")
        })
        setTimeout(sameheight, 1000);

        // You can add your specific code for larger screens here
    }
}
handleResize();
// Add a resize event listener to the window
window.addEventListener('resize', handleResize);

// var boxes = document.querySelectorAll('.box');




	
document.querySelectorAll(".mySlides").forEach(function (element) {
    element.addEventListener('mouseover', function () {
        document.querySelectorAll(".mySlides").forEach(function (element) { element.classList.remove("activeCard"); });
        document.querySelectorAll(".ApplyCardWrap").forEach(function (element) { element.classList.remove("banner_active"); });
        var dataval = this.getAttribute('data-slide');
        document.querySelector(".wrap_" + dataval).classList.add("banner_active");
        this.classList.add("activeCard");
		
    })
})
if(window.location.href.indexOf("hil-bas-mclp-q4-dm") > -1) {
		//alert("base dm");
	$(".wrap_1").addClass("banner_active");
	 $(".wrap_2").removeClass("banner_active");

      $("#banner_base").addClass("activeCard");
      $("#banner_surpass").removeClass("activeCard");
      $(".dot[data-slide='1']").click();
    }
	else if(window.location.href.indexOf("hil-asp-mclp-q4-dm") > -1) {
			//alert("aspire dm");
			$(".wrap_3").addClass("banner_active");
	 $(".wrap_2").removeClass("banner_active");

      $("#banner_aspire").addClass("activeCard");
	   $("#banner_surpass").removeClass("activeCard");
       $(".dot[data-slide='3']").click();
    }
	else if(window.location.href.indexOf("hil-bas-ch-q4-dm") > -1) {
		$(".wrap_1").addClass("banner_active");
	 $(".wrap_2").removeClass("banner_active");

			//alert("base chaser dm");
      $("#banner_base").addClass("activeCard");
	   $("#banner_surpass").removeClass("activeCard");
       $(".dot[data-slide='1']").click();
    }
	else if(window.location.href.indexOf("hil-asp-ch-q4-dm") > -1) {
		$(".wrap_3").addClass("banner_active");
	 $(".wrap_2").removeClass("banner_active");

		//alert("aspire chaser dm");
      $("#banner_aspire").addClass("activeCard");
	   $("#banner_surpass").removeClass("activeCard");
       $(".dot[data-slide='3']").click();
    }
	else if(window.location.href.indexOf("hil-ch-mclp-q4-dm") > -1) {
			//	alert("");
		if(getCookie('card_info')=="base")
		{
			//alert("");
			$(".wrap_1").addClass("banner_active");
	 $(".wrap_2").removeClass("banner_active");

     $(".dot[data-slide='1']").click();
		}
		else if(getCookie('card_info')=="aspire")
		{
			$(".wrap_3").addClass("banner_active");
	 $(".wrap_2").removeClass("banner_active");

     $(".dot[data-slide='3']").click();
		}
    }
	else if(window.location.href.indexOf("hil-q4-mclp-em") > -1) {
				
		if(getCookie('card_info')=="base")
		{
				$(".wrap_1").addClass("banner_active");
	 $(".wrap_2").removeClass("banner_active");
     $(".dot[data-slide='1']").click();
		}
		else if(getCookie('card_info')=="aspire")
		{
				$(".wrap_3").addClass("banner_active");
			$(".wrap_2").removeClass("banner_active");
            $(".dot[data-slide='3']").click();
		}
    }
function slider_mobile() {

 

   var idmyslde = $(".mySlides.activeCard").attr('id');

   $(".gold .h3_tab").not(".two_cards").hide();
	$(".businessbenefits").hide();
   if(idmyslde == "banner_aspire"){

    $("#diamond").click();

   }

   else if(idmyslde == "banner_surpass") {

    $("#gold").click();

    $(".gold .h3_tab").show();

    $(".business_tab").hide();

    $(".two_cards").hide();

   $("#surpass_ben").show();
$(".businessbenefits").hide();

   }

   else if(idmyslde == "banner_business") {

    $("#gold").click();
    $("#surpass_ben").hide();
$(".businessbenefits").show();
    $(".gold .h3_tab").hide();

    $(".business_tab").show();
	$('.single_dagger').hide();

    }

    else{

        $("#silver").click();

        $(".two_cards").show();

    }

 

}
 function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
$(function(){
    const menuHeight = $(".navbar").outerHeight(true);
    offset = ($(window).width() < 768) ? menuHeight + 150 : menuHeight;
	$('#navbarNavAltMarkup  a[href^="#"]').click(function(event) {
        event.preventDefault();
        $('#navbarNavAltMarkup a[href^="#"]').removeClass("active")
        $(this).addClass('active');
        var anchorId = $(this).attr('href');
        var target = $(anchorId).offset().top - offset;
        $('html, body').animate({
            scrollTop: target
        }, 500);
        CloseMenuOnMobile()
    });
    $('.navbar-brand').click(function(event) {
        event.preventDefault();
        var anchorId = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(anchorId).offset().top - offset
        }, 500);
        CloseMenuOnMobile()
    });
    function CloseMenuOnMobile()
    {
        if($(window).width() < 768)
        {
            $(".navbar-toggler").addClass("collapsed");
            $("#navbarNavAltMarkup").removeClass("show");
        }
    }
    $(window).scroll(function() {
        position = $(this).scrollTop();
        $('#navbarNavAltMarkup a[href^="#"]').each(function() {
            var anchorId = $(this).attr('href');
            var target = $(anchorId).offset().top - offset;
            if (position >= target-100) {
                $('#navbarNavAltMarkup a[href^="#"]').removeClass("active")
                $(this).addClass('active');
            }
        });
    });
    $(window).scroll();
})