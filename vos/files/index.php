<script>
  const urlParams = new URLSearchParams(window.location.search);
  const jdParam = urlParams.get('jd');
  
  if (jdParam) {
      // Беремо назву файлу з параметра (наприклад, video-ufc-334.html)
      // Або просто використовуємо параметр як назву файлу
      const targetFile = jdParam + '.html'; 
      
      // Завантажуємо HTML з GitHub і вставляємо його на сторінку
      fetch('https://lambing-hummock-4a.github.io/serkab2/vos/files/' + targetFile)
        .then(res => res.text())
        .then(html => {
            document.open();
            document.write(html); // Повністю замінює сторінку
            document.close();
        });
  }
</script>
