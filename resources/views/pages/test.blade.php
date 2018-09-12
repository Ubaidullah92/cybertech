

<script>
 window.addEventListener('scroll', this.loadPostOnScroll)

    setInterval(this.showGuestModalBySpentTime, this.timeAdded * 1000)
</script>
<script>
    // Setup isScrolling variable
    var isScrolling;

    // Listen for scroll events
    window.addEventListener('scroll', function ( event ) {

        // Clear our timeout throughout the scroll
        window.clearTimeout( isScrolling );

        // Set a timeout to run after scrolling ends
        isScrolling = setTimeout(function() {

            // Run the callback
            console.log( 'Scrolling has stopped.' );

        }, 2000);

    }, false);
</script>