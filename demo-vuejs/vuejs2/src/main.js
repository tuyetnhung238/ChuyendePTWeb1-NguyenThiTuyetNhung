import Vue from 'vue'
import App from './App.vue'

new Vue({
    el: '#app',
    render: h => h(App),
    data: {
        parentMessage: 'Nhung',
        items: [{
                title: 'aaa',
                body: 'tra chanh'
            },
            {
                title: 'bbb',
                body: 'tra da'
            },
            {
                title: 'ccc',
                body: 'tra dao'
            }
        ]
    }
})