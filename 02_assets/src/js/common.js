document.addEventListener("DOMContentLoaded", () => {
    const profileElement = document.querySelector('.profile');
    const navBarElement = document.querySelector('.nav-bar');

    if (profileElement && navBarElement) {
        const profileClientRect = profileElement.getBoundingClientRect();

        function toggleBackground() {
            var scrollHeight = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollHeight > profileClientRect.top && window.innerWidth >= 720) {
                navBarElement.classList.add('backgroundActive');
            } else {
                navBarElement.classList.remove('backgroundActive');
            }

            if (scrollHeight > profileClientRect.top && window.innerWidth <= 720) {
                document.querySelector('.nav-header').classList.add('backgroundActive-sp');
            } else {
                document.querySelector('.nav-header').classList.remove('backgroundActive-sp');
            }            

        }

        window.addEventListener('scroll', toggleBackground);
    }
});
