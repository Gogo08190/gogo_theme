module.exports = {
  purge: {
    content: [
      './resources/views/**/**.blade.php',
      "./node_modules/flowbite/**/*.js"
    ],
    safelist:[
      'text_vert',
      'text-vert',
      'text-secondary',
      'text-tertiaire'
    ]
  }
    ,
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        background:{
          DEFAULT: '#212121'
        },
        primary:{
          DEFAULT: '#130C37'
        },
        secondary:{
          DEFAULT: '#03B27E'
        },
        tertiaire:{
          DEFAULT: '#D9EAFF'
        },
        vert:{
          DEFAULT: '#C2F24D'
        },
        discord:{
          DEFAULT: '#5865F2'
        },
        youtube:{
          DEFAULT: '#FF0000'
        },
        twitch:{
          DEFAULT: '#8205B4'
        },
        twitter:{
          DEFAULT: '#1DA1F2'
        },
        github:{
          DEFAULT: '#333'
        },
      },
      fontFamily: {
        montserrat: ["Montserrat", "sans-serif"],
        poppins: ["Poppins", "sans-serif"],
      },
      gridTemplateColumns: {
        '13': 'repeat(13, minmax(0, 1fr))',
        '14': 'repeat(14, minmax(0, 1fr))',
        '15': 'repeat(15, minmax(0, 1fr))',
        '16': 'repeat(16, minmax(0, 1fr))',
      }
    },

  },

  variants: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
