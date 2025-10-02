<div class="offcanvas offcanvas-end" tabindex="-1" id="sideMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Меню</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <div class="auth-links">
            <a href="{{ route('login.create') }}" class="btn btn-login">
                <i class="fas fa-sign-in-alt me-2"></i>Вход
            </a>
            <a href="{{ route('register.create') }}" class="btn btn-register">
                <i class="fas fa-user-plus me-2"></i>Регистрация
            </a>
        </div>

        <div class="favorites-section">
            <h3>
                <i class="fas fa-star"></i>
                Избранные калькуляторы
            </h3>
            <div class="empty-favorites">
                <i class="fas fa-heart-broken fa-2x mb-2"></i>
                <p>В избранном нет калькуляторов.</p>
            </div>
        </div>
    </div>
</div>
