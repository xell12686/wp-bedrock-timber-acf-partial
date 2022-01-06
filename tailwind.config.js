module.exports = {
    mode: 'jit',
    purge: [
        './web/app/themes/muratechnology/**/*.php',
        './web/app/themes/muratechnology/**/*.twig',
        './web/app/themes/muratechnology/**/*.js',
    ],
    darkMode: false,
    // or 'media' or 'class'
    theme: {
        extend: {
            screens: {
              'lowheight': {
                'raw': '(max-height: 860px)'
              },
              'sm': '640px',
              // => @media (min-width: 640px) { ... }
        
              'md': '768px',
              // => @media (min-width: 768px) { ... }
        
              '2md': '921px',
              // => @media (min-width: 1024px) { ... }

              'lg': '1024px',
              // => @media (min-width: 1024px) { ... }
        
              'xl': '1280px',
              // => @media (min-width: 1280px) { ... }
        
              '2xl': '1536px',
              // => @media (min-width: 1536px) { ... }
            },
            fontSize: {
                '6xl': ['60px', '60px'],
                '7xl': ['70px', '70px'],
                '12xl': ['120px', '120px'],
                '13xl': ['130px', '130px'],
                '15xl': ['150px', '150px'],
            },
            colors: {
                'brand-black': {
                    DEFAULT: '#111111',
                },
                'brand-grey': {
                    light: '#F5F5F5',
                    DEFAULT: '#DDDDDD',
                    dark: '#707070',
                    darkest: '#777777'
                },
                'brand-yellow': {
                    light: '#f2e500',
                    DEFAULT: '#F2E500',
                    dark: '#CC9933',
                },
                'brand-brown': {
                    light: '#262525',
                    DEFAULT: '#262525',
                    dark: '#262525',
                    darkest: '#262525',
                },
                'brand-orange': {
                    light: '#CC9933',
                    DEFAULT: '#F8AB16',
                    dark: '#F8AB16'
                }
            },
            borderWidth: {
                '6' : '6px'
            }
        },
        fontFamily: {
            'sans': ['Montserrat', 'sans-serif']
        }
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
    ],
}
