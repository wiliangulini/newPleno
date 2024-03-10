
//animaÃ§ao filter ao clicar

let arrowTema = document.getElementById("arrowTema");
let down = document.querySelector(".down");
let arrowTema1 = document.getElementById("arrowTema1");
let down1 = document.querySelector("#escolher-abordagem .down");
let arrowTema2 = document.getElementById("arrowTema2");
let down2 = document.querySelector("#escolher-genero .down");
let arrowTema3 = document.getElementById("arrowTema3");
let down3 = document.querySelector("#escolher-valor .down");

let downTems = () => {
  
  if(down.style.display == "none") {
    
    down.style.opacity = 0;
    down.style.display = "block";
    setTimeout(() =>{
      down.style.opacity = 0.25;
      arrowTema.style.transform = "rotate(45deg)";
    }, 100);
    setTimeout(() =>{
      down.style.opacity = 0.5;
      arrowTema.style.transform = "rotate(90deg)";
    }, 150);
    setTimeout(() =>{
      down.style.opacity = 0.75;
      arrowTema.style.transform = "rotate(135deg)";
    }, 200);
    setTimeout(() => {
      down.style.opacity = 1;
      arrowTema.style.transform = "rotate(180deg)";
    }, 250); 

  } else if(down.style.display == "block") {

    down.style.opacity = 1;
    setTimeout(() =>{
      down.style.opacity = 0.75;
      arrowTema.style.transform = "rotate(135deg)";
    }, 100);
    setTimeout(() =>{
      down.style.opacity = 0.5;
      arrowTema.style.transform = "rotate(90deg)";
    }, 150);
    setTimeout(() =>{
      down.style.opacity = 0.25;
      arrowTema.style.transform = "rotate(45deg)";
    }, 200);
    setTimeout(() => {
      down.style.opacity = 0;
      arrowTema.style.transform = "rotate(0deg)";
      down.style.display = "none";
    }, 250);  

  }
}

let downAbord = () => {
  
  if(down1.style.display == "none") {
    
    down1.style.opacity = 0;
    down1.style.display = "block";
    setTimeout(() =>{
      down1.style.opacity = 0.25;
      arrowTema1.style.transform = "rotate(45deg)";
    }, 100);
    setTimeout(() =>{
      down1.style.opacity = 0.5;
      arrowTema1.style.transform = "rotate(90deg)";
    }, 150);
    setTimeout(() =>{
      down1.style.opacity = 0.75;
      arrowTema1.style.transform = "rotate(135deg)";
    }, 200);
    setTimeout(() => {
      down1.style.opacity = 1;
      arrowTema1.style.transform = "rotate(180deg)";
    }, 250); 

  } else if(down1.style.display == "block") {

    down1.style.opacity = 1;
    setTimeout(() =>{
      down1.style.opacity = 0.75;
      arrowTema1.style.transform = "rotate(135deg)";
    }, 100);
    setTimeout(() =>{
      down1.style.opacity = 0.5;
      arrowTema1.style.transform = "rotate(90deg)";
    }, 150);
    setTimeout(() =>{
      down1.style.opacity = 0.25;
      arrowTema1.style.transform = "rotate(45deg)";
    }, 200);
    setTimeout(() => {
      down1.style.opacity = 0;
      arrowTema1.style.transform = "rotate(0deg)";
      down1.style.display = "none";
    }, 250);  

  }
}

let downGen = () => {
  
  if(down2.style.display == "none") {
    
    down2.style.opacity = 0;
    down2.style.display = "block";
    setTimeout(() =>{
      down2.style.opacity = 0.25;
      arrowTema2.style.transform = "rotate(45deg)";
    }, 100);
    setTimeout(() =>{
      down2.style.opacity = 0.5;
      arrowTema2.style.transform = "rotate(90deg)";
    }, 150);
    setTimeout(() =>{
      down2.style.opacity = 0.75;
      arrowTema2.style.transform = "rotate(135deg)";
    }, 200);
    setTimeout(() => {
      down2.style.opacity = 1;
      arrowTema2.style.transform = "rotate(180deg)";
    }, 250); 

  } else if(down2.style.display == "block") {

    down2.style.opacity = 1;
    setTimeout(() =>{
      down2.style.opacity = 0.75;
      arrowTema2.style.transform = "rotate(135deg)";
    }, 100);
    setTimeout(() =>{
      down2.style.opacity = 0.5;
      arrowTema2.style.transform = "rotate(90deg)";
    }, 150);
    setTimeout(() =>{
      down2.style.opacity = 0.25;
      arrowTema2.style.transform = "rotate(45deg)";
    }, 200);
    setTimeout(() => {
      down2.style.opacity = 0;
      arrowTema2.style.transform = "rotate(0deg)";
      down2.style.display = "none";
    }, 250);  

  }
}

let downVal = () => {
  
  if(down3.style.display == "none") {
    
    down3.style.opacity = 0;
    down3.style.display = "block";
    setTimeout(() =>{
      down3.style.opacity = 0.25;
      arrowTema3.style.transform = "rotate(45deg)";
    }, 100);
    setTimeout(() =>{
      down3.style.opacity = 0.5;
      arrowTema3.style.transform = "rotate(90deg)";
    }, 150);
    setTimeout(() =>{
      down3.style.opacity = 0.75;
      arrowTema3.style.transform = "rotate(135deg)";
    }, 200);
    setTimeout(() => {
      down3.style.opacity = 1;
      arrowTema3.style.transform = "rotate(180deg)";
    }, 250); 

  } else if(down3.style.display == "block") {

    down3.style.opacity = 1;
    setTimeout(() =>{
      down3.style.opacity = 0.75;
      arrowTema3.style.transform = "rotate(135deg)";
    }, 100);
    setTimeout(() =>{
      down3.style.opacity = 0.5;
      arrowTema3.style.transform = "rotate(90deg)";
    }, 150);
    setTimeout(() =>{
      down3.style.opacity = 0.25;
      arrowTema3.style.transform = "rotate(45deg)";
    }, 200);
    setTimeout(() => {
      down3.style.opacity = 0;
      arrowTema3.style.transform = "rotate(0deg)";
      down3.style.display = "none";
    }, 250);  

  }
}



   //abrir fechar filtros 
document.querySelector("#escolher-categoria p.txt").addEventListener("click", () => {
  downTems();
});
document.querySelector("#escolher-categoria #arrowTema").addEventListener("click", () => {
  downTems();
});

document.querySelector("#escolher-abordagem p.txt").addEventListener("click", () => {
  downAbord();
});
document.querySelector("#escolher-abordagem #arrowTema1").addEventListener("click", () => {
  downAbord();
});

document.querySelector("#escolher-genero p.txt").addEventListener("click", () => {
  downGen();
});
document.querySelector("#escolher-genero #arrowTema2").addEventListener("click", () => {
  downGen();
});

document.querySelector("#escolher-valor p.txt").addEventListener("click", () => {
  downVal();
});
document.querySelector("#escolher-valor #arrowTema3").addEventListener("click", () => {
  downVal();
});

// funçoes click;
  //temas
let radiocontainer = (elmnt) => {
  let n = elmnt.id;
  let txt = document.getElementById(n).innerText;
  document.getElementById("temas").innerHTML = txt;
  downTems();
}