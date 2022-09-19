import './bootstrap';

import { createApp, ref } from 'vue/dist/vue.esm-bundler';

createApp({
    setup() {
        const greeting = ref('ok');

        return {
            greeting,
        }
    },
}).mount('#app');
