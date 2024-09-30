/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/views/livewire/**/*.blade.php",
        "./resources/js/**/*.vue", // se você estiver usando Vue
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
