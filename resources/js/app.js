require("./bootstrap");

import { createApp } from "vue";
import store from "./store";
import App from "./App.vue";
import ArticleComponent from "./components/ArticleComponent.vue";
import ViewsComponent from "./components/ViewsComponent.vue";
import LikesComponent from "./components/LikesComponent.vue";
import CommentsComponent from "./components/CommentsComponent.vue";

const app = createApp(App);

app.component("ArticleComponent", ArticleComponent);
app.component("ViewsComponent", ViewsComponent);
app.component("LikesComponent", LikesComponent);
app.component("CommentsComponent", CommentsComponent);

app.use(store).mount("#app");
