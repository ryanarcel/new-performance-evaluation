<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
  <Head title="Performance Evaluation" />

  <AuthenticatedLayout>
    <template #header>
      <h1 class="font-bold">Dashboard</h1>
    </template>
    <template #content>
      <p>You're logged in!</p>
    </template>
  </AuthenticatedLayout>
</template>
