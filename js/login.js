


// quitting the login when clicking outside of the login form
let login = document.getElementById("loginbtn");

window.onclick = function(event)
{
    if (event.target == login)
    {
        login.style.display = "none";
    }
}
