console.log('Main.js working...');

function closeMenu (e) {
    console.log(e);
}

const notification = document.querySelector('#notification');

function close_global_notification () {
    notification.style.display = 'none';
    console.log('close');
}
