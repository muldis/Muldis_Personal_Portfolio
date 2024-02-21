<script setup lang="ts">
function dbms_uri_base(): string {
  // Defaults match those of the API server.
  const host = process.env.NUXT_ENV_DBMS_HOST ?? 'localhost';
  const port = process.env.NUXT_ENV_DBMS_PORT ?? 8000;
  return 'http://'+host+':'+port+'/api';
}
const { data, pending, error, refresh }
    = await useFetch('/students/fetch_all',
    {
        method: 'GET',
        baseURL: dbms_uri_base(),
    });
const students = data.value;
</script>

<template>
  <div>
    <h2>List of Students</h2>
    <div v-if="students === null">
      <p>Error fetching list of students: {{ JSON.stringify(error) }}</p>
    </div>
    <div v-else>
      <p>Showing {{ students.length }} students.</p>
      <p><NuxtLink to="/students/create">Create</NuxtLink> a new student record.</p>
      <table>
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>Student SID</th>
            <th>Student Name</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="student in students" :key="student.student_sid">
            <td><NuxtLink :to="`/students/edit/${ student.student_sid }`">Edit</NuxtLink></td>
            <td><NuxtLink :to="`/students/delete/${ student.student_sid }`">Delete</NuxtLink></td>
            <td>{{ student.student_sid }}</td>
            <td>{{ student.student_name }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
