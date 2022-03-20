import { createStore } from "vuex";
import * as article from "./modules/article.js";

export default createStore({
    modules: {
        article,
    },
    state: {
        slug: "",
    },
    actions: {},
    getters: {
        articleSlugRevers(state) {
            return state.slug.split("").reverse().join("");
        },
    },
    mutations: {
        SET_SLUG(state, payload) {
            state.slug = payload;
        },
    },
});
