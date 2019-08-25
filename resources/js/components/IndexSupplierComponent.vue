<template>
    <div>
        <h1>Suppliers</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'createSupplier' }" class="btn btn-dark">Create Supplier</router-link>
            </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="supplier in suppliers" :key="supplier.id">
                <td>{{ supplier.id }}</td>
                <td>{{ supplier.name }}</td>
                <td><router-link :to="{name: 'editSupplier', params: { id: supplier.id }}" class="btn btn-primary">Edit</router-link></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                suppliers: []
            }
        },

        created() {
            let uri = 'http://challenge.appp/api/suppliers';
            this.axios.get(uri).then(response => {
                this.suppliers = response.data.data;
            });
        }
    }
</script>
