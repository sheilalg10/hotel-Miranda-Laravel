export default function facilities() {
  const slider = document.getElementsByClassName("facilities__div")[0];
  const slides = slider.children;
  const dots = document.querySelectorAll("facilities__indicators__item");

  let startX = 0;
  let currentX = 0;
  let isMoving = false;

  const getSliderTotalWidth = () => {
    let width = 0;
    Array.from(slides).forEach((slide) => {
      width += slide.offsetWidth;
    });
    return width;
  };

  const sliderWidth = slider.offsetWidth;
  const slideWidth = slides[0].offsetWidth;
  const totalWidth = getSliderTotalWidth();

  const maxMove = -(totalWidth - sliderWidth);
  const minMove = 0;

  const clampMove = (val) => {
    return Math.max(Math.min(val, minMove), maxMove);
  };

  const setActiveDot = () => {
    const activeIndex = Math.floor(Math.abs(currentX) / slideWidth);
    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === activeIndex);
    });
  };

  const startSwipe = (x) => {
    startX = x;
    isMoving = true;
    slider.style.transition = "none";
  };

  const moveSwipe = (x) => {
    if (!isMoving) return;

    const distance = x - startX;
    currentX += distance;
    currentX = clampMove(currentX);

    slider.style.transform = `translateX(${currentX}px)`;
    startX = x;
    setActiveDot();
  };

  const endSwipe = () => {
    isMoving = false;
    slider.style.transition = "transform 0.3s ease";

    const closestIndex = Math.round(Math.abs(currentX) / slideWidth);
    currentX = -closestIndex * slideWidth;
    currentX = clampMove(currentX);
    slider.style.transform = `translateX(${currentX}px)`;

    setActiveDot();
  };

  // Touch
  slider.addEventListener("touchstart", (e) =>
    startSwipe(e.touches[0].clientX)
  );
  slider.addEventListener("touchmove", (e) => moveSwipe(e.touches[0].clientX));
  slider.addEventListener("touchend", () => endSwipe());

  // Mouse
  slider.addEventListener("mousedown", (e) => startSwipe(e.clientX));
  window.addEventListener("mousemove", (e) => {
    if (isMoving) moveSwipe(e.clientX);
  });
  window.addEventListener("mouseup", () => {
    if (isMoving) endSwipe();
  });
}
