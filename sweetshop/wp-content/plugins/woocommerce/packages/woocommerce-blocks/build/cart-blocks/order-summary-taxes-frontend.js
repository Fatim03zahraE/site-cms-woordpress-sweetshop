(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[26],{443:function(e,t,a){"use strict";a.r(t);var c=a(120),r=a(0),s=a(10),l=a(41),n=a(33),o=a(2),i={showRateAfterTaxName:{type:"boolean",default:Object(o.getSetting)("displayCartPricesIncludingTax",!1)},lock:{type:"object",default:{remove:!0,move:!1}}};t.default=Object(c.withFilteredAttributes)(i)(e=>{let{className:t,showRateAfterTaxName:a}=e;const{cartTotals:c}=Object(n.a)();if(Object(o.getSetting)("displayCartPricesIncludingTax",!1)||parseInt(c.total_tax,10)<=0)return null;const i=Object(l.getCurrencyFromPriceResponse)(c);return Object(r.createElement)(s.TotalsWrapper,{className:t},Object(r.createElement)(s.TotalsTaxes,{showRateAfterTaxName:a,currency:i,values:c}))})}}]);