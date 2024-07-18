const navbar = document.getElementById('navbar');
const toggleNavbar = document.getElementById('toggle-navbar');
const content = document.querySelector('.content');


toggleNavbar.addEventListener('click', function() {
    navbar.classList.toggle('hide');
    if (navbar.classList.contains('hide')) {
        content.style.marginLeft = '0';
    } else {
        content.style.marginLeft = '250px';
    }
});

function showLogoutPopup() {
    const confirmation = confirm("Apakah Anda yakin ingin log out?");
    if (confirmation) {
        alert("Anda telah log out.");
    }
}