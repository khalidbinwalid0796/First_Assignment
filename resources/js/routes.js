// authentication--
let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;

//home
let home = require('./components/home.vue').default;

export const routes = [
  // authentication--
  { path: '/', component: login, name:'/' },
  { path: '/register', component: register, name:'register' },

  // home--
  { path: '/home', component: home, name:'home' },
]