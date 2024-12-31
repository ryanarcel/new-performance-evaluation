<script setup lang="ts">
import CommonTable from '@/Components/Custom/CommonTable.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps<{
  evaluees: any;
}>();
</script>
<template>
  <Head title="Performance Evaluation" />
  <AuthenticatedLayout>
    <template #header>
      <h1 class="font-bold">Administrators</h1>
    </template>
    <template #content>
      <CommonTable
        :data="evaluees.data"
        :search-placehodler="'Search by name'"
      ></CommonTable>
    </template>
  </AuthenticatedLayout>
</template>
<style scoped></style>
