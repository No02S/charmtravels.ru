/** @type {import('next').NextConfig} */
const path = require('path');

module.exports = {
    // output: 'export',
    // assetPrefix: '/node/',
    sassOptions: {
        includePaths: [path.join(__dirname, 'styles')],
        prependData: `@import "./scss/common/vars.scss"; @import "./scss/common/static.scss";`
    }
}
