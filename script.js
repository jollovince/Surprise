const heart = document.getElementById("heart");
const message = document.getElementById("message");

let size = 50; // starting size
heart.addEventListener("click", () => {
  size += 30;
  heart.style.fontSize = size + "px";

  if (size >= 200) { 
    heart.style.animation = "explode 0.8s forwards";
    setTimeout(() => {
      heart.style.display = "none";
      message.style.display = "block";
    }, 800);
  }
});
