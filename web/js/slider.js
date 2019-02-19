/**** JS Class for slider, only for mon -blog-technos ****/

class Slider {

    /**
     *
     * @param {HTMLElement} element
     * @param {Object} options
     */
    constructor (element, options = {}) {
        this.element = element;
        this.options = Object.assign({}, {
            numberSlidesNext : 1,
            numberSlidesVisible : 1,
        }, options);

        let children  = [].slice.call(element.children);

        this.wrapper = this.createWrapperAndClass('slider');
        this.subContainer = this.createWrapperAndClass('subContainer');

        this.wrapper.appendChild(this.subContainer);
        this.element.appendChild(this.wrapper);

        this.items = children.map((elements) => {
            let item = this.createWrapperAndClass('sliderItem');
            item.appendChild(elements)
            this.subContainer.appendChild(item);
            return item;
        });

        this.cssForResponsive();

        this.currentSlide = 0;
        this.createNav();

    }

    /**
     * Css according to resolution screen
     */
    cssForResponsive () {

        let maxItem = this.items.length / this.options.numberSlidesVisible;
        this.subContainer.style.width = (maxItem * 100) + "%";
        this.items.forEach(item => item.style.width = (( 100 / this.options.numberSlidesVisible ) / maxItem) +  "%");
    }

    /**
     *  Creation and navigation in the slider
     */
    createNav () {

        let prevBtn = this.createWrapperAndClass('sliderPrev');
        let nextBtn = this.createWrapperAndClass('sliderNext');

        this.wrapper.appendChild(prevBtn);
        this.wrapper.appendChild(nextBtn);

        prevBtn.addEventListener('click', this.prev.bind(this));
        nextBtn.addEventListener('click', this.next.bind(this));
    }


    prev () {
        this.goToSlide(this.currentSlide - this.options.numberSlidesNext);
    }

    next () {
        this.goToSlide(this.currentSlide + this.options.numberSlidesNext);
    }

    /**
     *
     * @param {number} index
     */
    goToSlide (index) {

        (index < 0) ? index = this.items.length - this.options.numberSlidesVisible : (index >= this.items.length) ?  index = 0  : false;

        let translateX = index * - 100 / this.items.length;
        this.subContainer.style.transform = 'translate3d(' + translateX + '%,0,0)';
        this.currentSlide = index;
    };

    /**
     *
     * @param {string} attribute
     * @returns {HTMLElement}
     */
    createWrapperAndClass (className) {

        let div = document.createElement('div');
        div.classList.add(className);

        return div;
    }

}

document.addEventListener('DOMContentLoaded', function(){

    new Slider(document.querySelector("#slider-1"), {
        numberSlidesNext : 1,
        numberSlidesVisible : 1,
    });

});