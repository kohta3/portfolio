
// example
function uploadImage(element,btnEement,previewElement) {
    element.addEventListener('change',event=>{
        const files = event.target.files;
        if (files && files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewElement.src = e.target.result;
                previewElement.style.display = "block";
                btnEement.style.display = "none";
            }
            reader.readAsDataURL(files[0]);
        }else{
            previewElement.style.display = "none";
            btnEement.style.display = "block";
        };
    })
}

document.addEventListener('DOMContentLoaded',()=>{
    const image1Btn = document.getElementById('image1');
    const image1Preview = document.getElementById('image1_preview');
    const image2Btn = document.getElementById('image2');
    const image2Preview = document.getElementById('image2_preview');
    const imagesBtn = document.querySelectorAll('.example_image_in');

    if (document.querySelector('.productMessage')) {
        const productMessage = document.querySelector('.productMessage');
        setTimeout(()=>{
            productMessage.style.display = "none";
        },3000);
    }

    uploadImage(image1Btn ,imagesBtn[0] ,image1Preview);
    uploadImage(image2Btn ,imagesBtn[1] ,image2Preview);
})