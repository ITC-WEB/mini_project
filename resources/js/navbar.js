$(document).ready(function () {
    // Get the current URL pathname
    var url = window.location.pathname;

    // For each navbar link, check if the href matches the current URL and add 'active' class
    $(".navbar-nav a")
        .filter(function () {
            return this.href === url;
        })
        .addClass("active");
});
