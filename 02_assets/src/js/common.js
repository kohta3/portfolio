document.addEventListener("DOMContentLoaded", () => {
    const profileElement = document.querySelector('.profile');
    const navBarElement = document.querySelector('.nav-bar');

    if (profileElement && navBarElement) {
        const profileClientRect = profileElement.getBoundingClientRect();

        function toggleBackground() {
            var scrollHeight = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollHeight > profileClientRect.top) {
                navBarElement.classList.add('backgroundActive');
            } else {
                navBarElement.classList.remove('backgroundActive');
            }
        }

        window.addEventListener('scroll', toggleBackground);
    }
});
