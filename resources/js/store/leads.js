import Axios from 'axios';

export default {
  state: {
  },
  getters: {
  },
  mutations: {
  },
  actions: {

    // отправка лида
    SEND_LEAD : (context, payload) => {
      return Axios.post('https://medacustika.com.ua/api/v1/lead-push', tempyGen(payload))
      .then((response) => {
        // какоето действие из состоянием (оставил на будущее)
        // if (response.success === true) {
        //   context.commit('SOME_MUTATOR', response.data);
        // }
        return response.data
      })
      .catch(error => {
        return error;
      });
    },

    // отправка имени лида
    SEND_LEAD_NAME : (context, payload) => {
      return Axios.post('https://medacustika.com.ua/api/v1/lead-name-set', tempyGen(payload))
      .then((response) => {
        return response.data
      })
      .catch(error => {
        return error;
      });
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
