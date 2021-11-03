require('./bootstrap');


import Vue from 'vue'

// importing compoment
import ExampleComponent from './components/ExampleComponent.vue'
import TeacherComponent from './components/TeacherComponent.vue'
import PaperComponent from './components/PaperComponent.vue'

// creating a vue instance
const app = new Vue({
    el: '#app',
    components: {
        "example-component": ExampleComponent,
        "teacher-component": TeacherComponent,
        "paper-component": PaperComponent
    }
});