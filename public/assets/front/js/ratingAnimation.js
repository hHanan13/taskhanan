const slider = document.querySelector(".perfumes_filter");
const filteredPerfumesSection = document.querySelector(".filtered-perfumes");
let sliderFlag = isInViewport(slider)
let FPSFlag = isInViewport(filteredPerfumesSection)

console.log(slider,sliderFlag,FPSFlag)
console.log(filteredPerfumesSection);
if(!sliderFlag){
    slider.classList.add("slider-animation");
    console.log("Done")
}
if(!FPSFlag){
    filteredPerfumesSection.classList.add("perfumes-animation");
    console.log("Done another");
    
}

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