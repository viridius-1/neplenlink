  

var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
var mainImageLight = document.getElementById("main-logo-light");
var mainImageDark = document.getElementById("main-logo-dark");


const logo = document.getElementById("logo");
// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
    // mainImageLight.classList.remove('hidden');
    // logo.src = "assets/img/logo/logo-blue.png";
   
   
} else {
    themeToggleDarkIcon.classList.remove('hidden');
    // mainImageDark.classList.remove('hidden');
    // logo.src = "assets/img/logo/logo-white.png";
   
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
            setTimeout(function(){ logo.src = "assets/img/logo/logo-white.png";},000)
            
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
            setTimeout(function(){ logo.src = "assets/img/logo/logo-blue.png";},000)
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});


    
     