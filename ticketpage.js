var radioButton = document.getElementById("choice");

    // Add an event listener to handle clicks
    radioButton.addEventListener("click", function() {
        // Toggle the checked state of the radio button
        radioButton.checked = !radioButton.checked;
    });

function showSelect() {
  document.getElementById('hidden').style.display = 'block';
}

function hideSelect() {
  document.getElementById('hidden').style.display = 'none';
}

function showSelect2() {
    document.getElementById('participate-hidden').style.display = 'block';
}
  
function hideSelect2() {
    document.getElementById('participate-hidden').style.display = 'none';
}