var radioButton = document.getElementById("choice");

    // Add an event listener to handle clicks
    radioButton.addEventListener("click", function() {
        // Toggle the checked state of the radio button
        radioButton.checked = !radioButton.checked;
    });