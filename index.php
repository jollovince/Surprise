<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Love Surprise ❤️</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #ff9a9e, #fad0c4);
      font-family: Arial, sans-serif;
      overflow: hidden;
    }
    #heart {
      font-size: 50px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }
    #message {
      display: none;
      font-size: 2rem;
      font-weight: bold;
      color: white;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
      animation: fadeIn 1s forwards;
    }
    @keyframes explode {
      to {
        transform: scale(5);
        opacity: 0;
      }
    }
    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity: 1;}
    }
  </style>
</head>
<body>
  <div id="heart">❤️</div>
  <div id="message">Hi Althea laban lang wag ka sumuko nandito lang ako kapag may problema ka handa ako makinig ang magbigay ng payo yun lang keep fighting!! fight! fight!. 💖</div>

  <script>
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
  </script>
</body>
</html>
