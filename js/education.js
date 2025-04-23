document.addEventListener('DOMContentLoaded', () => {
    const educationButtons = document.querySelectorAll('#education .skill-btn');
    const educationCategories = document.querySelectorAll('#education .skills-category');

    educationButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            // Remove active class from all categories and buttons
            educationCategories.forEach(categoryDiv => categoryDiv.classList.add('hidden'));
            educationButtons.forEach(btn => btn.classList.remove('bg-blue-500', 'text-white'));

            // Add active class to the selected category and button
            const activeCategory = document.getElementById(category);
            if (activeCategory) {
                activeCategory.classList.remove('hidden');
            }
            button.classList.add('bg-blue-500', 'text-white');
        });
    });

    // Set default active state for Education section
    const defaultEducationCategory = document.getElementById('mca');
    const defaultEducationButton = document.querySelector('#education .skill-btn[data-category="mca"]');
    if (defaultEducationCategory && defaultEducationButton) {
        defaultEducationCategory.classList.remove('hidden');
        defaultEducationButton.classList.add('bg-blue-500', 'text-white');
    }
});
