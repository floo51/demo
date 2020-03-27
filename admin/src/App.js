import React from "react";
import { HydraAdmin, ResourceGuesser } from "@api-platform/admin";
import polyglotI18nProvider from "ra-i18n-polyglot";

import customers from "./customers";
import commands from "./commands";
import products from "./products";
import categories from "./categories";
import invoices from "./invoices";
import reviews from "./reviews";
import { Dashboard } from "./dashboard";

import englishMessages from "./i18n/en";

import customRoutes from "./routes";
import themeReducer from "./themeReducer";
import { Login, Layout } from "./layout";

const i18nProvider = polyglotI18nProvider(locale => {
  if (locale === "fr") {
    return import("./i18n/fr").then(messages => messages.default);
  }

  // Always fallback on english
  return englishMessages;
}, "en");

export default () => (
  <HydraAdmin
    entrypoint={process.env.REACT_APP_API_ENTRYPOINT}
    dashboard={Dashboard}
    customRoutes={customRoutes}
    customReducers={{ theme: themeReducer }}
    layout={Layout}
    i18nProvider={i18nProvider}
  >
    <ResourceGuesser name="customers" {...customers} />
    <ResourceGuesser name="commands" {...commands} />
    <ResourceGuesser name="products" {...products} />
    <ResourceGuesser name="categories" {...categories} />
    <ResourceGuesser name="invoices" {...invoices} />
    <ResourceGuesser name="product_reviews" {...reviews} />
  </HydraAdmin>
);
