require('dotenv').config({path: __dirname+'/./../../.env'});

module.exports = {
	domain: 'betfyre.com',
    port: process.env.APP_PORT || 7777,
    https:true,
    ssl: {
        key: process.env.SSL_KEY_PATH || null,
        cert: process.env.SSL_CERT_PATH || ''
    }
};