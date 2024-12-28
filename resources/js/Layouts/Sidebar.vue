<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import {
  BsClipboard2CheckFill,
  BsGrid1x2Fill,
  BsPersonCheckFill,
} from '@kalimahapps/vue-icons';
import { ref } from 'vue';

const showingNavigationDropdown = ref(false);
</script>
<template>
  <aside
    id="sidebar-multi-level-sidebar"
    class="fixed left-0 top-16 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0"
    aria-label="Sidebar"
  >
    <div class="h-full overflow-y-auto bg-gray-50 px-3 py-4 dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
        <li>
          <Link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
            class="inline-flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          >
            <BsGrid1x2Fill class="mr-4 text-primary hover:text-primary-dark" />
            Dashboard
          </Link>
        </li>
        <li>
          <Link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
            class="inline-flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          >
            <BsClipboard2CheckFill
              class="mr-4 text-primary hover:text-primary-dark"
            />
            Evaluations
          </Link>
        </li>
        <li>
          <span
            class="inline-flex cursor-pointer items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
            @click="showingNavigationDropdown = !showingNavigationDropdown"
          >
            <BsPersonCheckFill
              class="mr-4 text-primary hover:text-primary-dark"
            />
            Evaluees
          </span>
          <ul v-if="showingNavigationDropdown" class="space-y-2 py-2">
            <li>
              <a
                href="#"
                class="group flex w-full items-center rounded-lg p-2 pl-11 text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                >Products</a
              >
            </li>
            <li>
              <a
                href="#"
                class="group flex w-full items-center rounded-lg p-2 pl-11 text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                >Billing</a
              >
            </li>
            <li>
              <a
                href="#"
                class="group flex w-full items-center rounded-lg p-2 pl-11 text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                >Invoice</a
              >
            </li>
          </ul>
        </li>
        <li>
          <Link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
            class="inline-flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          >
            <BsClipboard2CheckFill
              class="mr-4 text-primary hover:text-primary-dark"
            />
            Evaluation Tools
          </Link>
        </li>
      </ul>
    </div>
  </aside>
</template>
