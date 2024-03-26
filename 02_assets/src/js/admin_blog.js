function adminFormChk() {
    const adminForm = document.getElementById('admin-form');
    const submitBtn = document.getElementById('adminSubmit');

    submitBtn.addEventListener('click', event => {
        const inputElements = adminForm.querySelectorAll("input,select,textarea");
        for (let i = 0; i < inputElements.length; i++) {
            const element = inputElements[i];
            
            if (element.value == null || element.value == "") {
                event.preventDefault();
                const errorText = element.closest('div').querySelector('.errorText');
                errorText.style.visibility = "visible";
                errorText.classList.add('is-active');
                setTimeout(function() {
                    errorText.style.visibility = "hidden";
                    errorText.classList.remove('is-active');
                }, 3000);
                break; // ループを抜ける
            }
        }
    });
}

function sidebarAction() {
    
}

document.addEventListener("DOMContentLoaded", () => {
    adminFormChk();
    sidebarAction();
});
