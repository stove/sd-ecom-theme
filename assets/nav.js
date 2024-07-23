document.addEventListener('DOMContentLoaded', function() {
    // Toggle sub-menu on click for touch devices using Tailwind CSS classes
    var categoryMenuItems = document.querySelectorAll('.nav-menu .menu-item-has-children > a');

    categoryMenuItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
            var subMenu = this.nextElementSibling;
            if (subMenu.classList.contains('hidden')) {
                subMenu.classList.remove('hidden');
                subMenu.classList.add('flex', 'flex-col');
            } else {
                subMenu.classList.add('hidden');
                subMenu.classList.remove('flex', 'flex-col');
            }
            event.preventDefault();
        });
    });
});