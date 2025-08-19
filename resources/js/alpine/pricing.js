// resources/js/alpine/pricing.js

// resources/js/alpine/pricing.js
/**
 * @returns {{
 *   showMonthly: boolean,
 *   showAnnually: boolean,
 *   testData: string,
 *   toggleBillingPeriod: function
 * }}
 */
export default function pricingComponent() {
    return {
        showMonthly: true,
        showAnnually: false,

        toggleBillingPeriod() {
            this.showMonthly = !this.showMonthly;
            this.showAnnually = !this.showAnnually;


            const dot = document.getElementById('foobar');
            if (this.showMonthly) {
                dot.style.transform = 'translateX(0px)';
            } else {
                dot.style.transform = 'translateX(35px)';
            }
        }
    }
}
