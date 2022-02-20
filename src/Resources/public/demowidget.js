import { createApp } from 'vue';

const demoWidget = createApp({
    data() {
      return {
        demoText: 'Hello World',
      }
    },
    compilerOptions: {
      delimiters: ["${", "}$"]
    },
  });

const mountedDemoWidget = demoWidget.mount('#demoWidget');