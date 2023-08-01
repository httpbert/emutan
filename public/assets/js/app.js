
// NOTIFICATION FUNCTION IN USER DASHBOARD
function myNotif() {
    document.getElementById("button-show-info").addEventListener("click", function () {
        const toast = bootstrap.showToast({
            header: "Notification",
            headerSmall: "just now",
            body: "<div><p>This notification has a headline and more text than the previous one.</p><hr/><p>This notification has a headline and more text than the previous one.</p></div>",
            delay: 20000
        })
        toast.element.querySelector(".btn-primary").addEventListener("click", () => {
            bootstrap.showToast({
                body: "Thank you for clicking", direction: "append",
                toastClass: "text-bg-success", closeButtonClass: "btn-close-white"
            })
        })
    })
}

// CAROUSEL IN USER DASHBOARD
$('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 6000,
    margin: 7,
    nav: true,
    navText: ["<i class='fa-solid fa-arrow-left'></i>",
        "<i class='fa-solid fa-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 3,
            nav: true
        },
        768: {
            items: 4
        },
    }
})

// MULTIFORM
