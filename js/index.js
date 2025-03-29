document.addEventListener('DOMContentLoaded', () => {
    // Education Section
    const educationButtons = document.querySelectorAll('#education .skill-btn');
    const educationCategories = document.querySelectorAll('#education .skills-category');

    educationButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            // Remove active class from all categories and buttons
            educationCategories.forEach(categoryDiv => categoryDiv.classList.remove('active'));
            educationButtons.forEach(btn => btn.classList.remove('active'));

            // Add active class to the selected category and button
            const activeCategory = document.getElementById(category);
            if (activeCategory) {
                activeCategory.classList.add('active');
            }
            button.classList.add('active');
        });
    });

    // Set default active state for Education section
    const defaultEducationCategory = document.getElementById('mca');
    const defaultEducationButton = document.querySelector('#education .skill-btn[data-category="mca"]');
    if (defaultEducationCategory && defaultEducationButton) {
        defaultEducationCategory.classList.add('active');
        defaultEducationButton.classList.add('active');
    }

    // Technical Proficiency Section
    const skillButtons = document.querySelectorAll('#skills .skill-btn');
    const skillCategories = document.querySelectorAll('#skills .skills-category');

    skillButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            // Remove active class from all categories and buttons
            skillCategories.forEach(categoryDiv => categoryDiv.classList.remove('active'));
            skillButtons.forEach(btn => btn.classList.remove('active'));

            // Add active class to the selected category and button
            const activeCategory = document.getElementById(category);
            if (activeCategory) {
                activeCategory.classList.add('active');
            }
            button.classList.add('active');
        });
    });

    // Set default active state for Technical Proficiency section
    const defaultSkillCategory = document.getElementById('frontend');
    const defaultSkillButton = document.querySelector('#skills .skill-btn[data-category="frontend"]');
    if (defaultSkillCategory && defaultSkillButton) {
        defaultSkillCategory.classList.add('active');
        defaultSkillButton.classList.add('active');
    }

    // Navbar toggle functionality
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    // Close navbar when a link is clicked (for mobile view)
    const navLinkItems = document.querySelectorAll('.nav-links li a');
    navLinkItems.forEach(link => {
        link.addEventListener('click', () => {
            if (navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
            }
        });
    });
});
