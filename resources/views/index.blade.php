<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>MFC</title>
</head>
<body>

 

    <nav class="navbar">
        <div class="container">
            <ul class="menu">
                <li><a href="#">EVENTS</a></li>
                <li><a href="rangkings.blade.php">RANKINGS</a></li>
                <li><a href="#">ATHLETES</a></li>
                <li><a href="#">NEWS</a></li>
                <li class="logo">
                   <h2>MFC</h2>
                </li>
                

                <li><a href="#">CONNECT</a></li>
                <li><a href="#">WATCH</a></li>
                <li><a href="#">SHOP</a></li>
                <li><a href="#">MFC</a></li>
                <li class="search-icon">
                    <a href="#">
                        <img src="{{ asset('images/search-icon.png') }}"alt="Search">
                    </a>
                </li>
            </ul>
        </div>
    </nav>







    
    <div class="image-container">
        <img class="image-home" src="{{ asset('images/natediaz.png') }}" alt="alex">
        <div class="ayammmsaa">
            <h1>MFC FIGHT NIGHT</h1>
            <h2>DARUL VS FATIR AZZUMAR</h2>
            <h3>Electrifying Welterweights Meet Inside The UFC APEX In Las Vegas</h3>
        </div>
    </div>



    <div class="event-content-fight">
        <img class="fighter-image" src="{{ asset('images/alexPereira.png') }}" alt="Fighter">
        <div class="event-title"> Rafif  </div>
        
        <img class="fighter-image" src="{{ asset('images/jiriufc.png') }}" alt="Fighter">
    </div>


    <!-- COUNTDOWN TIME -->
    <div class="countdown-clock__wrapper">
        <div class="countdown-clock__item">
            <span class="countdown-clock__value" id="days">00</span>
            <span class="countdown-clock__label">Days</span>
        </div>
        <div class="countdown-clock__item">
            <span class="countdown-clock__value" id="hours">00</span>
            <span class="countdown-clock__label">Hours</span>
        </div>
        <div class="countdown-clock__item">
            <span class="countdown-clock__value" id="minutes">00</span>
            <span class="countdown-clock__label">Minutes</span>
        </div>
        <div class="countdown-clock__item">
            <span class="countdown-clock__value" id="seconds">00</span>
            <span class="countdown-clock__label">Seconds</span>
        </div>
    </div>






    <script>

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", function() {
    if (window.scrollY > 0) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
});


function updateCountdown() {
  const eventDate = new Date("2023-08-27T00:00:00"); // Tanggal acara UFC (27 Juli 2023)
  const currentDate = new Date();

  if (eventDate <= currentDate) {
    document.getElementById("days").textContent = "00";
    document.getElementById("hours").textContent = "00";
    document.getElementById("minutes").textContent = "00";
    document.getElementById("seconds").textContent = "00";
    return;
  }

  const timeDifference = eventDate - currentDate;

  const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
  const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

  document.getElementById("days").textContent = days.toString().padStart(2, "0");
  document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
  document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
  document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
}

updateCountdown();
setInterval(updateCountdown, 1000);


    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hamburger = document.getElementById('hamburger');
            const menu = document.querySelector('.menu');

            hamburger.addEventListener('click', function () {
                menu.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
