const body = document.querySelector('body');
const footer = document.querySelector('footer');

if (body.offsetHeight < window.innerHeight) {
  footer.style.position = 'absolute';
  footer.style.bottom = '0';
}