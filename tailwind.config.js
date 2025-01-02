/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        extend: {
            listStyleImage: {
                checkmarker: "url('/asset/svg/check.svg')",
            },
            colors: {
                primary: "#808080",
            },
        },
    },
    plugins: [],
};
