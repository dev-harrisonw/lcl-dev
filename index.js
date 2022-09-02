

const circles=document.querySelectorAll(".circle")

circles.forEach(element => {
 
   if(element.dataset.status=="Confirmed"){
    element.style.background="red"
  

   }else if(element.dataset.status=="Available"){
    element.style.background="green"

   }else if(element.dataset.status=="hold")
   element.style.background="orange"
  
});

console.log(window.innerWidth)