<template>
  <div class="uk-text-center">
    <div>
      <p v-if="!oldname">Подскажите, пожалуйста, как мы можем к Вам обращаться</p>
      <p v-if="oldname">Похоже что мы уже знакомы. Вас зовут -</p>
      <div class="uk-margin">
          <input v-model="name"
          ref="name"
          name="name"
          class="uk-input uk-form-width-medium uk-form-large uk-form-width-large"
          type="text"
          placeholder="Ваше имя"
          @blur="$v.name.$touch()">
      </div>
      <div class="uk-margin" v-if="$v.name.$error">
        <transition name="fade">
          <p class="uk-text-small uk-text-danger">
            <template v-if="!$v.name.required">
              Пожалуйста, укажите как мы можем к вам обращаться
            </template>
            <template v-else>
              Имя может содержать только буквы
            </template>
          </p>
        </transition>
      </div>
      <div class="uk-margin">
        <button
        :disabled="$v.$invalid"
        class="uk-button uk-button-default uk-button-large uk-form-width-large" type="button" name="button" @click="send">
        <template v-if="!oldname">
          {{button_title}}
        </template>
        <template v-if="oldname">
          Все верно
        </template>
        </button>
      </div>

    </div>
  </div>
</template>

<script>
import { required } from "vuelidate/lib/validators";

export default {
  props: ['button_title'],
  data: function() {
      return {
        oldname: false,
        name: ''
      }
    },
    methods: {
      send() {
          this.$store.dispatch('SEND_LEAD_NAME', { name: this.name });

          // сохраняем в браузер имя пользователя
          const parsed = JSON.stringify(this.name);
          localStorage.setItem('name', parsed);

          // передаем событие в GA
          gtag('event', 'sendName', {'event_category': 'Button', 'event_label': this.button_title});

          // вызываем переадресацию на следущую страницу
          this.$emit('gotourl');
      },
    },
    mounted() {
      // проверяем наличие имени пользователя в браузере
      if (localStorage.getItem('name')) {
        try {
          this.name = JSON.parse(localStorage.getItem('name'));
          this.oldname = true;
        } catch(e) {
          localStorage.removeItem('name');
          this.oldname = false;
        }
      }
    },
    validations: {
            name: {
              required,
              alpha: val => /^[а-яёії\s]+$/i.test(val),
            },
          },
}
  </script>
