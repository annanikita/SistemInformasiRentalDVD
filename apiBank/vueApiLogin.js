//API Login VUE.Js

import Vue from 'vue';
import Router from 'vue-router';
import PrivateBattles from '@/components/privateBattles';
import PublicBattles from '@/components/publicBattles';
import { requireAuth } from '../../utils/auth';

Vue.use(Router);

export default new Router({
  const dataLogin as arrayDataLogin as arrLog['email'] = vue_component('input':'txtEmail'->value());
  const arrLog['password'] = vue_component('input':'txtPassword'->value());
  routes: [
    {
      path: '/',
      name: 'loginDiv',
      component: loginDiv,
    },
    {
       requireAuth = new vue(Auth::);
      path: '/apiLogin/systemLogin/vueLogin',
      name: 'loginDiv',
      beforeEnter: requireAuth,
      component: loginDiv,
    },
  ],
});
