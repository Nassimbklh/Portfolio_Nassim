const htmlP = document.getElementById("hello");
const txt = htmlP.dataset.label;
let i = 0;
function showLetters() {
  let timeOut;
  if (i < txt.length) {
    htmlP.innerHTML += `<span>${txt[i]}</span>`;
    timeOut = setTimeout(showLetters, 200);
    i++;
  } else {
    clearTimeout(timeOut);
    console.log("end");
  }
}
showLetters();
