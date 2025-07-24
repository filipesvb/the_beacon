let target = document.querySelector(".light-circle");
let content = document.getElementById("conteudo");
let scrollY = 0;
let growing = true;
let maxHeight = 900; // altura máxima da div

window.addEventListener(
  "wheel",
  (e) => {
    console.log(e.deltaY);
    if (growing) {
      e.preventDefault();

      scrollY += e.deltaY;

      let newHeight = Math.min(100 + scrollY * 0.3, maxHeight);
      console.log(target);
      target.style.width = newHeight + "px";
      target.style.height = newHeight + "px";

      if (newHeight >= maxHeight) {
        growing = false;
        document.body.style.overflow = "auto"; // libera scroll
        document.getElementById("scroll-container").style.height = "auto";
      }
    }
  },
  { passive: false }
);
