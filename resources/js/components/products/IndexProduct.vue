<template>
    <div>
        <h1>Products</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'createProduct' }" class="btn btn-dark">Create Product</router-link>
            </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Item Description</th>
                <th>Item Quantity</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products" :key="product.id">
                <td>{{ product.id }}</td>
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.quantity }}</td>
                <td>
                    <router-link :to="{name: 'editProduct', params: { id: product.id }}" class="btn btn-primary">Edit</router-link>
                    <button class="btn btn-danger" @click.prevent="deleteProduct(product.id)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                products: []
            }
        },

        created() {
            let uri = '/api/products';
            this.axios.get(uri).then(response => {
                this.products = response.data.data;
            });
        },

        methods: {
            deleteProduct(id) {
                let uri = `/api/product/delete/${id}`;
                this.axios.delete(uri).then(response => {
                    this.products.splice(this.products.indexOf(id), 1);
                });
            }
        }
    }
</script>
