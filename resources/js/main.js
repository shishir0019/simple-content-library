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

tiggerConfirm = (id) => {
    console.log(id);
    let confirm = document.querySelector('#confirm');
    let isShow = [...confirm.classList].some(item => item === 'hidden')
    if(isShow){
        confirm.classList.remove('hidden');
        confirm.classList.add('flex');
    }else{
        confirm.classList.remove('flex');
        confirm.classList.add('hidden');
    }
}