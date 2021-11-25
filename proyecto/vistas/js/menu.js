$( document ).ready(function() {
    let element_h1 = document.getElementsByTagName("h1");
    let element_li = document.getElementsByTagName("li");

    for (let i = 0; i < element_li.length; i++) {
        console.log(element_li[0].childNodes)
        if(element_li[i].id.slice(5) == element_h1[0].innerText.toLowerCase()){
            element_li[i].childNodes[1].setAttribute("class", "nav-link active");
        }
    }
});