<template>
  <div class="uk-text-center">
    <div v-if="errorshow" class="uk-alert-danger" uk-alert>
        <p>{{error}}</p>
    </div>
    <template v-if="loading" id="loading">
      <div class="bubblingG">
      	<span id="bubblingG_1">
      	</span>
      	<span id="bubblingG_2">
      	</span>
      	<span id="bubblingG_3">
      	</span>
      </div>
    </template>
    <template v-if="subformshow">
      <lead-form-name button_title="Отправить" @gotourl="nextPage"></lead-form-name>
    </template>
    <div v-show="formshow">
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
  props: ['sourceid', 'button_title', 'redirect_uri'],
  data: function() {
      return {
        loading: false,
        formshow: true,
        subformshow: false,
        errorshow: false,
        error: '',
        phone: ''
      }
    },
    methods: {
      send() {
        this.formshow = false;
        this.loading = true;

        this.$store.dispatch('SEND_LEAD', { phone: this.phoneNum, source: this.sourceid }).then((res) => {
          // проверяем наличие служебного сообщения из сервера
          if (res.msg) {
            this.loading = false;
            this.errorshow = true;
            this.error = res.msg;
            // console.log(res);

          // проверяем облаботал ли сервер запрос
          } else if (res.success) {
            this.loading = false;
            this.subformshow = true;
            // console.log(res);

            // вызываем событие GA
            gtag('event', 'sendPhone', {'event_category': this.sourceid, 'event_label': this.button_title }); return true;

          // в противном случае показываем сообщение об ошибке
          } else {
            this.loading = false;
            this.formshow = true;
            this.errorshow = true;
            this.error = 'Возникла ошибка. Данные не удалось отправить. Попробуйте повторить попытку немного позже.';
            // console.log(res);
          }
        })

      },
      nextPage() {
        window.location.href= this.redirect_uri;

      }
    },
    computed: {
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
