<script setup lang="ts">
import NavigationMenu from '@/Components/Custom/NavigationMenu.vue';
import Sidebar from '@/Components/Custom/Sidebar.vue';
</script>

<template>
  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <NavigationMenu />
    <Sidebar />

    <div class="p-4 sm:ml-64">
      <!-- Page Heading -->
      <header v-if="$slots.header" class="bg-white dark:bg-gray-800">
        <div class="mx-auto mb-5 mt-16 max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <slot name="header" />
        </div>
      </header>

      <!-- Page Content -->
      <main>
        <div class="h-screen w-auto bg-white px-20 py-10 dark:bg-gray-900">
          <slot name="content" />
        </div>
      </main>
    </div>
  </div>
</template>
