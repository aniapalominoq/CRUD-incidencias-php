  let navigation=document.querySelector('.inicio__navegation');
    let toggles=document.querySelector('.inicio__navegation-toggle');
    toggles.onclick=function(){
        navigation.classList.toggle('active');
}
/* leemos los elementos  */
const slidePage = document.querySelector(".slidepage");
const nextBtn1 = document.querySelector(".nextBtn");

const prevBtn2 = document.querySelector(".prev-1");
const nextBtn2 = document.querySelector(".next-1");

const prevBtn3 = document.querySelector(".prev-2");
const nextBtn3= document.querySelector(".next-2");

const prevBtn4 = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");

const progressText = document.querySelectorAll(".addIncidents__progress-title")
const progressCheck = document.querySelectorAll(".addIncidents__progress-check")
 const bullet = document.querySelectorAll(".addIncidents__progress-bullet")

let max = 4;
let current=1

nextBtn1.addEventListener("click", function () {
  
    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add('spot-light');
    progressCheck[current - 1].classList.add('spot-light');
    current=current + 1;

})

nextBtn2.addEventListener("click", function () {
       
    slidePage.style.marginLeft = "-50%";
})

nextBtn3.addEventListener("click", function () {
      
    slidePage.style.marginLeft = "-75%";
})
/* ------------------------------------------- */
prevBtn2.addEventListener("click", function () {
      
    slidePage.style.marginLeft = "0%";
})

prevBtn3.addEventListener("click", function () {
    
    slidePage.style.marginLeft = "-25%";
})
prevBtn4.addEventListener("click", function () {
    slidePage.style.marginLeft = "-50%";
})


