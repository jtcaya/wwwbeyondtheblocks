<script>
    window.onload = () => {
        (() => {
            const includes = document.getElementsByTagName('include');
            [].forEach.call(includes, i => {
                let filePath = i.getAttribute('src');
                fetch(filePath).then(file => {
                    file.text().then(content => {
                        i.insertAdjacentHTML('afterend', content);
                        i.remove();
                    });
                });
            });
        })(); 
    }
</script>
<include src="<?=$view['urlbaseaddr'] ?>build/html/index.html">Loading...</include>