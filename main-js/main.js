// var signin = document.querySelector("#signin");
// var register = document.querySelector("#register");
// setTimeout(function () {
//   register.checked = true;
// }, 1000);
// setTimeout(function () {
//   signin.checked = true;
// }, 2000);

document.getElementById("userpic-main").addEventListener("click", function () {
  var element, name, arr;
  element = document.getElementById("dropped-prof");
  var elco = element.classList.contains("hidden");
  if (elco) {
    element.classList.remove("hidden");
  } else {
    // alert("yoo");
    name = "hidden";
    arr = element.className.split(" ");
    if (arr.indexOf(name) == -1) {
      element.className += " " + name;
    }
  }
});
