<template>
  <div class="form-contact">
    <transition name="fade" mode="out-in">
      <p v-if="sent">Tu mensaje ha sido recibido, te contactaremos pronto.</p>
      <form v-else @submit.prevent="submit">
        <div class="input-container container-flex space-between">
          <input v-model="form.name" placeholder="Your Name" class="input-name" required />
          <input v-model="form.email" type="email" placeholder="Email" class="input-email" required />
        </div>
        <div class="input-container">
          <input
            v-model="form.subject"
            type="text"
            placeholder="Subject"
            class="input-subject"
            required
          />
        </div>
        <div class="input-container">
          <textarea v-model="form.message" cols="30" rows="10" placeholder="Your Message" required></textarea>
        </div>
        <div class="send-message">
          <button class="text-uppercase c-green" :disabled="working">
            <span v-if="working">sending...</span>
            <span v-else>send message</span>
          </button>
        </div>
      </form>
    </transition>
    <!-- <pre>{{ form }}</pre> -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      sent: false,
      working: false,
      form: {
        name: "",
        email: "",
        subject: "",
        message: ""
      }
    };
  },
  methods: {
    submit() {
      this.working = true;
      // axios
      //   .post("/api/messages", this.form)
      //   .then(res => {
      //     this.sent = true;
      //     this.working = false;
      //   })
      //   .catch(errors => {
      //     this.sent = false;
      //     this.working = false;
      //   });
    }
  }
};
</script>

<style>
</style>