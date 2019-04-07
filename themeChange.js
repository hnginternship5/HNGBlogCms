//change-theme is the button id
const changeTheme = document.querySelector('#change-theme');
const darkModeLink = document.createElement('link');

let darkMode = false;

const themeChanger = () => {
  if (darkMode === false){
    darkModeLink.setAttribute("rel", "stylesheet");
    //Please add the needed style sheet here as the second argument
    darkModeLink.setAttribute("href", "css/theme1.css");
    document.head.appendChild(darkModeLink);
    alert('switching to dark mode');
    darkMode = true;
  } else if (darkMode === true) {
    document.head.removeChild(darkModeLink);
    alert('switching to light mode');
    darkMode = false;
  }
  return;
}

changeTheme.addEventListener('click', themeChanger, false);