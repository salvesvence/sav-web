!function t(e,r,n){function i(u,f){if(!r[u]){if(!e[u]){var s="function"==typeof require&&require;if(!f&&s)return s(u,!0);if(o)return o(u,!0);var a=new Error("Cannot find module '"+u+"'");throw a.code="MODULE_NOT_FOUND",a}var l=r[u]={exports:{}};e[u][0].call(l.exports,function(t){var r=e[u][1][t];return i(r?r:t)},l,l.exports,t,e,r,n)}return r[u].exports}for(var o="function"==typeof require&&require,u=0;u<n.length;u++)i(n[u]);return i}({1:[function(t,e,r){"use strict";Vue.component("list-table",{template:"#list-table",props:["list"],created:function(){this.list=JSON.parse(this.list).data}}),new Vue({el:"body"})},{}]},{},[1]);