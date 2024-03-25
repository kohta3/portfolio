function setCookies(key, value, time) {
    const currentTime = new Date();
    const expirationTime = new Date(currentTime.getTime() + time);
    document.cookie = key + "=" + value + "; expires=" + expirationTime.toUTCString() + "; path=/";
}

function inputChk(inputElements) {
    let isValid = true;
    for (const element of inputElements) {
        if (element.value == null || element.value.trim() === "") {
            const error = element.closest(".contact-input").querySelector('p');
            error.style.visibility = "visible";
            setTimeout(() => {
                error.style.visibility = "hidden";
            }, 3000);
            element.scrollIntoView({ behavior: "smooth", block: "center" });
            isValid = false;
            break;
        }
    }
    return isValid;
}

function mailChk() {
    let isValid = true;
    const email = document.getElementById('email');
    const confirm = document.getElementById('confirm');
    const emailError = email.closest(".contact-input").querySelector('p');
    const confirmErorr = confirm.closest(".contact-input").querySelector('p');
    const erorrText = emailError.innerText; 

    if (email.value != confirm.value) {
        emailError.innerText = "アドレスが異なります";
        confirmErorr.innerText = "アドレスが異なります";
        emailError.style.visibility = "visible";
        confirmErorr.style.visibility = "visible";
        
        setTimeout(() => {
            emailError.style.visibility = "hidden";
            confirmErorr.style.visibility = "hidden";
            emailError.innerText = erorrText;
            confirmErorr.innerText = erorrText;
        }, 3000);

        email.scrollIntoView({ behavior: "smooth", block: "center" });
        
        isValid = false;
    }
    return isValid;
}

function allowedChk() {
    const allow = document.getElementById("allow");
    if (!allow.checked) {
        const target = allow.closest('div').querySelector('p');
        target.style.visibility = "visible";
        setTimeout(() => {
            target.style.visibility = "hidden";
        }, 3000);
        target.scrollIntoView({ behavior: "smooth", block: "center" });
    }

    return allow.checked;
}

async function fetchAccess(formElements) {
    const url = "/app/request/contact_request.php";
    
    const formData = new FormData(formElements);

    const response = await fetch(url, {
        method: "post",
        body: formData
    }); 

    return response.ok; 
}

async function clickEvent() {
    const form = document.getElementById('form');
    form.addEventListener("submit", async event => {
        event.preventDefault();
        const inputElements = document.querySelectorAll("input, select, textarea");
        if (!inputChk(inputElements) || !mailChk() || !allowedChk()) {
            return false;
        }

        const success = await fetchAccess(form);

        if (success) {
            setCookies("contactSuccess", true, 3000);
        } else {
            setCookies("contactSuccess", false, 3000);
        }

        window.location = "./";
    });
}


document.addEventListener("DOMContentLoaded", () => {
    clickEvent();
});
