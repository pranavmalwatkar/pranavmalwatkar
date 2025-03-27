document.addEventListener('DOMContentLoaded', () => {
    const skillButtons = document.querySelectorAll('.skill-btn');
    const skillCategories = document.querySelectorAll('.skills-category');

    // Display the "Frontend" category by default
    const defaultCategory = document.getElementById('frontend');
    if (defaultCategory) {
        defaultCategory.classList.add('active');
    }

    skillButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            // Remove active class from all categories
            skillCategories.forEach(categoryDiv => {
                categoryDiv.classList.remove('active');
            });

            // Add active class to the selected category
            const activeCategory = document.getElementById(category);
            if (activeCategory) {
                activeCategory.classList.add('active');
            }
        });
    });
});
