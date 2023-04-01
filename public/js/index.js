
let element = document.getElementById("element");
let Title = "رفود برنامج احترافي مصمم خصيصا لمحلات النظارات يُسهل عليك إدارة نشاطك بكل سهولة وإصدار فواتيرك للعملاء";

function login(){
    window.open("https://pos.rofood.co/login","_self");
}

function signup(){
    window.open("https://pos.rofood.co/enter/credentials","_self");

}

function price(){
    window.open("./packages","_self");
}

let Landing =document.querySelector(".Landing");
window.addEventListener("load",function(){
    Landing.style.opacity ="1";
let i=0;
    let typing = setInterval(function(){
        element.textContent += Title[i] ;
        i++;
        if(i>Title.length-1)
        {
            clearInterval(typing);
        }
    },100)


})




let features = document.querySelector(".features");
let t1 = document.querySelector(".t1");
let t2 = document.querySelector(".t2");


window.addEventListener("scroll",function(){
    if(window.scrollY >= features.offsetTop-350)
    {
        features.style = " opacity: 1;"
    }




})

window.addEventListener("load",function(){
    t1.style = " opacity: 1;transform: translateX(0px);";

})

window.addEventListener("scroll",function(){
    if(window.scrollY >= t2.offsetTop-350)
    {
        t2.style = " opacity: 1;";
    }})


    //social

    function facebook(){
window.open("https://www.facebook.com/RofoodSA/","_self");
    }
function openadmin(){
    window.open("./login.html","_self");
}
    function insta(){
        window.open("https://www.instagram.com/RofoodSa/","_self");

    }

    function twetter(){
        window.open("https://twitter.com/RofoodSa","_self");

    }

    function linkedin(){
        window.open("https://linkedin.com/RofoodSa","_self");

    }

    let mobilenav =document.querySelector(".mobile-nav");

    function mobileNav(){
        mobilenav.style = "    transform: translateY(0px); ";


    }

    function closemobileNav(){
        mobilenav.style = "    transform: translateY(-1000px); ";

    }

    function whats(){
        window.open("https://wa.me/966538027198","_self");

    }
