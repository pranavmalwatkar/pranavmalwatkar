document.addEventListener('DOMContentLoaded', () => {
    const skillButtons = document.querySelectorAll('#skills .skill-btn');
    const skillCategories = document.querySelectorAll('#skills .skills-category');

    skillButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            // Remove active class from all categories and buttons
            skillCategories.forEach(categoryDiv => categoryDiv.classList.add('hidden'));
            skillButtons.forEach(btn => btn.classList.remove('bg-blue-500', 'text-white'));

            // Add active class to the selected category and button
            const activeCategory = document.getElementById(category);
            if (activeCategory) {
                activeCategory.classList.remove('hidden');
            }
            button.classList.add('bg-blue-500', 'text-white');
        });
    });

    // Set default active state for Technical Proficiency section
    const defaultSkillCategory = document.getElementById('frontend');
    const defaultSkillButton = document.querySelector('#skills .skill-btn[data-category="frontend"]');
    if (defaultSkillCategory && defaultSkillButton) {
        defaultSkillCategory.classList.add('active');
        defaultSkillButton.classList.add('active');
    }
});
