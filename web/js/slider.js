/**** JS Class for slider, only for mon -blog-technos ****/

class Slider {

    /**
     *
     * @param {HTMLElement} element
     * @param {Object} options
     */
    constructor (element, options = {}) {
        this.element = element;
        this.children  = [].slice.call(element.children);
        this.options = Object.assign({}, {
            numberSlidesNext : 3,
            numberSlidesVisible : 3,
        }, options);

        let maxItem = this.children.length / this.options.numberSlidesVisible;

        let wrapper = this.createWrapperAndClass('slider');
        let subContainer = this.createWrapperAndClass('subContainer');

        subContainer.style.width = (maxItem * 100) + "%";

        wrapper.appendChild(subContainer);
        this.element.appendChild(wrapper);

        this.children.forEach((elements) => {
            let item = this.createWrapperAndClass('sliderItem');
            item.style.width = ((100 / this.options.numberSlidesVisible) /maxItem) +  "%";
            item.appendChild(elements)
            subContainer.appendChild(item);
        });

    }

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
        numberSlidesNext : 3,
        numberSlidesVisible : 3,
    });

});