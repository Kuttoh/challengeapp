<template>
    <div>
        <h1>Edit Supplier</h1>
        <form @submit.prevent="updateSupplier">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Supplier Name:</label>
                        <input type="text" class="form-control" v-model="supplier.name">
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-dark">Update</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                supplier: {}
            }
        },

        created() {
            let uri = `http://challenge.appp/api/supplier/editSupplier/${this.$route.params.id}`;
            this.axios.get(uri).then((response) => {
                this.supplier = response.data;
            });
        },

        methods: {
            updateSupplier(){
                let uri = `http://challenge.appp/api/supplier/update/${this.$route.params.id}`;
                this.axios.post(uri, this.supplier).then((response) => {
                    this.$router.push({name: 'suppliers'});
                });
            }
        }
    }
</script>
