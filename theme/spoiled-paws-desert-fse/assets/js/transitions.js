// Reveals elements with .sp-fade-in
document.addEventListener("DOMContentLoaded", () => {
    const els = document.querySelectorAll(".sp-fade-in");
    els.forEach((el) => {
        setTimeout(() => {
            el.classList.add("sp-visible");
        }, 200);
    });
});
