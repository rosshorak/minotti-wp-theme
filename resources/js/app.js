window.addEventListener('load', function () {
    let mainNavigation = document.getElementById('primary-navigation')
    let mainNavigationToggle = document.getElementById('primary-menu-toggle')

    if(mainNavigation && mainNavigationToggle) {
        // Get hamburger lines for animation
        const hamburgerLines = mainNavigationToggle.querySelectorAll('span')

        mainNavigationToggle.addEventListener('click', function (e) {
            e.preventDefault()

            // Toggle navigation visibility
            mainNavigation.classList.toggle('hidden')

            // Animate hamburger to X
            if (mainNavigation.classList.contains('hidden')) {
                // Menu is now hidden - reset to hamburger
                hamburgerLines[0].style.transform = 'rotate(0deg) translate(0, 0)'
                hamburgerLines[1].style.opacity = '1'
                hamburgerLines[2].style.transform = 'rotate(0deg) translate(0, 0)'
            } else {
                // Menu is now visible - animate to X
                hamburgerLines[0].style.transform = 'rotate(45deg) translate(5px, 5px)'
                hamburgerLines[1].style.opacity = '0'
                hamburgerLines[2].style.transform = 'rotate(-45deg) translate(7px, -6px)'
            }
        })

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mainNavigationToggle.contains(e.target) && !mainNavigation.contains(e.target)) {
                if (!mainNavigation.classList.contains('hidden')) {
                    mainNavigation.classList.add('hidden')
                    // Reset hamburger animation
                    hamburgerLines[0].style.transform = 'rotate(0deg) translate(0, 0)'
                    hamburgerLines[1].style.opacity = '1'
                    hamburgerLines[2].style.transform = 'rotate(0deg) translate(0, 0)'
                }
            }
        })

        // Close mobile menu on window resize to desktop size
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 960) { // lg breakpoint
                mainNavigation.classList.add('hidden')
                // Reset hamburger animation
                hamburgerLines[0].style.transform = 'rotate(0deg) translate(0, 0)'
                hamburgerLines[1].style.opacity = '1'
                hamburgerLines[2].style.transform = 'rotate(0deg) translate(0, 0)'
            }
        })
    }
})

/**
 * Mobile dropdown menu toggle
 *
 * Adds click functionality to parent menu items on mobile devices.
 * On screens < 768px, clicking a parent menu link toggles the dropdown
 * instead of navigating to the link. Desktop hover behavior unchanged.
 */
document.querySelectorAll('.menu-item-has-children > a').forEach(item => {
    item.addEventListener('click', (e) => {
        if (window.innerWidth < 960) {
            e.preventDefault();
            const submenu = item.nextElementSibling;
            if (submenu) {
                submenu.classList.toggle('hidden');

                // Add rotation animation to arrow if it exists
                const arrow = item.querySelector('svg');
                if (arrow) {
                    if (submenu.classList.contains('hidden')) {
                        arrow.style.transform = 'rotate(0deg)';
                    } else {
                        arrow.style.transform = 'rotate(180deg)';
                    }
                }
            }
        }
    });
});