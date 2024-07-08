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


// var compare = document.querySelectorAll('#compareCards .compare_eq');
// var maxHeight = 0;
// function sameheight() {
//     document.querySelectorAll('#compareCards .compare_eq').forEach(function (element) {
//         element.style.height = '';
//     });
//     // Loop through the elements to find the maximum height
//     for (var i = 0; i < compare.length; i++) {
//         var elementHeight = compare[i].offsetHeight;
//         //  console.log(elementHeight);
//         // // Update the maxHeight if the current element is taller
//         if (elementHeight > maxHeight) {
//             maxHeight = elementHeight;
//         }
//     }

//     // Set the same height for all elements with the class
//     for (var i = 0; i < compare.length; i++) {
//         compare[i].style.height = maxHeight + 'px';
//     }
// }
// var comparepop = document.querySelectorAll('.popup .compare_eq');
// var maxHeightpop = 0;
// function sameheightpop() {
//     document.querySelectorAll('.popup .compare_eq').forEach(function (element) {
//         element.style.height = '';
//     });
//     // Loop through the elements to find the maximum height
//     for (var i = 0; i < comparepop.length; i++) {
//         var elementHeightpop = comparepop[i].offsetHeight;
//         //  console.log(elementHeight);
//         // // Update the maxHeight if the current element is taller
//         if (elementHeightpop > maxHeightpop) {
//             maxHeightpop = elementHeightpop;
//         }
//     }

//     // Set the same height for all elements with the class
//     for (var i = 0; i < comparepop.length; i++) {
//         comparepop[i].style.height = maxHeightpop + 'px';
//     }
// }


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



function handleResize() {
    // Check the window width and perform actions based on the width
    var windowWidth = window.innerWidth;

    if (windowWidth <= 769) {
        // let slideIndex = 1;
        // showSlides(slideIndex);

        // // function plusSlides(n) {
        // //     showSlides(slideIndex += n);
        // // }
        // document.querySelector(".prev").addEventListener("click", function () {
        //     showSlides(slideIndex += -1);
        // });
        // document.querySelector(".next").addEventListener("click", function () {
        //     showSlides(slideIndex += 1);
        // });
        // // function currentSlide(n) {
        // //     showSlides(slideIndex = n);
        // // }
        // document.querySelectorAll(".dot").forEach(function (element) {
        //     element.addEventListener('click', function (e) {
        //         showSlides(slideIndex = e.target.getAttribute('data-slide'));
        //     })
        // })

        // function showSlides(n) {

        //     document.querySelectorAll(".ApplyCardWrap").forEach(function (element) { element.classList.remove("banner_active"); });
        //     // var dataval = this.getAttribute('data-slide');


        //     let i;
        //     let slides = document.getElementsByClassName("mySlides");
        //     let dots = document.getElementsByClassName("dot");
        //     if (n > slides.length) { slideIndex = 1 }
        //     if (n < 1) { slideIndex = slides.length }
        //     for (i = 0; i < slides.length; i++) {
        //         slides[i].style.display = "none";
        //     }
        //     for (i = 0; i < dots.length; i++) {
        //         dots[i].className = dots[i].className.replace(" active", "");
        //     }
        //    // document.querySelector(".wrap_" + slideIndex).classList.add("banner_active");

        //     var wrapClass = document.querySelector(".wrap_" + slideIndex);

        //         if (wrapClass) {
        //         // The element with the specified class was found
        //         wrapClass.classList.add("banner_active");  // Example: Adding a new class
        //         } else {
        //         // The element with the specified class was not found
        //         console.log("Element with class 'class' not found.");
        //         }

        //     slides[slideIndex - 1].style.display = "block";
        //     dots[slideIndex - 1].className += " active";

        // }
        document.querySelectorAll(".compare_eq").forEach(function (element) {
            element.style.height = 'auto';
        })
        document.querySelectorAll(".addMobcontainer").forEach(function (element) {
            element.classList.add("container")
        })
        document.querySelectorAll(".removeMobcontainer").forEach(function (element) {
            element.classList.remove("container")
        })
    } else {
        // Code to execute for larger screens
        //height
        document.querySelectorAll(".addMobcontainer").forEach(function (element) {
            element.classList.remove("container")
        })
 document.querySelectorAll(".removeMobcontainer").forEach(function (element) {
            element.classList.add("container")
        })
       // setTimeout(sameheight, 1000);

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