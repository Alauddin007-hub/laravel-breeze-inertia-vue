<script setup>
import { useForm, usePage } from '@inertiajs/vue3';
import FrontendLayout from '@/Layouts/FrontendLayout.vue';

// import { Head, Link, useForm, usePage } from "@inertiajs/vue3";


const { madicines } = usePage().props

// const props = defineProps({
//     madicines: {
//         type: Object,
//         default: () => ({}),
//     },
// });
console.log(madicines);
const form = useForm({});

function destroy(id) {
  if (confirm("Are you sure you want to Delete")) {
    alert(id);
    form.delete(route("madicine.destroy", id));
  }
}
</script>

<template>
  <FrontendLayout>
    <br>
  <div class="container p-10">
    <div class="mb-2">
      <a href="">
        <button class="btn btn-info">Add Madicine</button>
      </a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Brand</th>
          <th scope="col">Purchase Price</th>
          <th scope="col">Discount</th>
          <th scope="col">Selling Price</th>
          <th scope="col">Stock</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <!-- 'name','category_id','brand','purchase_price','discount','selling_price','stock' -->

      <tbody>
        <tr v-for="madicine in madicines" :key="madicine.id">
          <th scope="row">{{ madicine.id }}</th>
          <td>{{ madicine.name }}</td>
          <td>{{ madicine.category_id }}</td>
          <td>{{ madicine.brand }}</td>
          <td>{{ madicine.purchase_price }}</td>
          <td>{{ madicine.discount }}</td>
          <td>{{ madicine.selling_price }}</td>
          <td>{{ madicine.stock }}</td>
          <td>
            <button class="btn btn-success">Edit</button>
            <button class="btn btn-danger" @click="destroy(madicine.id)">Delete</button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</FrontendLayout>
</template>

<style>
/* @import url("https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css") */
</style>