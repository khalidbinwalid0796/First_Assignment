// authentication--
let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let logout = require('./components/auth/logout.vue').default;

//home
let home = require('./components/home.vue').default;

export const routes = [
  // authentication--
  { path: '/', component: login, name:'/' },
  { path: '/register', component: register, name:'register' },
  { path: '/logout', component: logout, name:'logout' },

  // home--
  { path: '/home', component: home, name:'home' },
]