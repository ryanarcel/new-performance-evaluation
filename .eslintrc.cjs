/* eslint-env node */
require('@rushstack/eslint-patch/modern-module-resolution');

module.exports = {
  root: true,
  extends: [
    'plugin:vue/vue3-essential',
    'eslint:recommended',
    '@vue/eslint-config-typescript',
    '@vue/eslint-config-prettier',
    'plugin:vue/vue3-recommended', // Use this if you have a Vue project
    'plugin:prettier/recommended', // Integrates Prettier with ESLint
  ],
  parserOptions: {
    ecmaVersion: 'latest',
  },
  rules: {
    'vue/multi-word-component-names': 'off',
    'no-undef': 'off',
    'indent': ['error', 2], // Enforce 2 spaces for indentation
    'prettier/prettier': [
      'error',
      {
        tabWidth: 2, // Use 2 spaces
        useTabs: false, // Use spaces, not tabs
      },
    ],
  },
};
