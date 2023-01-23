const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        customForms: theme => ({
          default: {
            input: {
              borderRadius: theme('borderRadius.lg'),
              backgroundColor: theme('colors.gray.200'),
              '&:focus': {
                backgroundColor: theme('colors.white'),
              }
            },
            select: {
              borderRadius: theme('borderRadius.lg'),
              boxShadow: theme('boxShadow.default'),
            },
            checkbox: {
            borderRadius: theme('borderRadius.lg'),
              width: theme('spacing.6'),
              height: theme('spacing.6'),
            },
          },
        })
      },
      customForms: theme => ({
        default: {
          select: {
            iconColor: theme('colors.white'),
          },
          checkbox: {
            iconColor: theme('colors.indigo.700'),
          },
          radio: {
            iconColor: theme('colors.indigo.700'),
          },
        },
      }),
      plugins: [
        require('@tailwindcss/custom-forms'),
      ]
};




