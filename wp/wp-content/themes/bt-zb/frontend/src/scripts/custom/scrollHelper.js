export default {
    // check if currently at top of page
    isScrollTop() {
        let scrollY = false
        if(window.scrollY === 0){
            scrollY = true
        }
        return scrollY
    },
    // takes element, returns true/false depending on if in viewport
    isInViewport(el) {
        let rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        )
    }
}