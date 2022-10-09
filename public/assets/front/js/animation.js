let cartSection = document.querySelector(".shopping-cart");
let checkoutSection = document.querySelector(".cart_shop");
let cartElements = cartSection.querySelectorAll(":scope >div");

let cartInViewFlag = isInViewport(cartSection);
let checkoutFlag = isInViewport(checkoutSection);

/* [...cartElements].forEach((item, index) => {
    item.style.visibility = "hidden";
}); */
/* checkoutSection.style.visibility = "hidden";
 */ if (cartInViewFlag) {
    cartSection.classList.add("cart-animation");
    console.log(cartSection);
    /*  [...cartElements].forEach((item, index) => {
        item.classList.add(`cart-child-${index}`);
    }); */
}
/* if (checkoutFlag) {
    checkoutSection.classList.add("checkout-animation");
    checkoutSection.style.visibility = "visible";
} */
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    );
}
