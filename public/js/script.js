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

    $(".gambar").click(function () {
        $("#gambarModal").fadeIn();
        $("#imgModal").attr("src", $(this).attr("src"));
    });

    $(".tutup").click(function () {
        $("#gambarModal").fadeOut();
    });

    $("#gambarModal").click(function(e){
        if ($(e.target).is("#gambarModal")) {
            $(this).fadeOut();
        }
    });

    $(".change-btn").click(function () {
        $(".change-btn").removeClass("active");
        $(this).addClass("active");
    })
});
