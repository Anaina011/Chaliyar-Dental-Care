// Select all cards
const cards = document.querySelectorAll('.about_sec2_card');

// Function to toggle background color of cards
function toggleCardColor() {
    let index = 0;
    return setInterval(() => {
        // Remove background color from all cards and reset text color
        cards.forEach((card, i) => {
            card.style.backgroundColor = '';
            card.querySelector('h5').style.color = ''; // Reset text color
        });
        // Add background color to the current card and change text color to white
        cards[index].style.backgroundColor = '#2D2D2D';
        cards[index].querySelector('h5').style.color = 'white';
        // Increment index for the next card
        index = (index + 1) % cards.length;
    }, 2000); // Change color every 2 seconds
}

// Start the loop
toggleCardColor();
