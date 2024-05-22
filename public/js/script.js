$(document).ready(function () {
    var presentYear = new Date().getFullYear();

    document.getElementById("presentYear").innerText = presentYear;

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $(".navbar").addClass("nav-sticky");
        } else {
            $(".navbar").removeClass("nav-sticky");
        }
    });

    // Random images
    const images = [
        "/img/siang1.JPG",
        "/img/siang2.JPG",
        "/img/siang3.JPG",
        "/img/siang4.JPG",
        "/img/siang5.JPG",
        "/img/siang6.JPG",
        "/img/siang7.JPG",
        "/img/siang8.JPG",
        "/img/siang9.jpg",
    ];

    function getRandomImages(arr, num) {
        const acak = arr.sort(() => 0.5 - Math.random());
        return acak.slice(0, num);
    }

    const randomImage = getRandomImages(images, 4);

    $("#randomImage1").attr("src", randomImage[0]);
    $("#randomImage2").attr("src", randomImage[1]);
    $("#randomImage3").attr("src", randomImage[2]);
    $("#randomImage4").attr("src", randomImage[3]);

    // Zoom Photos
    let isZoomed = false;

    // Potrait
    $(".potrait").click(function () {
        $("#gambarModalPotrait").fadeIn();
        $("#imgModalPotrait").attr("src", $(this).attr("src"));
    });

    $(".tutup").click(function () {
        $("#gambarModalPotrait").fadeOut();
    });

    $("#gambarModalPotrait").click(function (e) {
        if (
            $(e.target).is("#gambarModalPotrait") ||
            $(e.target).is(".modal-content-landscape")
        ) {
            $(this).fadeOut();
            $("#imgModalPotrait").css("transform", "scale(1)");
            $("#imgModalPotrait").css("transform-origin", "center center");
            isZoomed = false;
        }
    });

    $("#imgModalPotrait").click(function (e) {
        e.stopPropagation();
        let imgWidth = $(this).width();
        let imgHeight = $(this).height();
        let offsetX = e.offsetX;
        let offsetY = e.offsetY;
        let originX = (offsetX / imgWidth) * 100;
        let originY = (offsetY / imgHeight) * 100;

        if (isZoomed) {
            $(this).css("transform", "scale(1)");
            $(this).css("transform-origin", "center center");
            $(this).css("cursor", "zoom-in");
        } else {
            $(this).css("transform", "scale(3)"); // Ubah scale sesuai kebutuhan
            $(this).css("transform-origin", `${originX}% ${originY}%`);
            $(this).css("cursor", "zoom-out");
        }
        isZoomed = !isZoomed;
    });

    // Landscape
    $(".landscape").click(function () {
        $("#gambarModalLandscape").fadeIn();
        $("#imgModalLandscape").attr("src", $(this).attr("src"));
    });

    $('.tutup').click(function () {
        $('#gambarModalLandscape').fadeOut();
    })

    $("#gambarModalLandscape").click(function (e) {
        if (
            $(e.target).is("#gambarModalLandscape") ||
            $(e.target).is(".modal-content-landscape")
        ) {
            $(this).fadeOut();
            $("#imgModalLandscape").css("transform", "scale(1)");
            $("#imgModalLandscape").css("transform-origin", "center center");
            isZoomed = false;
        }
    });

    $("#imgModalLandscape").click(function (e) {
        e.stopPropagation();
        let imgWidth = $(this).width();
        let imgHeight = $(this).height();
        let offsetX = e.offsetX;
        let offsetY = e.offsetY;
        let originX = (offsetX / imgWidth) * 100;
        let originY = (offsetY / imgHeight) * 100;

        if (isZoomed) {
            $(this).css("transform", "scale(1)");
            $(this).css("transform-origin", "center center");
            $(this).css("cursor", "zoom-in");
        } else {
            $(this).css("transform", "scale(3)"); // Ubah scale sesuai kebutuhan
            $(this).css("transform-origin", `${originX}% ${originY}%`);
            $(this).css("cursor", "zoom-out");
        }
        isZoomed = !isZoomed;
    });

    // Change button
    $(".change-btn").click(function () {
        $(".change-btn").removeClass("active");
        $(this).addClass("active");
    });
});
