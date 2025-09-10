/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            primary: '#c2410c',
            primaryHover: '#ea580c',
            secondary: '#1e40af',
            secondaryHover: '#2563eb',
            accent: '#059669',
            neutral: '#374151',
            light: '#f9fafb',
            dark: '#111827'
        }
    },
  },
  plugins: [],
}
