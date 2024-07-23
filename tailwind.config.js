const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./**/*.php", "./src/**/*.js"],
  plugins: [require("@tailwindcss/typography"),
  require("@tailwindcss/aspect-ratio")],
  theme: {
    extend: {
      colors:{
        'custom-gray': '#E4E7E8',
      },
      fontFamily: {
        "sans": ["Inter", ...defaultTheme.fontFamily.sans]
      }
    }
  }
}
