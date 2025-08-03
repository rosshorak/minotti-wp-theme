window.addEventListener('load', function () {
    let mainNavigation = document.getElementById('primary-navigation')
    let mainNavigationToggle = document.getElementById('primary-menu-toggle')

    if(mainNavigation && mainNavigationToggle) {
        mainNavigationToggle.addEventListener('click', function (e) {
            e.preventDefault()

            // Toggle navigation visibility
            mainNavigation.classList.toggle('hidden')

            // Toggle hamburger animation class for Icon 3
            mainNavigationToggle.classList.toggle('active')

            // Update aria-expanded for accessibility
            const isExpanded = !mainNavigation.classList.contains('hidden')
            mainNavigationToggle.setAttribute('aria-expanded', isExpanded)
        })

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mainNavigationToggle.contains(e.target) && !mainNavigation.contains(e.target)) {
                if (!mainNavigation.classList.contains('hidden')) {
                    mainNavigation.classList.add('hidden')
                    mainNavigationToggle.classList.remove('active')
                    mainNavigationToggle.setAttribute('aria-expanded', 'false')
                }
            }
        })

        // Close mobile menu on window resize to desktop size
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 960) { // lg breakpoint
                mainNavigation.classList.add('hidden')
                mainNavigationToggle.classList.remove('active')
                mainNavigationToggle.setAttribute('aria-expanded', 'false')
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