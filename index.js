

const circles=document.querySelectorAll(".circle")

circles.forEach(element => {
 
   if(element.dataset.Status=="Confirmed"){
    element.style.background="red"
  

   }else if(element.dataset.Status=="Available"){
    element.style.background="green"

   }else if(element.dataset.Status=="hold")
   element.style.background="orange"
  
});

console.log(window.innerWidth)