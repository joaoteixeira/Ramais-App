new Vue({
    el: '#appPhone',

    data: {
        create: false,
        searchTerm: '',
        phones: [],
        formPhone: {
            description: '',
            phone: '',
            _token: ''
        }
    },

    ready: function() {
        this.fetchPhones();
    },

    methods: {
        fetchPhones: function() {
            var self = this;

            self.$http.get('/api/phones', function(response) {
                self.phones = response;
            });
        },
        onSubmitForm: function(e) {
            e.preventDefault();
            console.log(e, this.formPhone.description );

            return false;
        }

    }
});
//# sourceMappingURL=app.js.map