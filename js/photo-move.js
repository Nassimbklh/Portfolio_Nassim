let rotateX = 0;
let rotateY = 0;
let card_container = document.querySelector("#card-container");
let card = card_container.querySelector("#card");

function setRotate(x, y) {
  rotateX = x;
  rotateY = y;
  card.style.transform =
    "rotateX(" +
    Math.round(rotateY, 2) +
    "deg) rotateY(" +
    Math.round(rotateX, 2) +
    "deg)";
}

card_container.addEventListener("mousemove", function (event) {
  const w = this.clientWidth;
  const h = this.clientHeight;
  const x = (event.layerX / w - 0.5) * 21;
  const y = -(event.layerY / h - 0.5) * 21;
  setRotate(x, y);
});

card_container.addEventListener("mouseleave", function (event) {
  setRotate(0, 0);
});
