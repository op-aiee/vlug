let defaultConfig = require('tailwindcss/defaultConfig')();

module.exports = {

    width: Object.assign(defaultConfig.width, {
        '1/4': '25%',
        '2/4': '50%',
        '3/4': '75%',

        '1/5': '20%',
        '2/5': '40%',
        '3/5': '60%',
        '4/5': '80%',

        '1/6': '16.66667%',
        '2/6': '33.33333%',
        '3/6': '50%',
        '4/6': '66.66667%',
        '5/6': '83.33333%',

        '1/12': '8.33333%',
        '2/12': '16.66667%',
        '3/12': '25%',
        '4/12': '33.33333%',
        '5/12': '41.66667%',
        '6/12': '50%',
        '7/12': '58.33333%',
        '8/12': '66.66667%',
        '9/12': '75%',
        '10/12': '83.33333%',
        '11/12': '91.66667%',
    }),

    margin: Object.assign(defaultConfig.margin, {
        '48': '12rem',
        '64': '16rem',
    }),

    negativeMargin: Object.assign(defaultConfig.negativeMargin, {
        '48': '12rem',
        '64': '16rem',
    }),

};
