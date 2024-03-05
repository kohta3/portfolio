document.addEventListener("DOMContentLoaded", () => {
    const profileElement = document.querySelector('.profile');
    const navBarElement = document.querySelector('.nav-bar');

    if (profileElement && navBarElement) {
        const profileClientRect = profileElement.getBoundingClientRect();

        window.onscroll = function() {
            var scrollHeight = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollHeight > profileClientRect.top) {
                navBarElement.style.backgroundColor = "rgba(0,0,0,0.7)";
            }else{
                navBarElement.style.backgroundColor = "";
            }
        };
    }
});
