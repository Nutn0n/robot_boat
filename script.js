var  setLocation = 0;
var w,a,s,d = 0;

sendLocation = function(){
  /* Function goes here */
  alert("user set location to "+setLocation);
  return(setLocation);
}

goLeft = function() {
  a = 1;
  /* or do something */
}

goRight = function () {
  d = 1;
    /* or do something */
}

goFoward = function() {
  w = 1;
    /* or do something */
}

goBackward = function () {
  s = 1;
    /* or do something */
}

resetVariable = function() {
  w = 0;
  a = 0;
  s = 0;
  d = 0;
}
