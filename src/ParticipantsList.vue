<template>
  <div>
    <ol class="list-group">
      <li v-for="person in list" class="list-group-item">
        {{ person.firstname }}
        {{ person.lastname }}
        <button class="btn btn-danger" style="float: right;" @click="remove(person.id)">Remove participant</button>
      </li>
    </ol>
  </div>
</template>

<script>
  export default {
    props: ['list'],

  methods:{
      remove(id) {
          this.$emit('removed', id);
      },
  }
  }
</script>
