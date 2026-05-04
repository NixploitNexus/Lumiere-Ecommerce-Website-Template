// Lumière — interactions
(() => {
  // Mobile drawer
  const drawer = document.getElementById('drawer');
  document.getElementById('menuOpen')?.addEventListener('click', () => drawer.classList.add('open'));
  document.getElementById('menuClose')?.addEventListener('click', () => drawer.classList.remove('open'));
  drawer?.addEventListener('click', e => { if (e.target === drawer) drawer.classList.remove('open'); });

  // Reveal on scroll
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => io.observe(el));

  // Size buttons
  document.querySelectorAll('.size-opts').forEach(group => {
    group.addEventListener('click', e => {
      if (e.target.tagName === 'BUTTON') {
        group.querySelectorAll('button').forEach(b => b.classList.remove('active'));
        e.target.classList.add('active');
      }
    });
  });

  // Color swatches
  document.querySelectorAll('.color-opts').forEach(group => {
    group.addEventListener('click', e => {
      if (e.target.tagName === 'SPAN') {
        group.querySelectorAll('span').forEach(s => s.classList.remove('active'));
        e.target.classList.add('active');
      }
    });
  });
})();
