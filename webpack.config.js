const path = require('path');

module.exports = {
    entry: {
        './src/tpl/_build/loginV1': './src/tpl/login/loginV1.ts'
    },
    cache: true,
    module: {
        rules: [
            {
                test: /\.tsx?$/,
                use: [
                    {
                        loader: 'esbuild-loader',
                        options: {
                            loader: "ts",
                        }
                    }
                ],
                exclude: [

                    path.resolve(__dirname, "node_modules"),
                ]
            },
            {
                enforce: 'pre',
                test: /\.html$/,
                loader: 'raw-loader',
            },
            {
                test: /\.(scss|css)$/,
                use: [
                    'style-loader', 'css-loader', 'sass-loader'],

                exclude: path.resolve(__dirname, "./node_modules"),
            },


        ],
    },
    resolve: {
        extensions: ['.tsx', '.ts', '.js'],
    },
    devtool: 'source-map',
    //mode: "development",
    mode: "production",

    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, "./"),
    },
};
