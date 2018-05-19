//API Login VUE.Js

import Vue from 'vue';
import Router from 'vue-router';
import PrivateBattles from '@/components/privateBattles';
import PublicBattles from '@/components/publicBattles';
import { requireAuth } from '../../utils/auth';

Vue.use(Router);

export default new Router({
  routes: [
    {
      path: '/',
      name: 'loginDiv',
      component: loginDiv,
    },
    {
      path: '/apiLogin/systemLogin/vueLogin',
      name: 'loginDiv',
      beforeEnter: requireAuth,
      component: loginDiv,
    },
  ],
});
