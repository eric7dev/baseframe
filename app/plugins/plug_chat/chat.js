document.getElementById("message").focus();
var output = document.getElementById("chatlog");

function speak(){
  var inputlog = document.getElementById("message").value;
  var currentTime = new Date();
  var h = currentTime.getHours();
  var m = currentTime.getMinutes();
  var s = currentTime.getSeconds();

  if ( h.toString().length == 1) {
    var h = '0' + h;
  }
  if ( m.toString().length == 1) {
    var m = '0' + m;
  }
  if ( s.toString().length == 1) {
    var s = '0' + s;
  }
  
  if ( inputlog != '') {
    document.getElementById("message").value = "";
    document.getElementById("message").focus();
    output.insertAdjacentHTML('beforeend', '<li>[' + h + ':' + m + ':' + s + '] anonymous: ' + inputlog + '</li>');
    output.scrollTop = output.scrollHeight;
    
    if(inputlog == 'clear'){
      output.innerHTML = '';
    }
  }
}
function honk(e){
  if (e.which == 13 || e.keyCode == 13) {
    speak();
  }
}
