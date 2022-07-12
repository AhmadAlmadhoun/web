let  ourSkills = document.querySelector(".our-skills");
let  progressSpans = document.querySelectorAll(".the-progress span");


window.onscroll = function (){
  if (window.scrollY >= ourSkills.offsetTop - 200) {
    progressSpans.forEach((span) => {
      span.style.width = span.dataset.width;
    });
  }

  if (window.scrollY >= statsSection.offsetTop - 100) {
    if (!started) {
        nums.forEach((num) => startCount(num));
    }
    started = true;
  }
  if(window.scrollY >= 300){
    span.classList.add("show");
}else{
  span.classList.remove("show");
}

}

let nums = document.querySelectorAll(".stats .number");
let statsSection = document.querySelector(".stats");
let started = false; // Function Started ? No

function startCount(el) {
  let goal = el.dataset.goal;
  let count = setInterval(() => {
    el.textContent++;
    if (el.textContent == goal) {
      clearInterval(count);
    }
  }, 1000 / goal);
}
//startCount(document.querySelectorAll(".stats .number"));


function scrollUp(){
    let span = document.querySelector(".up");
    if(window.scrollY >= 350){
      span.classList.add('show');
    }else{
      span.classList.remove('show');
    }
  
  }
  
  window.addEventListener('scroll',scrollUp);
  