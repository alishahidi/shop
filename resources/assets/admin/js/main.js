const changeCss = () => {
  var bodyHeader = document.getElementById("body-header");
  this.scrollY > 50
    ? (bodyHeader.className = "body-header body-header-fix-bg")
    : (bodyHeader.className = "body-header");
};

window.addEventListener("scroll", changeCss, false);

function getOffset(el) {
  const rect = el.getBoundingClientRect();
  return {
    left: rect.left + window.scrollX,
    top: rect.top + window.scrollY,
  };
}

const gradiant = (event) => {
  var w = event.offsetWidth;
  var pct = (100 * +window.event.clientX) / w;
  var bg =
    "linear-gradient(" +
    pct +
    "deg,rgba(34, 38, 41, 0.19),rgba(234, 231, 220, 0.74))";
  event.style.backgroundImage = bg;
};

const removeGradiant = (event) => {
  event.style.backgroundImage = "none";
};
