// Select the container for the h3 and h6 tags
const container = document.querySelector('.about_advantages_display_holder');

// Function to toggle content of h3 and h6 tags
function toggleContent() {
    let index = 0;
    const contents = [
        {
            h3: "Professional dentists",
            h6: "We have gathered only qualified specialists with extensive experience in the dental field. We will help you with any problem. We advise you for free!"
        },
        {
            h3: "Effective anesthesia",
            h6: "We use only effective solutions for anesthesia, having previously checked your allergenicity to them. Feel free to contact us. We advise you for free!"
        },
        {
            h3: "Large network of clinics",
            h6: "We have a large network of clinics throughout all clinics employ highly qualified specialists and use professional equipment."
        },
        {
            h3: "Durable materials",
            h6: "We use only high-quality materials for dental fillings, dentures, crowns, implants and veneers. You can be sure of the result! We advise you for free!."
        },
        {
            h3: "High-quality tools",
            h6: "Our dentists use professional tools and equipment in their arsenal to work as efficiently and accurately as possible. Feel free to contact us!"
        }
    ];

    return setInterval(() => {
        // Get the content for the current index
        const content = contents[index];
        // Update the h3 and h6 tags with the current content
        const h3 = container.querySelector('h3');
        const h6 = container.querySelector('h6');
        h3.textContent = content.h3;
        h6.textContent = content.h6;

        // Increment index for the next content
        index = (index + 1) % contents.length;
    }, 2000); // Change content every 2 seconds
}

// Start the loop
toggleContent();
