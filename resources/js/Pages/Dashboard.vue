<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
  <Head title="Performance Evaluation" />

  <AuthenticatedLayout>
    <template #header>
      <h1 class="text-primary font-bold">Dashboard</h1>
    </template>
    <template #content>
      <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div
            class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg"
          >
            <div class="p-6 text-gray-900 dark:text-gray-100">
              You're logged in!
            </div>
          </div>
        </div>
      </div>
    </template>
  </AuthenticatedLayout>
</template>
