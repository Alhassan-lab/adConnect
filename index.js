document.addEventListener("DOMContentLoaded", function () {
    // Get all buttons with the class "btn" and add a click event listener
    const buttons = document.querySelectorAll(".btn");
    
    buttons.forEach(function (button) {
      button.addEventListener("click", function () {
        // Log a message to the console when a button is clicked
        console.log(`Button clicked: ${button.textContent}`);
        
        // You can add more functionality here based on your requirements
      });
    });
  });

