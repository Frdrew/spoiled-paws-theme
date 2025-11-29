// Subtle tilt for product cards
document.addEventListener("mousemove", (e) => {
    const cards = document.querySelectorAll(".sp-card-tilt");
    cards.forEach(card => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;

        const rotateX = (y / rect.height) * -6;
        const rotateY = (x / rect.width) * 6;

        card.style.transform =
            `perspective(600px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });
});
