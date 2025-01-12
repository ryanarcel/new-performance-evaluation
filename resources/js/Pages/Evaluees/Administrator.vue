<script setup lang="ts">
import CommonDataTable from '@/Components/Custom/CommonDataTable.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
// import { onMounted } from 'vue'; 

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
      <CommonDataTable
        :data="evaluees"
        :search-placehodler="'Search by name'"
      ></CommonDataTable>
    </template>
  </AuthenticatedLayout>
</template>
<style scoped></style>
