window._ = require('lodash');

/**
 * Carregaremos a biblioteca HTTP axios, que nos permite emitir facilmente solicitações
 * para nosso back-end Laravel. Esta biblioteca lida automaticamente com o envio do
 * token CSRF como um cabeçalho com base no valor do cookie do token "XSRF".
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo expõe uma API expressiva para se inscrever em canais e ouvir
 * eventos que são transmitidos pelo Laravel. Echo e a transmissão de eventos
 * permitem que sua equipe construa facilmente aplicativos web robustos em tempo real.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
