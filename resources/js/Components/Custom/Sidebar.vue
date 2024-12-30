<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import {
  BsCheckSquareFill,
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
    <div class="h-full overflow-y-auto bg-primary px-3 py-4 dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
        <li>
          <Link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
            class="inline-flex items-center rounded-lg p-2 text-white hover:bg-primary-light dark:text-white dark:hover:bg-gray-700"
          >
            <BsGrid1x2Fill class="hover:text-white-dark mr-4 text-white" />
            Dashboard
          </Link>
        </li>
        <li>
          <Link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
            class="inline-flex items-center rounded-lg p-2 text-white hover:bg-primary-light dark:text-white dark:hover:bg-gray-700"
          >
            <BsCheckSquareFill class="hover:text-white-dark mr-4 text-white" />
            Evaluations
          </Link>
        </li>
        <li>
          <a
            href="#"
            class="inline-flex cursor-pointer items-center rounded-lg p-2 text-white hover:bg-primary-light dark:text-white dark:hover:bg-gray-700"
            @click="showingNavigationDropdown = !showingNavigationDropdown"
          >
            <BsPersonCheckFill class="hover:text-white-dark mr-4 text-white" />
            Evaluees
          </a>
          <ul v-if="showingNavigationDropdown" class="ml-4 space-y-2 py-2">
            <li>
              <a
                href="#"
                class="group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-primary-light dark:text-white dark:hover:bg-gray-700"
                >Administrator</a
              >
            </li>
            <li>
              <a
                href="#"
                class="group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-primary-light dark:text-white dark:hover:bg-gray-700"
                >Supervisor</a
              >
            </li>
            <li>
              <a
                href="#"
                class="group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-primary-light dark:text-white dark:hover:bg-gray-700"
                >BED Teacher</a
              >
            </li>
            <li>
              <a
                href="#"
                class="group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-primary-light dark:text-white dark:hover:bg-gray-700"
                >College Teacher</a
              >
            </li>
            <li>
              <a
                href="#"
                class="group flex w-full items-center rounded-lg p-2 pl-11 text-white transition duration-75 hover:bg-primary-light dark:text-white dark:hover:bg-gray-700"
                >Non-teaching Personnel</a
              >
            </li>
          </ul>
        </li>
        <li>
          <Link
            :href="route('tools.index')"
            :active="route().current('tools')"
            class="inline-flex items-center rounded-lg p-2 text-white hover:bg-primary-light dark:text-white dark:hover:bg-gray-700"
          >
            <BsClipboard2CheckFill
              class="hover:text-white-dark mr-4 text-white"
            />
            Evaluation Tools
          </Link>
        </li>
      </ul>
    </div>
  </aside>
</template>
