<footer class="footer">
    <div class="container">
        <ul class="footer__list">
            <li>
                <a href="mailto:test@mail.com">test@mail.com</a>
            </li>
            <li>
                <a href="">Политика конфиденциальности</a>
            </li>
            <li>
                <a href="">Пользовательское соглашение</a>
            </li>
            <li>
                <a href="">Часто задаваемые вопросы (FAQ)</a>
            </li>
        </ul>
        <p class="copyright">
            {{ date("Y") }} © {{ strtolower(config("app.name")) }} При использовании материалов сайта необходима ссылка на источник.
        </p>
    </div>
</footer>
