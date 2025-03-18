/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class', 
  mode: 'jit',
  
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx,php}", // Fixed the file extensions
  ],
  theme: {
    extend: {
      colors: {
        amber: {
          50: '#FDF7EC', // Override Tailwind's default amber-50
        },
      },
    },
  },
  plugins: [],
};
