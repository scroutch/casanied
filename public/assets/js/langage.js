const germanFlag = document.querySelector('.germanFlag');
const frenchFlag = document.querySelector('.frenchFlag');


germanFlag.addEventListener("click", toggleFlag);
frenchFlag.addEventListener("click", toggleFlag);



function toggleFlag() {
    germanFlag.classList.toggle("active");
    frenchFlag.classList.toggle("active");
}