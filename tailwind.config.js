/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*/*.{html,js,php}"],
  darkMode: "class",
  theme: {
    container: {
      center: true,
      padding: "24px",
    },
    extend: {
      colors: {
        primary: "#074973",
        paragraph: "#6B7280",
        light: "#FFFFFF",
        black: "#0F172A",
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
};
