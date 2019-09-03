function toggleNav(){
    var body = document.getElementsByTagName('body')[0],
        open = body.getAttribute('nav');
    if(open == 1){
        body.setAttribute('nav', 0);
    } else {
        body.setAttribute('nav', 1);
    }
    
}


function myFunction() {
    document.getElementsByClassName(".item-child li").classList.toggle("none");
  }


  var dropdown = document.getElementsByClassName("item-father");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
    }
    });
  }