const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar");
if (bar){
    bar.addEventListener("click",()=>{
        nav.classList.add("active");
    })
}
if (close){
    close.addEventListener("click",()=>{
        nav.classList.remove("active");
    })
}

//nutricao , responsavel por mudaro tamanho da
var li_elements = document.querySelectorAll(".wrapper_left ul li");
var item_elements = document.querySelectorAll(".item");
for (var i = 0; i < li_elements.length; i++) {
  li_elements[i].addEventListener("click", function() {
    li_elements.forEach(function(li) {
      li.classList.remove("active");
    });
    this.classList.add("active");
    var li_value = this.getAttribute("data-li");
    item_elements.forEach(function(item) {
      item.style.display = "none";
    });
    if (li_value == "angular") {
      document.querySelector("." + li_value).style.display = "block";
    } else if (li_value == "nodejs") {
      document.querySelector("." + li_value).style.display = "block";
    } else if (li_value == "reactjs") {
      document.querySelector("." + li_value).style.display = "block";
    } else if (li_value == "vuejs") {
      document.querySelector("." + li_value).style.display = "block";
    } else if (li_value == "calorias") {
        document.querySelector("." + li_value).style.display = "block";
    } else {
      console.log("");
    }
  });
}

var textOverImages = document.getElementsByClassName("onClickTextOverImage");
var previousTextOverImage;
for (var i = 0; i < textOverImages.length; i++) {
  textOverImages[i].onclick = function() {
    var classes = this.classList;
    if (classes.contains("show")) {
      classes.remove("show");
    } else {
      if (previousTextOverImage != null)
        previousTextOverImage.classList.remove("show");
      previousTextOverImage = this;
      classes.add("show");
    }
  }
}

function stopPropagation(event){
  event.stopPropagation();
}

// document.getElementsByClassName("onClickTextOverImage").addEventListener("click", () => {
//   document.getElementsByClassName("show").focus();
// });