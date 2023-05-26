const navbar = document.querySelector('.navbar');

navbar.addEventListener('mouseover', function() {
  navbar.classList.add('expanded');
});

navbar.addEventListener('mouseout', function() {
  navbar.classList.remove('expanded');
});
