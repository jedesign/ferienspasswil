const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './app/**/*.php',
        './resources/**/*.{html,js,php}',
    ],
    darkMode: false,
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                teal: colors.teal,
                yellow: colors.yellow
            }
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        function({addBase, theme}) {
            if (process.env.NODE_ENV === "production") return

            const screens = theme('screens', {})
            const breakpoints = Object.keys(screens)

            addBase({
                'body::after': {
                    content: `"xs"`,
                    position: 'fixed',
                    right: '.5rem',
                    bottom: '.5rem',
                    padding: '.5rem',
                    background: '#eee',
                    border: '1px solid',
                    borderColor: '#ddd',
                    color: '#e50478',
                    fontSize: '1rem',
                    fontWeight: '600',
                    zIndex: '99999',
                },
                ...breakpoints.reduce((acc, current) => {
                    acc[`@media (min-width: ${screens[current]})`] = {
                        'body::after': {
                            content: `"${current}"`
                        }
                    }
                    return acc
                }, {})
            })
        }
    ],
};
