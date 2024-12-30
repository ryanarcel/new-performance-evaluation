<script setup lang="ts">
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import { BsPencil, BsTrash3 } from '@kalimahapps/vue-icons';
import { reactive, ref } from 'vue';

const props = defineProps<{
  tool: any;
  errors: Object;
}>();

const form = reactive({
  statement: '',
  tool_id: props.tool.data.id,
});

const forUpdate = ref(false);
const forUpdateId = ref(null);

function submit() {
  if (forUpdate.value) {
    router.put(`/items/${forUpdateId.value}`, form);
    forUpdate.value = false;
    forUpdateId.value = null;
    form.statement = '';
    return;
  }
  router.post('/items', form);
  form.statement = '';
}

function poputateForm(stmt: string, id: any) {
  forUpdate.value = true;
  forUpdateId.value = id;
  form.statement = stmt;
}
</script>
<template>
  <Head title="Performance Evaluation" />
  <AuthenticatedLayout>
    <template #header>
      <h1 class="font-bold">Evaluation Tools > Tool Items</h1>
    </template>
    <template #content>
      <label
        for="message"
        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
        >{{
          !forUpdate ? 'Add Item Statement' : 'Update Item Statement'
        }}</label
      >
      <form @submit.prevent="submit()">
        <textarea
          v-model="form.statement"
          rows="4"
          class="mb-1 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-base text-black focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
          placeholder="Write your item statement here..."
        ></textarea>

        <!-- error alert -->
        <div
          v-if="props.errors?.statement"
          class="mb-2 rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400"
          role="alert"
        >
          <span class="font-medium">Error!</span> {{ props.errors.statement }}
        </div>

        <!-- Saved alert -->
        <div
          class="mb-4 rounded-lg bg-green-50 p-4 text-sm text-green-800 dark:bg-gray-800 dark:text-green-400"
          role="alert"
        >
          <span class="font-medium">Success!</span> Item saved.
        </div>

        <PrimaryButton class="mb-3 bg-primary hover:bg-primary-light"
          >Save Item</PrimaryButton
        >
      </form>

      <ul
        class="mt-5 max-w-md list-inside list-disc space-y-1 text-gray-500 dark:text-gray-400"
      >
        <li
          v-for="item in tool.data.items"
          :key="item.id"
          class="group text-base text-black dark:text-white"
        >
          {{ item.statement }}

          <BsPencil
            class="text-success invisible mx-2 inline-block group-hover:visible dark:text-gray-500"
            @click="poputateForm(item.statement, item.id)"
          />
          <BsTrash3
            class="text-danger invisible my-2 inline-block group-hover:visible dark:text-gray-500"
          />
        </li>
      </ul>
    </template>
  </AuthenticatedLayout>
</template>
<style scoped></style>
