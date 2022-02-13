module.exports = {
    mode: 'jit',
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            backgroundImage: {
                'hero': "url('/images/hero.png')",
            },
            fontFamily: {
                Poppins: "'Poppins', 'sans-serif'",
            },
        },
        screens: {
            'phones': '300px',
            'phone': '407px',
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1280px',
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
