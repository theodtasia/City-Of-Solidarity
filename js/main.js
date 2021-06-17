let nCount = selector => {
  $(selector).each(function () {
    $(this)
      .animate({
        Counter: $(this).text()
      }, {
        // A string or number determining how long the animation will run.
        duration: 4000,
        // A string indicating which easing function to use for the transition.
        easing: "swing",
        /**
         * A function to be called for each animated property of each animated element. 
         * This function provides an opportunity to
         *  modify the Tween object to change the value of the property before it is set.
         */
        step: function (value) {
          $(this).text(Math.ceil(value));
        }
      });
  });
};

let a = 0;
$(window).scroll(function () {
  // The .offset() method allows us to retrieve the current position of an element  relative to the document
  let oTop = $(".numbers").offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() >= oTop) {
    a++;
    nCount(".rect > h1");
  }
});
function showMsg()
{
$("#alertMsg").fadeIn('slow', function () {
    $(this).delay(3000).fadeOut('slow');
  });
}



// ημερομηνια για αντιστροφη μετριση
var countDownDate = new Date("DEC 31, 2029 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // σημερινη ημερομηνια
  var now = new Date().getTime();

  // διαφορα της τωρινης ημερομηνιας με τo τελος των στοχων
  var distance = countDownDate - now;

  // υπολογισμοι
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // το αποτελεσμα με id=demo
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

 var textWrapper = document.querySelector('.move .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop:1})
  .add({
    targets: '.move .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration:  2500,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.move',
    opacity: 0,
    duration: infinity,
    delay: 1000
  });

	// Wrap every letter in a span
var textWrapper2 = document.querySelector('.move2 .letters');
textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
anime.timeline({loop: 1})
	.add({
    targets: '.move2 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeInOutExpo",
    duration: 900
  });
