<template>
    <div>
        <h1>Create A Product</h1>
        <form @submit.prevent="addProduct">
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
                <button class="btn btn-dark">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                product: {}
            }
        },

        methods: {
            addProduct() {
                let uri = '/api/product/createProduct';
                this.axios.post(uri, this.product).then((response) => {
                    this.$router.push({name: 'products'});
                });
            }
        }
    }
</script>
