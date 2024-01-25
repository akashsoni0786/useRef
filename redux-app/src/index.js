import React, { Suspense } from "react";
import ReactDOM from "react-dom/client";

import App from "./App";
import reportWebVitals from "./reportWebVitals";
import { BrowserRouter } from "react-router-dom";
import store from "./redux/Store";
import { Provider } from "react-redux";
import "@shopify/polaris/build/esm/styles.css";
import enTranslations from "@shopify/polaris/locales/en.json";
import { AppProvider, Frame } from "@shopify/polaris";
import "./index.css";
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <AppProvider i18n={enTranslations}>
    <Provider store={store}>
      <Suspense fallback={<></>}>
        <BrowserRouter>
          <Frame>
            <App />
          </Frame>
        </BrowserRouter>
      </Suspense>
    </Provider>
  </AppProvider>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
