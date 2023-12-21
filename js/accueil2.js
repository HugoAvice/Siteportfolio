function scrollToSection(sectionId) {
    const targetElement = document.getElementById(sectionId);

    if (targetElement) {
        targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}