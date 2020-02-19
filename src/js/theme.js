let menu = document.querySelector('.header');
let headerClassList = menu.classList

window.addEventListener('scroll', () => {
    if (window.scrollY >= 100) {
        if(!headerClassList.contains('scrollHide')) {
            headerClassList.add('scrollHide')
        }
    } else {
        headerClassList.remove('scrollHide');
    }
});