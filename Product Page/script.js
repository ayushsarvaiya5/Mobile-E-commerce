$(document).ready(function () {

    $(".front-show").click(function () {
        $(".front-hide").css("display", "block");
        $(".front-show").css("display", "none");
    })

    $(".zooming-4").hover(function () {
        $(".zooming-open-4").css("display", "block");
        $(".zooming-open-2,.zooming-open-1,.zooming-open-head,.zooming-open-3").css("display", "none");
        $(this).css("border", "1px solid");
    })

    $(".zooming-4").mouseleave(function () {
        $(this).css("border-color", "transparent");
    })

    $(".zooming-3").hover(function () {
        $(".zooming-open-3").css("display", "block");
        $(".zooming-open-2,.zooming-open-1,.zooming-open-head,.zooming-open-4").css("display", "none");
        $(this).css("border", "1px solid");
    })

    $(".zooming-3").mouseleave(function () {
        $(this).css("border-color", "transparent");
    })

    $(".zooming").hover(function () {
        $(".zooming-open-head").css("display", "block");
        $(".zooming-open-2,.zooming-open-1,.zooming-open-3,.zooming-open-4").css("display", "none");
        $(this).css("border", "1px solid");
    })

    $(".zooming").mouseleave(function () {
        $(this).css("border-color", "transparent");
    })

    $(".zooming-1").hover(function () {
        $(".zooming-open-1").css("display", "block");
        $(".zooming-open-head,.zooming-open-2,.zooming-open-3,.zooming-open-4").css("display", "none");
        $(this).css("border", "1px solid");
    })

    $(".zooming-1").mouseleave(function () {
        $(this).css("border-color", "transparent");
    })

    $(".zooming-5").hover(function () {
        $(".zooming-open-2").css("display", "block");
        $(".zooming-open-head,.zooming-open-1,.zooming-open-3,.zooming-open-4").css("display", "none");
        $(this).css("border", "1px solid");
    })

    $(".zooming-5").mouseleave(function () {
        $(this).css("border-color", "transparent");
    })

})

function rediraction_add_to_cart()
{
    location.href = "../Cart/cart.php";
}

function rediraction_buy_now()
{
    location.href = "../Payment/payment.php";
}