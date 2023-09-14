function goToForm() {

    document.getElementById('scrollToFormButton').addEventListener('click', function() {
        document.getElementById('quoteFormIntro').scrollIntoView({ behavior: 'smooth', block: 'start' })
    });
}


function goToFormFromElsewhere() {
    // Add an event listener to the button
    document.getElementById('gotoForm2').addEventListener('click', function() {
        // Redirect to index.html
        window.location.href = 'index.html#quoteFormIntro';
    });
}