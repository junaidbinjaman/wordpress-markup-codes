document.addEventListener('alpine:init', () => {
    Alpine.data('signupForm', () => ({
        username: '',
        password: '',
        passwordConfirm: '',
        belt: '',
        bio: '',
        newsletter: true,
        showPass: false,
        errors: {},
        beltChoices: ['black', 'white', 'red', 'orange', 'brown'],
        success: false,

        validateForm() {
            this.errors = {};
            if (this.username.length < 2) {
                this.errors.username = 'Username Must be 3 char long';
            }

            if (this.password.length < 6) {
                this.password.username = 'Password must be 6 char long';
            }

            if (this.password !== this.passwordConfirm) {
                this.errors.passwordConfirm = 'The passwordConfirm didn\'t match'
            }

            if (!this.belt) {
                this.errors.belt = 'Please select a belt color.';
            }

            if (this.bio < 10) {
                this.errors.bio = 'Bio must be at least 10 characters';
            }
        },

        submitForm($event) {
            this.validateForm();
            console.log(this.errors);

            if (Object.keys(this.errors).length === 0) {
                console.log(this.username, this.passwordConfirm, this.password, this.belt, this.bio);

                $event.target.reset();
                this.success = true;
            }
        }
    }))
})
