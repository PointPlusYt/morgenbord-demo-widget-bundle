import { createApp } from 'vue';

const demoWidget = createApp({
    data() {
      return {
        bite: 'Grosse bite',
      }
    },
    compilerOptions: {
      delimiters: ["${", "}$"]
    },
  });

const mountedDemoWidget = demoWidget.mount('#other');