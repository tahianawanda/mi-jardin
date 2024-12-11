import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                background: {
                    100: "#d3d5cd",
                    200: "#a8ac9b",
                    300: "#7c8268",
                    400: "#515936",
                    500: "#252f04",
                    600: "#1e2603",
                    700: "#161c02",
                    800: "#0f1302",
                    900: "#070901",
                },
                primary: {
                    100: "#dbdcd0",
                    200: "#b7b9a1",
                    300: "#949773",
                    400: "#707444",
                    500: "#4c5115",
                    600: "#3d4111",
                    700: "#2e310d",
                    800: "#1e2008",
                    900: "#0f1004",
                },
                secondary: {
                    100: "#fbfbfa",
                    200: "#f7f7f5",
                    300: "#f2f2f0",
                    400: "#eeeeeb",
                    500: "#eaeae6",
                    600: "#bbbbb8",
                    700: "#8c8c8a",
                    800: "#5e5e5c",
                    900: "#2f2f2e",
                },
                accent: {
                    100: "#fdf6e7",
                    200: "#fceecf",
                    300: "#fae5b7",
                    400: "#f9dd9f",
                    500: "#f7d487",
                    600: "#c6aa6c",
                    700: "#947f51",
                    800: "#635536",
                    900: "#312a1b",
                },
                accentLight: {
                    100: "#fefaf1",
                    200: "#fdf5e2",
                    300: "#fcefd4",
                    400: "#fbeac5",
                    500: "#fae5b7",
                    600: "#c8b792",
                    700: "#96896e",
                    800: "#645c49",
                    900: "#322e25",
                },
            },
        },
    },

    plugins: [forms],
};
