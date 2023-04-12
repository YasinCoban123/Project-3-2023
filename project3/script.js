
function filterobjects(c){
  var x, i;
  x = document.getElementsByClassName("box");
  if (c === "all") { // Fixed comparison operator from assignment operator
    c = "";
  }
  for (i = 0; i < x.length; i++) {
    removeClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) {
      addClass(x[i], "show");
    }
  }
}

function addClass(element, name){
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) === -1) { // Fixed comparison operator from assignment operator
      element.className += " " + arr2[i];
    }
  }
}

function removeClass(element, name){
  var i, arr1, arr2; // Fixed variable name from arrl to arr1
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) { // Fixed variable name from arrı to arr1
      arr1.splice(arr1.indexOf(arr2[i]), 1); // Fixed variable name from arrı to arr1
    }
  }
  element.className = arr1.join(" ");
}
