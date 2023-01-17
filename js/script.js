ScrollOut({
    cssProps: true,
    threshold: 0.2,
});

$(document).ready(function () {
    $(".menu-link").click(function (event) {
        event.preventDefault();
        $(".menu-overlay").toggleClass("open");
        $(".menu").toggleClass("open");
    });

    $('.one .categorie').click(function () {
        $(".menu-overlay").toggleClass("open");
        $(".menu").toggleClass("open");

    })
});

// modules

function openModule(e, module) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("modules-tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabcontent[i].style.animation = "fadeOut";
        tabcontent[i].style.animationDuration = "0.5s"
    }
    tablinks = document.getElementsByClassName("modules-tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(module).style.display = "block";
    document.getElementById(module).style.animation = "fadeIn";
    document.getElementById(module).style.animationDuration = "0.5s";
    e.currentTarget.className += " active";
}
