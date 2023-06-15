import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import VideoChat from './components/VideoChat.vue';

const app = createApp({});
app.component('example-component', ExampleComponent);
app.component('video-chat', VideoChat);

app.mount('#app');
