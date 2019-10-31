import Axios from 'axios';

export default {
  state: {
    err: false,
    msg: ''
  },
  getters: {
    LEAD_SEND_ERROR (state) {
      return state
    }
  },
  mutations: {
    // проверяем на ошибки
    GET_SEND_ERROR: (state, payload) => {
      if (payload.success === false) {
        state.err = true;
        state.msg = payload.msg;
      }
    },
  },
  actions: {
    // отправка лида
    SEND_LEAD: async (context, payload) => {
      let {data} = await Axios.post('https://medacustika.com.ua/v1/lead-push', tempyGen(payload));
      context.commit('GET_SEND_ERROR', data);
    },
    // отправка имени лида
    SEND_LEAD_NAME: async (context, payload) => {
      let {data} = await Axios.post('https://medacustika.com.ua/v1/lead-name-set', tempyGen(payload));
    },
  }
}

function tempyGen(payload) {
  // проверяем наличие персонального идентификатора
  let tempy;
  if (localStorage.getItem('tempy')) {
    try {
      tempy = JSON.parse(localStorage.getItem('tempy'));
    } catch(e) {
      localStorage.removeItem('tempy');
    }
  } else {
    // если не обнаружен
    // генерируем случайную строку
    let s = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    tempy = Array(16).join().split(',').map(function() { return s.charAt(Math.floor(Math.random() * s.length)); }).join('');

    // сохраняем в браузер пользователя
    const parsed = JSON.stringify(tempy);
    localStorage.setItem('tempy', parsed);
  };
  // добавляем к данным из формы
  payload.temp_id = tempy;

  return payload;
}
