export default class Toggle {
    constructor(selector) {
        this.$el = $(selector)
    }
    show () {
        this.$el.fadeIn();
    }

    hide() {
        this.$el.fadeOut();
    }
}
