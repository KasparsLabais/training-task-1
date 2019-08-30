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
