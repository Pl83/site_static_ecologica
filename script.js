let burger = document.querySelector(".burger");
let ecologicamenu = document.querySelector(".ecologica-menu");
let ulnav = document.querySelector(".ulnav");
let candidater = document.querySelector(".candidater");
let D1 = document.querySelector(".D1");
let D2 = document.querySelector(".D2");
let D3 = document.querySelector(".D3");
var openingnav = document.querySelector(".ecologica-menu").clientHeight;

const sleep = (time) => {
  return new Promise((resolve) => setTimeout(resolve, time))
}

burger.addEventListener("click", function() {
  if (ecologicamenu.style.height == "340px") {

    ulnav.style.display = "none";
    candidater.style.display = "none";

    D1.style.display = "block";
    D2.classList.remove("D2CC");

    const BobUnDoSomething = async () => {
      for (let i = 340; i >= 70; i = i - 30) {
        await sleep(8)
        ecologicamenu.style.height = i + "px";
      }
    }
    BobUnDoSomething()

    const BobUnRotateSomething = async () => {
      for (let i = 45; i >= 0; i = i - 5) {
        await sleep(10)
        D2.style.rotate = -i + "deg";
        D3.style.rotate = i + "deg";
      }
    }
    BobUnRotateSomething()

  } else {  //eeeeeeeeeeeellllllllllllllllllllllssssssssssssseeeeeeeeeeee

    ulnav.style.display = "flex";
    candidater.style.display = "flex";

    D1.style.display = "none";
    D2.classList.add("D2CC");

    const BobDoSomething = async () => {
      for (let i = 70; i <= 340; i = i + 30) {
        await sleep(8)
        ecologicamenu.style.height = i + "px";
      }
    }
    BobDoSomething()

    const BobRotateSomething = async () => {
      for (let i = 0; i <= 45; i = i + 5) {
        await sleep(10)
        D2.style.rotate = i + "deg";
        D3.style.rotate = -i + "deg";
      }
    }
    BobRotateSomething()


  }

});







