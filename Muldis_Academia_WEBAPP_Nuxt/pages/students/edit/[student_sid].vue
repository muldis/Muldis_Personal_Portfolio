<script setup lang="ts">
const route = useRoute();
const { student_sid } = route.params;
</script>

<template>
  <div>
    <h2>Edit a Student: {{ student_sid }}</h2>
    <p><NuxtLink to="/students">Return</NuxtLink> to the student listing page.</p>
    <p><strong>This screen is still being made.</strong></p>
  </div>
</template>
