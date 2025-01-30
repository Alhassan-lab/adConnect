document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".btn");
  
  buttons.forEach(function (button) {
      button.addEventListener("click", function () {
          console.log(`Button clicked: ${button.textContent}`);
          // Add more functionality here
      });
  });
});