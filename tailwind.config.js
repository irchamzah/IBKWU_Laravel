/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    darkMode: "class",
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#0093d3",
                // primary: "#0F4C75",
                secondary: "#64748b",
                secondary2: "#EBE079",
                dark: "#131313",
                // dark: "#212121",
                dark2: "#424242",
                dark3: "#616161",
            },
            fontFamily: {
                poppins: ['"Poppins"', "sans-serif"],
                opensans: ['"Open Sans"', "sans-serif"],
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
    plugins: [require("tw-elements/dist/plugin")],
};
