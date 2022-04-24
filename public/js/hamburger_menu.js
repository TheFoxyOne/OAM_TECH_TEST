// Function for triggering the Mobile Hamberger Menu
function triggerHamburgerMenu() {
    var navigationMainMenu = document.getElementById("navigation_mainMenu");
    if (navigationMainMenu.style.display === "flex") {
      navigationMainMenu.style.display = "none";
    } else {
      navigationMainMenu.style.display = "flex";
    }
  }