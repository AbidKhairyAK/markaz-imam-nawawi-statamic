import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.antlers.html',
        './resources/**/*.antlers.php',
        './resources/**/*.blade.php',
        './resources/**/*.vue',
        './content/**/*.md',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '1.5rem',
                lg: '2rem',
            },
        },

        extend: {
            fontFamily: {
                'sans': ['"Mulish"', ...defaultTheme.fontFamily.sans],
            },
        },
    },


    daisyui: {
        themes: [
            {
                light: {
                    ...require("daisyui/src/theming/themes")["light"],
                    'primary': '#369b3a',
                    'secondary': '#f1b622',
                    'secondary-content': '#004222'
                },
            },
        ],
    },


    plugins: [
        require('@tailwindcss/typography'),
        require('daisyui'),
    ],
};
