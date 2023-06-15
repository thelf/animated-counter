// Mit der Option threshold wird festgelegt, zu wie viel
// Prozent das Element sichtbar sein soll, bevor die Animation gestartet wird.

// Der default Wert threshold: 0 startet die Animation, sobald die Animation im Viewport sichtbar ist.
// Der Wert threshold: 0.5 startet die Animation, sobald die Animation mit 50% im Viewport sichtbar ist.
// Der Wert threshold: 1 startet die Animation, sobald die Animation mit 100% im Viewport sichtbar ist.

const cards = document.querySelectorAll('.card');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        entry.target.classList.toggle('show', entry.isIntersecting);
    })
    console.log(entries);
}, {
    threshold: 1
});

cards.forEach(card => {
    observer.observe(card);
})

