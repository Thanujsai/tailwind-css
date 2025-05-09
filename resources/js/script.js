const btn = document.getElementById('menu-btn');
const nav = document.getElementById('menu');

console.log(btn);
console.log(nav);
btn.addEventListener('click', () => {
  btn.classList.toggle('open');
  nav.classList.toggle('flex');
  nav.classList.toggle('hidden');
})