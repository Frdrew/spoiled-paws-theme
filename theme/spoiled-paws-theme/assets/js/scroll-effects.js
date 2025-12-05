// Intersection-based fade animations
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("sp-visible");
    }
  });
});

// Auto-apply to any fade element
document.querySelectorAll(".sp-fade-in").forEach((el) => {
  observer.observe(el);
});
