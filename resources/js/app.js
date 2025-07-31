window.addEventListener('load', function () {
    let mainNavigation = document.getElementById('primary-navigation')
    let mainNavigationToggle = document.getElementById('primary-menu-toggle')

    if(mainNavigation && mainNavigationToggle) {
        mainNavigationToggle.addEventListener('click', function (e) {
            e.preventDefault()
            mainNavigation.classList.toggle('hidden')
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
        if (window.innerWidth < 768) {
            e.preventDefault();
            item.nextElementSibling.classList.toggle('hidden');
        }
    });
});