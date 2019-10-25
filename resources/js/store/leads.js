import Axios from 'axios';

export default {
  state: {
    status: false
  },
  getters: {
    LEAD_SEND_STATUS (state) {
      return state.status
    }
  },
  mutations: {
    // создание состояния
    SET_LEADS_STATUS: (state, payload) => {
      state.status = payload.success;
      console.log(payload.success);
    },


  },
  actions: {
    // отправка в БД
    SEND_LEAD: async (context, payload) => {

      let {data} = await Axios.post('https://enc4jc335523e.x.pipedream.net', tempyGen(payload));
      // console.log(data);
      context.commit('SET_LEADS_STATUS', data);
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
