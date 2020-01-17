function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/**** JS Class for slider, only for mon -blog-technos ****/
var Slider =
/*#__PURE__*/
function () {
  "use strict";

  /**
   *
   * @param {HTMLElement} element
   * @param {Object} options
   */
  function Slider(element) {
    var _this = this;

    var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

    _classCallCheck(this, Slider);

    this.element = element;
    this.options = {
      numberSlidesNext: 1,
      numberSlidesVisible: 1
    };
    var children = [].slice.call(element.children);
    this.wrapper = this.createWrapperAndClass('slider');
    this.subContainer = this.createWrapperAndClass('subContainer');
    this.wrapper.appendChild(this.subContainer);
    this.element.appendChild(this.wrapper);
    this.items = children.map(function (elements) {
      var item = _this.createWrapperAndClass('sliderItem');

      item.appendChild(elements);

      _this.subContainer.appendChild(item);

      return item;
    });
    this.cssForResponsive();
    this.currentSlide = 0;
    this.createNav();
  }
  /**
   * Css according to resolution screen
   */


  _createClass(Slider, [{
    key: "cssForResponsive",
    value: function cssForResponsive() {
      var _this2 = this;

      var maxItem = this.items.length / this.options.numberSlidesVisible;
      this.subContainer.style.width = maxItem * 100 + "%";
      this.items.forEach(function (item) {
        return item.style.width = 100 / _this2.options.numberSlidesVisible / maxItem + "%";
      });
    }
    /**
     *  Creation and navigation in the slider
     */

  }, {
    key: "createNav",
    value: function createNav() {
      let mainContainer = document.getElementById('mainContainer');
      let prevBtn = this.createWrapperAndClass('sliderPrev');
      let nextBtn = this.createWrapperAndClass('sliderNext');
      mainContainer.appendChild(prevBtn);
      mainContainer.appendChild(nextBtn);
      prevBtn.addEventListener('click', this.prev.bind(this));
      nextBtn.addEventListener('click', this.next.bind(this));
    }
  }, {
    key: "prev",
    value: function prev() {
      this.goToSlide(this.currentSlide - this.options.numberSlidesNext);
    }
  }, {
    key: "next",
    value: function next() {
      this.goToSlide(this.currentSlide + this.options.numberSlidesNext);
    }
    /**
     *
     * @param {number} index
     */

  }, {
    key: "goToSlide",
    value: function goToSlide(index) {
      index < 0 ? index = this.items.length - this.options.numberSlidesVisible : index >= this.items.length ? index = 0 : false;
      let translateX = index * -100 / this.items.length;
      this.subContainer.style.transform = 'translate3d(' + translateX + '%,0,0)';
      this.currentSlide = index;
    }
  }, {
    key: "createWrapperAndClass",

    /**
     *
     * @param {string} attribute
     * @returns {HTMLElement}
     */
    value: function createWrapperAndClass(className) {
      let div = document.createElement('div');
      div.classList.add(className);
      return div;
    }
  }]);

  return Slider;
}();

if (window.location.href == 'https://monblogtechnos.fr/') {
  document.addEventListener('DOMContentLoaded', function () {
    new Slider(document.querySelector("#sliderFix"), {
      numberSlidesNext: 1,
      numberSlidesVisible: 1
    });
  });
}