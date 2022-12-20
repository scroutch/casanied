let tabs = document.querySelectorAll('.tab-link');
let tabBodies = document.querySelectorAll('.tab-body');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        unSelectAll();
        tab.classList.add('active');
        let ref = tab.getAttribute('data-ref');
        document.querySelector(`.tab-body[data-id="${ref}"]`).classList.add('active');
    });
});

function unSelectAll() {
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });
    
    tabBodies.forEach(tab => {
        tab.classList.remove('active');
    });
}