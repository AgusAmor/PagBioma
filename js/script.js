var btn_bolson = document.getElementById('btn_bolson');
var btn_login = document.getElementById('btn_login');
var btn_signup = document.getElementById('btn_signup');
var btn_catalogo = document.getElementById('btn_catalogo');

btn_bolson.onclick = function() {
    window.location.href = "../bolson.php";
}

btn_login.onclick = function() {
    window.location.href = '../login.php';
}

btn_signup.onclick = function() {
    window.location.href = '../signup.php';
}

btn_catalogo.onclick = function() {
    window.location.href = '../catalogo.php';
}