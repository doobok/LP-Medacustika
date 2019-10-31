<template>
  <div class="uk-text-center">
    <p v-if="snderror.err">{{snderror.msg}}</p>
    <template v-if="show">
      <lead-form-name button_title="Отправить" @gotourl="nextPage"></lead-form-name>
    </template>
    <div v-if="!show">
      <div class="uk-margin">
          <input v-model="phone"
          ref="phone"
          name="phone"
          class="uk-input uk-form-width-medium uk-form-large uk-form-width-large"
          type="text"
          placeholder="+38"
          @blur="$v.phone.$touch()">
      </div>
      <div class="uk-margin" v-if="$v.phone.$error">
        <transition name="fade">
          <p class="uk-text-small uk-text-danger">Пожалуйста, введите действительный номер телефона</p>
        </transition>
      </div>
      <div class="uk-margin">
        <button
        :disabled="$v.$invalid"
        class="uk-button uk-button-default uk-button-large uk-form-width-large"
        type="button"
        name="button"
        @click="send">{{button_title}}</button>
      </div>
      <p class="uk-text-small uk-text-muted">Ваши данные не будут переданы 3-м лицам</p>

    </div>
  </div>
</template>

<script>
import Inputmask from 'inputmask';
import { required } from "vuelidate/lib/validators";

export default {
  props: ['sourseid', 'button_title', 'redirect_uri'],
  data: function() {
      return {
        show: false,
        phone: ''
      }
    },
    methods: {
      send() {
          this.$store.dispatch('SEND_LEAD', { phone: this.phoneNum, sourse: this.sourseid });
          this.show = true;
          gtag('event', 'sendPhone', {'event_category': this.sourseid, 'event_label': this.button_title }); return true;

      },
      nextPage() {
        window.location.href= this.redirect_uri;

      }
    },
    computed: {
      snderror () {
        // console.log(this.$store.getters.LEAD_SEND_ERROR);
            return this.$store.getters.LEAD_SEND_ERROR;
      },
      phoneNum: function() {
                var str = this.phone;
                str = str.replace(/[^0-9.]/g, '');
                str = str.substr(2);
                return str;
            }
    },
    mounted() {
      let im = new Inputmask('+38 '+'(999) 999-9999');
            im.mask(this.$refs.phone);

      },
      validations: {
              phone: {
                required,
                validFormat: val => /^\+38 \(0\d{2}\) \d{3}\-\d{4}$/.test(val),
              },
            },
}


  </script>
