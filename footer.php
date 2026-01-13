    </main>
    <footer class="bg-dark text-white mt-3 p-3 text-center">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Osvaldo Santos. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const themeSwitcher = document.getElementById('theme-switcher');
        const body = document.body;

        themeSwitcher.addEventListener('click', () => {
            body.classList.toggle('dark-theme');
            const isDarkMode = body.classList.contains('dark-theme');
            themeSwitcher.textContent = isDarkMode ? '☀️' : '🌙';
        });
    </script>
</body>
</html>
