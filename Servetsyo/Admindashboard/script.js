
// Get a reference to the dropdown element
var dropdown = document.getElementById('Status');

// Get a reference to the paragraph where the selected option will be displayed
var selectedOption = document.getElementById('selectedOption');

// Add an event listener to the dropdown to capture the selected option
dropdown.addEventListener('change', function() {
    // Get the selected option's value
    var selectedValue = dropdown.value;
    
    // Update the paragraph with the selected option
    selectedOption.textContent = 'Selected Option: ' + selectedValue;
    
    // You can perform further actions with the selected data here
});
