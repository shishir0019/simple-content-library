window.prototype = this;
console.log('Main.js working...');

close_global_notification = () => {
    const notification = document.querySelector('#notification');
    notification.style.display = "none"
}

closeMenu = () => {
    let sidebar = document.querySelector('#admin_sidebar');
    let menu = document.querySelector('#admin_menu');
    let display = sidebar.style.display;
    if(display == 'flex' || display == ''){
        sidebar.style.display = 'none';
        menu.classList.remove('btn--active');
    }else{
        menu.classList.add('btn--active');
        sidebar.style.display = 'flex';
    }
}