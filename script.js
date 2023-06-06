// Alle Elemente mit der Klasse counter auswählen.
const counters = document.querySelectorAll('.counter');

// Durch alle Elemente mit der Klasse counter iterieren
counters.forEach(counter => {
    // Funktion zum Erhöhen des Zählers
    function updateCount() {
        const target = +counter.getAttribute('data-count');
        const count = +counter.innerHTML;

        const inc = Math.floor((target - count) / 100);

        if (count < target && inc > 0) {
            counter.innerHTML = (count + inc);
            // Wiederholung der Funktion nach festgelegter Zeit
            setTimeout(updateCount, 1);
        }
        // Wenn die Konstante count nicht gleich der Konstante target ist,
        // dann die verbleibende Anzahl hinzufügen.
        else {
            counter.innerHTML = target;
        }
    }

    updateCount();
});