/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/views/**/*.{js,ts,jsx,tsx}",
      "./resources/js/**/*.{js,ts,jsx,tsx}",
      "./resources/css/**/*.{js,ts,jsx,tsx}",
      "./resources/sass/**/*.{js,ts,jsx,tsx}",
      "./resources/tailwind.css",
      "./Components/**/*.{js,ts,jsx,tsx}",
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }