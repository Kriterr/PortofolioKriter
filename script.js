document.addEventListener('DOMContentLoaded', () => {
    // Select the background pseudo-element
    const background = document.body;

    // Listen for mouse movement on the entire page
    document.addEventListener('mousemove', (e) => {
        // Get the coordinates of the mouse relative to the window
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        // Calculate the center of the viewport
        const centerX = window.innerWidth / 2;
        const centerY = window.innerHeight / 2;

        // Calculate the movement distance (adjust multiplier for speed)
        const moveX = (mouseX - centerX) * 0.01;
        const moveY = (mouseY - centerY) * 0.01;

        // Apply the transform to the background pseudo-element
        // We target the ::before pseudo-element's transform directly
        background.style.setProperty('--move-x', `${moveX}px`);
        background.style.setProperty('--move-y', `${moveY}px`);
        document.body.style.transform = `translate(${moveX}px, ${moveY}px)`;
    });
});