<template xmlns="http://www.w3.org/1999/html">
  <div>
    <form @submit.prevent="add()">
      <div class="form-group">
        <label>Firstname</label>
        <input type="text" v-model="newParticipant.firstname" class="form-control">
      </div>
      <div class="form-group">
        <label>Lastname</label>
        <input type="text" v-model="newParticipant.lastname" class="form-control">
      </div>
      <button class="btn btn-primary"
              :disabled="!newParticipant.firstname || !newParticipant.lastname">Add new participant
      </button>
    </form>
  </div>
</template>

<script>
  export default {
    data() {
      return {newParticipant: {}};
    },
    methods: {
      add() {
        this.$emit('added', this.newParticipant);
        this.newParticipant = {};
      }
    }
  };
</script>
