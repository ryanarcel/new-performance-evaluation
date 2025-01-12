<script setup lang="ts">
import TextInput from '@/Components/TextInput.vue';
import { Link } from '@inertiajs/vue3';
import { defineProps, ref } from 'vue';

const props = defineProps<{
  data: object;
  searchPlacehodler?: string;
}>();

const searchHandler = ref<string>('');

// onMounted(() => {
//   console.log(props.data.data[0].name);
// });
</script>

<template>
  <div id="overall-container">
    <div class="mb-10 flex flex-col">
      <TextInput
        v-model="searchHandler"
        :placeholder="searchPlacehodler"
        class="w-1/4 text-sm text-gray-600"
      >
      </TextInput>
    </div>

    <div class="relative overflow-x-auto border">
      <table
        v-if="data.data"
        class="w-full text-left text-sm text-gray-600 dark:text-gray-400 rtl:text-right"
      >
        <thead
          class="bg-white text-sm uppercase text-gray-900 dark:bg-gray-700 dark:text-gray-400"
        >
          <tr>
            <!-- Dynamically render column headers -->
            <th
              v-for="(key, index) in data.data.length > 0
                ? Object.keys(data.data[0])
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
            v-for="(row, rowIndex) in data.data"
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
    <div class="mt-5 flex">
      <nav class="mx-auto">
        <ul class="flex h-8 items-center -space-x-px text-sm">
          <li v-for="(link, index) in data.meta.links" :key="index">
            <Link
              :href="link.url"
              :class="[
                'flex h-8 items-center justify-center border border-gray-300 px-3 leading-tight hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white',
                link.active
                  ? 'bg-primary text-white'
                  : 'bg-white text-gray-500',
              ]"
              preserve-scroll
            >
              <span v-html="link.label"></span>
            </Link>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</template>

<style scoped></style>
