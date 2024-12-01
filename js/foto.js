let left = document.querySelector(".triangle_left");
let right = document.querySelector(".triangle_right");
let sliderrWrapper = document.querySelector(".slider_wrapper");

left.addEventListener('click',function() {
    sliderrWrapper.scrollBy({
        left: 264,
        behavior: 'smooth'
      })
  });



  
  right.addEventListener('click',function() {
    sliderrWrapper.scrollBy({
        left: -264,
        behavior: 'smooth'
      })
  });




  const cardss = Array.from(document.querySelectorAll(".conteiner_img"));
const sliderr = document.querySelector(".slider__demo");
const sliderrContainerr = document.querySelector(".slider__container__demo");
const picturee = Array.from(document.querySelectorAll(".img_fit__pic__demo"));
const sliderrBtnLeftt = document.querySelector(".slider__btn_left__demo");
const sliderrBtnRightt = document.querySelector(".slider__btn_right__demo");
const sliderrClosee = document.querySelector(".slider__close__demo");



let cardIndexx = -1;
let pictureeFulll;

for (const cardd of cardss) {
  cardd.addEventListener("click", (event) => {
    event.preventDefault();
    cardIndexx = cardss.indexOf(cardd);
    pictureeFulll = picturee[cardIndexx].cloneNode();
    pictureeFulll.style.objectFit = "contain";
    sliderrContainerr.append(pictureeFulll);
    sliderr.classList.add("active__demo");
  });
}

sliderrBtnLeftt.addEventListener("click", (event) => {
  event.preventDefault();
  changePictureee("left");
});

sliderrBtnRightt.addEventListener("click", (event) => {
  event.preventDefault();
  changePictureee("right");
});

function changePictureee(dir) {
  if (dir === "left") {
    if (cardIndexx > 0) {
      cardIndexx--;
    } else {
      cardIndexx = cardss.length - 1;
    }
  } else if (dir === "right") {
    if (cardIndexx < cardss.length - 1) {
      cardIndexx++;
    } else {
      cardIndexx = 0;
    }
  }
  let newPictureeFulll = picturee[cardIndexx].cloneNode();
  newPictureeFulll.style.objectFit = "contain";
  pictureeFulll.replaceWith(newPictureeFulll);
  pictureeFulll = newPictureeFulll;
}

sliderrClosee.addEventListener("click", (event) => {
  event.preventDefault();
  sliderr.classList.remove("active__demo");
  pictureeFulll.remove();
  newPictureeFulll.remove();
});





  