<script setup lang="ts">
import NavLink from '@/Components/NavLink.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps<{
  tools: any;
}>();
</script>

<template>
  <Head title="Performance Evaluation" />

  <AuthenticatedLayout>
    <template #header>
      <h1 class="font-bold">Evaluation Tools</h1>
    </template>
    <template #content>
      <div class="mx-auto grid max-w-4xl grid-cols-2 gap-20">
        <a
          v-for="tool in tools.data"
          :key="tool.id"
          href="#"
          class="mx-auto block max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
        >
          <h5
            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
          >
            {{ tool.name }}
          </h5>
          <p class="font-normal text-gray-700 dark:text-gray-400">
            {{ tool.description }}
          </p>
          <NavLink :href="route('tools.show', tool.id)">
            <PrimaryButton
              class="mx-auto mt-4 bg-primary hover:bg-primary-light"
              >Add Items</PrimaryButton
            >
          </NavLink>
        </a>
      </div>
    </template>
  </AuthenticatedLayout>
</template>

<style lang="scss" scoped></style>
