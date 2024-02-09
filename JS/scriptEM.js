const flyingPlane = document.querySelector('img');

flyingPlane.addEventListener('mouseover', () => {
  flyingPlane.pause();
});

flyingPlane.addEventListener('mouseout', () => {
  flyingPlane.play();
});
