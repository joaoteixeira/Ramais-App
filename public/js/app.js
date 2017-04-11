Vue.http.headers.common['X-CSRF-TOKEN'] = $("meta[name=token]").attr("value");

new Vue({
    el: '#appPhone',

    data: {
        create: false,
        searchTerm: '',
        phones: [],
        phone: {
            description: '',
            phone: ''
        },
        errors: {
            description: [],
            phone: [],
            permission: false
        },
        success: false
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
        save: function(e) {
            var self = this;
            e.preventDefault();

            self.$http.post('/api/phones', this.phone, function(response) {
                console.log(response);

                if (response.success) {
                    self.create = false;
                    self.success = true;
                    self.phones.push(response.data);
                } else {
                    self.errors = response.errors;
                }
            });

            return false;
        },
        cancel: function(e){
            this.create = false;
            this.resetErrors();
        },
        resetErrors: function(e) {
            this.errors = {
                description: [],
                phone: [],
                permisson: false
            }
        }

    }
});
//# sourceMappingURL=app.js.map