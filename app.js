$(document).ready(function () {
    function setMenu(itemMenu) {
        alert("Anda memilih " + itemMenu);
        $('#select-menu').val(itemMenu);
    }

    gsap.from("#titleHead, #desc, .btn", {
        opacity: 0,
        y: function(index, target) {
            return index === 0 ? -50 : 50;
        },
        x: 0,
        duration: 2
    });

    if (localStorage.getItem('theme') === 'light') {
        setTheme(true);
    }

    function setTheme(isLight) {
        $('body').attr('id', isLight ? 'lightMode' : '');
        if (isLight) {
            localStorage.setItem('theme', 'light');
        } else {
            localStorage.removeItem('theme');
        }
    }

    $(function () {
        $('.additional-btn').click(function () {
            alert('Additional button clicked!');
        });
    });
});
