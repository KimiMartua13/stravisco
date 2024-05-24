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
    var currentLocation = window.location.href;
    let arr = currentLocation.split("/");
    let lastElement = arr[arr.length - 1];

    if (lastElement == "individu") {
        $(".modalIndividu").click(function () {
            $("#gambarModalPotrait").fadeIn();
            $("#imgModalPotrait").attr("src", $(this).attr("src"));

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
    } 
    else if (
        lastElement == "bts" ||
        lastElement == "kelompok" ||
        lastElement == "putbu"
    ) 
    {
        
        $(".modalLain").click(function () {
            $("#gambarModalLandscape").fadeIn();
            $("#imgModalLandscape").attr("src", $(this).attr("src"));
        });



        $(".landscape").click(function () {
            $("#gambarModalLandscape").fadeIn();
            $("#imgModalLandscape").attr("src", $(this).attr("src"));
        });
    
        $(".tutup").click(function () {
            $("#gambarModalLandscape").fadeOut();
        });
    
        $("#gambarModalLandscape").click(function (e) {
            if (
                $(e.target).is("#gambarModalLandscape") ||
                $(e.target).is(".modal-content-landscape")
            ) {
                $(this).fadeOut();
                $("#imgModalLandscape").css("transform", "scale(1)");
                $("#imgModalLandscape").css(
                    "transform-origin",
                    "center center"
                );
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
    

    } else {
        $(".modalIndividu").click(function () {
            $("#gambarModalPotrait").fadeIn();
            $("#imgModalPotrait").attr("src", $(this).attr("src"));

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
    }



    // CODE AWAL
    $(".potrait").click(function () {
        $("#gambarModalPotrait").fadeIn();
        $("#imgModalPotrait").attr("src", $(this).attr("src"));
    });

    $(".tutup").click(function () {
        $("#gambarModalPotrait").fadeOut();
    });

    

    

    

    
    // function setupModal(img) {
    //     let width = img.naturalWidth;
    //     let height = img.naturalHeight;

    //     if (width > height) {
    //         $(img).removeClass("potrait").addClass("landscape");
    //     } else {
    //         $(img).removeClass("landscape").addClass("potrait");
    //     }
    // }

    // function setupImageClickHandlers() {
    //     $(".potrait").click(function () {
    //         $("#gambarModalPotrait").fadeIn();
    //         $("#imgModalPotrait").attr("src", $(this).attr("src"));
    //     });

    //     $(".landscape").click(function () {
    //         $("#gambarModalLandscape").fadeIn();
    //         $("#imgModalLandscape").attr("src", $(this).attr("src"));
    //     });
    // }

    // $(".img-fluid").click(function (e) {
    //     var img = e.currentTarget;
    //     setupModal(img);
    //     setupImageClickHandlers();
    // });

    // $(".tutup").click(function () {
    //     $("#gambarModalPotrait").fadeOut();
    //     $("#gambarModalLandscape").fadeOut();
    // });

    // $("#gambarModalPotrait").click(function (e) {
    //     if ($(e.target).is("#gambarModalPotrait") || $(e.target).is(".modal-content-potrait")) {
    //         isZoomed = false;
    //     }
    // });

    // $("#gambarModalLandscape").click(function (e) {
    //     if ($(e.target).is("#gambarModalLandscape") || $(e.target).is(".modal-content-landscape")) {
    //         isZoomed = false;
    //     }
    // });

    // $("#imgModalPotrait").click(function (e) {
    //     e.stopPropagation();
    //     let imgWidth = $(this).width();
    //     let imgHeight = $(this).height();
    //     let offsetX = e.offsetX;
    //     let offsetY = e.offsetY;
    //     let originX = (offsetX / imgWidth) * 100;
    //     let originY = (offsetY / imgHeight) * 100;

    //     if (isZoomed) {
    //         $(this).css("transform", "scale(1)");
    //         $(this).css("transform-origin", "center center");
    //         $(this).css("cursor", "zoom-in");
    //     } else {
    //         $(this).css("transform", "scale(3)"); // Ubah scale sesuai kebutuhan
    //         $(this).css("transform-origin", `${originX}% ${originY}%`);
    //         $(this).css("cursor", "zoom-out");
    //     }
    //     isZoomed = !isZoomed;
    // });

    // $("#imgModalLandscape").click(function (e) {
    //     e.stopPropagation();
    //     let imgWidth = $(this).width();
    //     let imgHeight = $(this).height();
    //     let offsetX = e.offsetX;
    //     let offsetY = e.offsetY;
    //     let originX = (offsetX / imgWidth) * 100;
    //     let originY = (offsetY / imgHeight) * 100;

    //     if (isZoomed) {
    //         $(this).css("transform", "scale(1)");
    //         $(this).css("transform-origin", "center center");
    //         $(this).css("cursor", "zoom-in");
    //     } else {
    //         $(this).css("transform", "scale(3)"); // Ubah scale sesuai kebutuhan
    //         $(this).css("transform-origin", `${originX}% ${originY}%`);
    //         $(this).css("cursor", "zoom-out");
    //     }
    //     isZoomed = !isZoomed;
    // });

    // Inisialisasi click handler untuk gambar pada awal
    // setupImageClickHandlers();

    var maxWords = 7; // Maximum words to show initially
    var quotes = $(".quotes-student").text().split(" "); // Split the content into words
    var shownContent = quotes.slice(0, maxWords).join(" "); // Join the first 5 words back into a string

    $(".quotes-student").text(shownContent); // Set the content to the first 5 words

    if (quotes.length > maxWords) {
        shownContent += "...";
    }

    // Read More
    var maxWords = 7; // Maximum words to show initially
    var content = $(".content").text().split(" "); // Split the content into words
    var shownContent = content.slice(0, maxWords).join(" "); // Join the first 5 words back into a string

    $(".content").text(shownContent); // Set the content to the first 5 words

    if (content.length > maxWords) {
        $(".read-more").show(); // Show the "Read more" link if there are more than 5 words
    }

    $(".read-more-link").click(function (e) {
        e.preventDefault();
        if ($(this).text() == "Read more") {
            $(".content").text(content.join(" ")); // Show all content
            $(this).text("Read less"); // Change the link text to "Read less"
        } else {
            $(".content").text(shownContent); // Set the content back to the first 5 words
            $(this).text("Read more"); // Change the link text back to "Read more"
        }
    });
});
