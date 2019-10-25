<template>
  <div class="uk-text-center">
    <p v-if="status">Успешно отправлено!</p>
    <div v-if="!status">
      <div class="uk-margin">
          <input v-model="email"
          ref="email"
          name="email"
          class="uk-input uk-form-width-medium uk-form-large uk-form-width-large"
          type="text"
          placeholder="Ваш e-mail"
          @blur="$v.email.$touch()">
      </div>
      <div class="uk-margin" v-if="$v.email.$error">
          <p class="uk-text-small uk-text-danger">Пожалуйста, введите действительный адрес электронной почты</p>
      </div>
      <div class="uk-margin">
        <button
        :disabled="$v.$invalid"
        class="uk-button uk-button-default uk-button-large uk-form-width-large" type="button" name="button" @click="send">{{button_title}}</button>
      </div>
      <p class="uk-text-small uk-text-muted">Ваши данные не будут переданы 3-м лицам</p>

    </div>
  </div>
</template>

<script>
import Inputmask from 'inputmask';
import { required, email } from "vuelidate/lib/validators";

export default {
  props: ['sourseid', 'button_title'],
  data: function() {
      return {
        email: ''
      }
    },
    methods: {
      send() {
          this.$store.dispatch('SEND_LEAD', { email: this.email, sourse: this.sourseid });
      },
    },
    computed: {
      status () {
            return this.$store.getters.LEAD_SEND_STATUS;
          },
    },
    mounted() {
            //// Маска ввода e-mail формата "_@_"
            // let im = new Inputmask(
            //   {
            //     mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
            //     greedy: false,
            //     onBeforePaste: function (pastedValue, opts) {
            //       pastedValue = pastedValue.toLowerCase();
            //       return pastedValue.replace("mailto:", "");
            //     },
            //     definitions: {
            //       '*': {
            //         validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
            //         casing: "lower"
            //       }
            //     }
            //   });
            // im.mask(this.$refs.email);
      },
      validations: {
              email: {
                required,
                email
              },
            },
}


  </script>
