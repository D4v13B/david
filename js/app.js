let togglebtn = document.getElementById('toggle-button'),
    nav = document.getElementById('nav-links');

togglebtn.addEventListener('click', function(){
  nav.classList.toggle('show');
})