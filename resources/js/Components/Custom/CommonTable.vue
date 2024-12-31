<script setup lang="ts">
import TextInput from '@/Components/TextInput.vue';
import { defineProps, ref } from 'vue';

defineProps<{
  data: Record<string, any>[]; // Array of objects with any shape
  searchPlacehodler?: string;
}>();

const searchHandler = ref<string>('');
</script>

<template>
  <div id="overall-container">
    <div class="mb-10 flex flex-col">
      <TextInput
        v-model="searchHandler"
        :placeholder="searchPlacehodler"
        class="w-1/4"
      >
      </TextInput>
    </div>

    <div class="relative overflow-x-auto">
      <table
        class="w-full text-left text-sm text-gray-600 dark:text-gray-400 rtl:text-right"
      >
        <thead
          class="bg-white text-sm uppercase text-gray-900 dark:bg-gray-700 dark:text-gray-400"
        >
          <tr>
            <!-- Dynamically render column headers -->
            <th
              v-for="(key, index) in data.length > 0
                ? Object.keys(data[0])
                : []"
              :key="index"
              scope="col"
              class="px-6 py-3"
            >
              {{ key }}
            </th>
          </tr>
        </thead>
        <tbody>
          <!-- Dynamically render rows -->
          <tr
            v-for="(row, rowIndex) in data"
            :key="rowIndex"
            class="border-b bg-white dark:border-gray-700 dark:bg-gray-800"
          >
            <td
              v-for="(value, colIndex) in row"
              :key="colIndex"
              class="px-6 py-4"
            >
              {{ value }}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped></style>
