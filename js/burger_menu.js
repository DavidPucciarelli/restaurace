const menuBars = document.getElementById("menu-bars");
const overlay = document.getElementById("overlay");
const nav1 = document.getElementById("nav-1");
const nav2 = document.getElementById("nav-2");
const nav3 = document.getElementById("nav-3");
const nav4 = document.getElementById("nav-4");
const nav5 = document.getElementById("nav-5");
const nav6 = document.getElementById("nav-6");

function toggleNav() {
    // Opening and Closing menu bars
    menuBars.classList.toggle("change");
    // Activating menu
    overlay.classList.toggle("overlay-active");
    // overlay-active as boolean, does not exist, hence if condition is false at first
    if (overlay.classList.contains("overlay-active"))
    {
        overlay.classList.replace("overlay-slide-left", "overlay-slide-right");
        // nav items animate in
        nav1.classList.remove("slide-out-1");
        nav1.classList.add("slide-in-1");
        nav2.classList.remove("slide-out-2");
        nav2.classList.add("slide-in-2");
        nav3.classList.remove("slide-out-3");
        nav3.classList.add("slide-in-3");
        nav4.classList.remove("slide-out-4");
        nav4.classList.add("slide-in-4");
        nav5.classList.remove("slide-out-5");
        nav5.classList.add("slide-in-5");
        nav6.classList.remove("slide-out-6");
        nav6.classList.add("slide-in-6");
    }
    else {
        overlay.classList.replace("overlay-slide-right", "overlay-slide-left");
        // nav items animate out
        nav1.classList.remove("slide-in-1");
        nav1.classList.add("slide-out-1");
        nav2.classList.remove("slide-in-2");
        nav2.classList.add("slide-out-2");
        nav3.classList.remove("slide-in-3");
        nav3.classList.add("slide-out-3");
        nav4.classList.remove("slide-in-4");
        nav4.classList.add("slide-out-4");
        nav5.classList.remove("slide-in-5");
        nav5.classList.add("slide-out-5");
        nav6.classList.remove("slide-in-6");
        nav6.classList.add("slide-out-6");
    }
}

// Event Listeners
menuBars.addEventListener("click", toggleNav);
nav1.addEventListener("click", toggleNav);
nav2.addEventListener("click", toggleNav);
nav3.addEventListener("click", toggleNav);
nav4.addEventListener("click", toggleNav);
nav5.addEventListener("click", toggleNav);
nav6.addEventListener("click", toggleNav);
