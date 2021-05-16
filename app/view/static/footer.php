<footer class="footer">
        <span>
            Created By
            <a href="<?=settings('developer')?>"> Fərman Allahverdiyev </a> |
            &copy; <?=date('Y')?>
        </span>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/c37a2e96a6.js" crossorigin="anonymous"></script>
    <script src="<?=public_url('js/main.js')?>"></script>
    <?php if(isset($js)): ?>
    <script src="<?=public_url('js/' . $js . '.js')?>"></script>
    <?php endif; ?>
</body>

</html>