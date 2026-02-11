<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- jQuery & Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    <?php if (isset($_SESSION['err']) && !empty($_SESSION['err'])): ?>
        console.log("Error: <?= $_SESSION['err'] ?>");
        $(document).ready(function onDocumentReady() {
            toastr.error("<?= $_SESSION['err'] ?>");
        });
        <?php unset($_SESSION['err']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['success']) && !empty($_SESSION['success'])): ?>
        console.log("Success: <?= $_SESSION['success'] ?>");
        $(document).ready(function() {
            toastr.success("<?= $_SESSION['success'] ?>");
        });
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    function banner_forward(ele) {
        console.log(ele);
        //   console.log("parent",ele.parentElement)
        let bannerdiv = ele.parentElement.parentElement.parentElement.parentElement.querySelector(".owl-carousel"); // Select the slider directly
        //   console.log(bannerdiv);
        if (bannerdiv) {
            let nextButton = bannerdiv.querySelector(".owl-next");
            if (nextButton) {
                nextButton.click();
            } else {
                console.error("Next button not found");
            }
        } else {
            console.error("Banner slider not found");
        }
    }

    function banner_backward(ele) {
        console.log(ele);
        console.log("parent", ele.parentElement)
        let bannerdiv = ele.parentElement.parentElement.parentElement.parentElement.querySelector(".owl-carousel");
        //   console.log(bannerdiv);
        if (bannerdiv) {
            let prevButton = bannerdiv.querySelector(".owl-prev");
            if (prevButton) {
                prevButton.click();
            } else {
                console.error("Previous button not found");
            }
        } else {
            console.error("Banner slider not found");
        }
    }

    $(document).ready(function() {
        $(".like-carousel").owlCarousel({
            loop: true,
            // nav: true,
            dots: false,
            // autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                },
                1280: {
                    items: 5
                }
            }
        });
    });
</script>