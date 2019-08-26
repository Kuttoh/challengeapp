<template>
    <div>
        <h1>Edit Product</h1>
        <form @submit.prevent="updateProduct">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Name:</label>
                        <input type="text" class="form-control" v-model="product.name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Description:</label>
                        <textarea class="form-control" v-model="product.description" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Quantity:</label>
                        <input class="form-control" v-model="product.quantity">
                    </div>
                </div>
            </div>
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
                product: {}
            }
        },

        created() {
            let uri = `/api/product/editProduct/${this.$route.params.id}`;
            this.axios.get(uri).then((response) => {
                this.product = response.data;
            });
        },

        methods: {
            updateProduct(){
                let uri = `/api/product/update/${this.$route.params.id}`;
                this.axios.post(uri, this.product).then((response) => {
                    this.$router.push({name: 'products'});
                });
            }
        }
    }
</script>
