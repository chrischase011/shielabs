/** @type {import('tailwindcss').Config} */
export default {
  presets: [
    require('./vendor/wireui/wireui/tailwind.config.js')
  ],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './app/**/*.php',
    './resources/**/*.html',
    './resources/**/*.js',
    './resources/**/*.jsx',
    './resources/**/*.ts',
    './resources/**/*.tsx',
    './resources/**/*.php',
    './resources/**/*.vue',
    './resources/**/*.twig',
    './vendor/wireui/wireui/resources/**/*.blade.php',
    './vendor/wireui/wireui/ts/**/*.ts',
    './vendor/wireui/wireui/src/View/**/*.php'
  ],
  theme: {
    extend: {},
    screens: {
      '2xs': '360px',
      'xs': '375px',
      'sm': '576px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

