export default function hamburguerMenu() {
  const hamburguer = document.getElementById('hamburguerMenu');
  const navMenu = document.querySelector('.header__div__nav');
  const navLinks = document.querySelectorAll('.header__div__nav__list__link');

  hamburguer.addEventListener('click', () => {
    hamburguer.classList.toggle('active');
    navMenu.classList.toggle('active');
  });

  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      hamburguer.classList.remove('active');
      navMenu.classList.remove('active');
    });
  });
}
