// Mit der Option threshold wird festgelegt, zu wie viel
// Prozent das Element sichtbar sein soll, bevor die Animation gestartet wird.

// Der default Wert threshold: 0 startet die Animation, sobald das Element im Viewport sichtbar ist.
// Der Wert threshold: 0.5 startet die Animation, sobald das Element mit 50% im Viewport sichtbar ist.
// Der Wert threshold: 1 startet die Animation, sobald das Element mit 100% im Viewport sichtbar ist.

const cards = document.querySelectorAll('.card');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        entry.target.classList.toggle('show', entry.isIntersecting);
    })
    console.log(entries);
}, {
    threshold: 1
});

const lastCardObserver = new IntersectionObserver(entries => {
    const lastCard = entries[0]
    if (!lastCard.isIntersecting) return
    loadNewCards()
    lastCardObserver.unobserve(lastCard.target)
    lastCardObserver.observe(document.querySelector('.card:last-child'))
}, {})

lastCardObserver.observe(document.querySelector('.card:last-child'))
cards.forEach(card => {
    observer.observe(card);
})

const cardContainer = document.querySelector('.card-container')

function loadNewCards() {
    for (let i = 0; i < 10; i++) {
        const card = document.createElement('div')
        card.textContent = 'New Card'
        card.classList.add('card')
        observer.observe(card)
        cardContainer.append(card)
    }

}

