<template>
    <div>
        <h1>Create A Supplier</h1>
        <form @submit.prevent="addSupplier">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Supplier Name:</label>
                        <input type="text" class="form-control" v-model="supplier.name">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-dark">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                supplier: {}
            }
        },

        methods: {
            addSupplier() {
                let uri = 'http://challenge.appp/api/supplier/createSupplier';
                this.axios.post(uri, this.supplier).then((response) => {
                    this.$router.push({name: 'suppliers'});
                });
            }
        }
    }
</script>
