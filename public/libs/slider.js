var currentslide = 0;
var slidestatus = 1;
var intervaltime = 7000;
var intervalId = null;
var slideArray = document.getElementById('slides').children;
var slidernavArray = document.getElementById('slidernavlinks').children;

if ( slidestatus == 1 ) {
  playslider();
}

function slideshow() {
  if ( slidestatus == 0 ) {
    playslider();
    slidestatus = 1;
  } else {
    stopslider();
    slidestatus = 0;
  }
}

function gotoslide(arg) {
  for ( x=0; x<=(slidernavArray.length-1); x++ ) {
    console.log(x);
    slideArray[x].className = "slide";
    slidernavArray[x].innerHTML = '□';
  }
  currentslide=(arg-1);
  slideArray[currentslide].className = "activeslide";
  slidernavArray[currentslide].innerHTML = '▣';
}
function playslider() {
  console.log( 'play' );
  document.getElementById( 'slidertoggle' ).innerHTML = '&#9632;';
  intervalId = setInterval( nextslide, intervaltime );
}
function stopslider() {
  console.log( 'stop' );
  document.getElementById( 'slidertoggle' ).innerHTML = '&#9654;';
  clearInterval( intervalId );
}
function nextslide() {
  console.log( 'next' );
  console.log( currentslide );
  if ( currentslide < (slideArray.length - 1) ) {
    currentslide++;
  }else{
    currentslide = 0;
  }
  for( x=0; x!=slideArray.length; x++ ){
    slideArray[x].className = "slide";
    slidernavArray[x].innerHTML = '□';
  }
  slideArray[currentslide].className = "activeslide";
  slidernavArray[currentslide].innerHTML = '▣';
}
function prevslide(){
  console.log('prev');
  console.log(currentslide);
  if (currentslide > 0) {
    currentslide--;
  }else{
    currentslide = (slideArray.length - 1);
  }
  for(x=0; x!=slideArray.length; x++){
    slideArray[x].className = "slide";
    slidernavArray[x].innerHTML = '□';
  }
  slideArray[currentslide].className = "activeslide";
  slidernavArray[currentslide].innerHTML = '▣';
}
console.log('slider loaded');
