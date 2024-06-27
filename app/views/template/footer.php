</body>
<script>
    window.addEventListener('beforeunload', function(event) {
        localStorage.setItem('scrollPosition', window.scrollY);
    });


    window.addEventListener('DOMContentLoaded', function(event) {
        var scrollPosition = localStorage.getItem('scrollPosition');

        // Atur ulang posisi scroll jika ada nilai yang disimpan dalam local storage
        if (scrollPosition !== null) {
            window.scrollTo(0, parseInt(scrollPosition));
            localStorage.removeItem('scrollPosition'); // Hapus nilai dari local storage setelah digunakan
        }
    });
</script>

</html>