<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import {
  BsClipboard2CheckFill,
  BsGrid1x2Fill,
  BsPersonCheckFill,
} from '@kalimahapps/vue-icons';
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
            <BsGrid1x2Fill class="text-primary hover:text-primary-dark mr-4" />
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
              class="text-primary hover:text-primary-dark mr-4"
            />
            Evaluations
          </Link>
        </li>
        <li>
          <Link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
            class="inline-flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          >
            <BsPersonCheckFill
              class="text-primary hover:text-primary-dark mr-4"
            />
            Evaluees
          </Link>
        </li>
        <li>
          <Link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
            class="inline-flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          >
            <BsClipboard2CheckFill
              class="text-primary hover:text-primary-dark mr-4"
            />
            Evaluation Tools
          </Link>
        </li>
      </ul>
    </div>
  </aside>
</template>
