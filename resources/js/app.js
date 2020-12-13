require('./bootstrap');

Vue.component('column-component', require('./components/ColumnComponent.vue').default);
const app = new Vue({
  el: '#app',
});
