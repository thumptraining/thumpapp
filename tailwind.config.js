const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    theme: {
        fontFamily: {
          'title':['Bebas Neue'],
          'body':['Comfortaa'],
        },
    },

    plugins: [
        require('daisyui'),
    ],

    daisyui: {
        styled: true,
        themes: true,
        base: true,
        utils: true,
        logs: true,
        rtl: false,
    },

    daisyui: {
        themes: [
          {
            'srt': {                          /* your theme name */
               'primary' : '#FFBC06',           /* Primary color */
               'primary-focus' : '#F1B01E',     /* Primary color - focused */
               'primary-content' : '#ffffff',   /* Foreground content color to use on primary color */
    
               'secondary' : '#F11E83',         /* Secondary color */
               'secondary-focus' : '#FA005A',   /* Secondary color - focused */
               'secondary-content' : '#ffffff', /* Foreground content color to use on secondary color */
    
               'accent' : '#00B28C',            /* Accent color */
               'accent-focus' : '#388474',      /* Accent color - focused */
               'accent-content' : '#ffffff',    /* Foreground content color to use on accent color */
    
               'neutral' : '#171212',           /* Neutral color */
               'neutral-focus' : '#2a2e37',     /* Neutral color - focused */
               'neutral-content' : '#ffffff',   /* Foreground content color to use on neutral color */
    
               'base-100' : '#ffffff',          /* Base color of page, used for blank backgrounds */
               'base-200' : '#f9fafb',          /* Base color, a little darker */
               'base-300' : '#d1d5db',          /* Base color, even more darker */
               'base-content' : '#1f2937',      /* Foreground content color to use on base color */
    
               'info' : '#2094f3',              /* Info */
               'success' : '#009485',           /* Success */
               'warning' : '#ff9900',           /* Warning */
               'error' : '#ff5724',
               'purple' : '#6e35fc',             /* purple */
            },
          },
        ],
    },

};
