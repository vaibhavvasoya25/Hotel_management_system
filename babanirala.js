const hamburger = document.getElementById('hamburger');
const ul = document.querySelector('#navbar div .item-ul');

hamburger.addEventListener("click", () => {
    if (ul.style.display == 'flex') {
        ul.style.display = 'none'
        ul.style.flexDirection = 'row'
        document.getElementById('navbar').style.flexDirection = 'row'
    } else {
        ul.style.display = 'flex';
        ul.style.flexDirection = 'column'
        document.getElementById('navbar').style.flexDirection = 'column'
    }
    // hamburger.style.display = 'none'
});

window.addEventListener('resize', () => {
    if (window.innerWidth >= 770) {
        console.log("hello")
        ul.style.display = 'flex';
        ul.style.flexDirection = 'row';
    }
})

window.addEventListener('resize', () => {
    if (window.innerWidth <= 770) {
        console.log("hello")
        ul.style.display = 'none';
        ul.style.flexDirection = 'column';
    }
})