export default class Toggle {
    constructor(toggleButton, monthlyPackages, yearlyPackages) {
        this.toggleButton = $(toggleButton);
        this.monthlyPackages = $(monthlyPackages);
        this.yearlyPackages = $(yearlyPackages);

        this.hideYearlyPackages();
    }
    toggle () {

        if (this.toggleButton.hasClass('left-1')) {
            this.toggleButton.removeClass('left-1');
            this.toggleButton.addClass('right-1');
            this.hideMonthlyPackages();
        } else {
            this.toggleButton.addClass('left-1');
            this.toggleButton.removeClass('right-1');
            this.hideYearlyPackages();
        }
    }

    hideMonthlyPackages() {
        this.monthlyPackages.each(function () {
            $(this).hide();
        })

        this.yearlyPackages.each(function () {
            $(this).show()
        })
    }

    hideYearlyPackages() {
        this.yearlyPackages.each(function () {
            $(this).hide();
        })

        this.monthlyPackages.each(function () {
            $(this).show();
        })
    }
}
