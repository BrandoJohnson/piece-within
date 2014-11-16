
/* CUSTOM JS */

jQuery(document).ready(function() {
    jQuery("#portfolio-sorting li:first-child a").addClass('active');

    jQuery("#portfolio-sorting li a").click(function() {
        // Remove the current active class
        jQuery("#portfolio-sorting li a.active").removeClass('active');

        // Add the active class to the clicked button
        jQuery(this).addClass('active');

        // Get the button text
        var filterValue = 'cat-' + jQuery(this).text().toLowerCase().replace(' ', '-');

        // If we clicked "All", we show all items
        if (filterValue === "cat-all") {
            jQuery('.portfolio-entry').removeClass('hidden1');
        } else {
            // Else, we find the portfolio entries that match the clicked button
            // And then we add the class of .hidden
            jQuery(".portfolio-entry").each(function() {
                if (!jQuery(this).hasClass(filterValue)) {
                    jQuery(this).addClass('hidden1');
                } else {
                    jQuery(this).removeClass('hidden1');
                }
            });
        }

        // Prevents page from reloading every time you hit a button.
        return false;
    });
});
