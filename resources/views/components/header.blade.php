<header class="header">
    <div class="container">
    <div class="header__wrap">
        <div class="header-logo">
            <a href="{{ route('home') }}">
                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#fff" d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM96 64H288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32zm32 160a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM96 352a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM64 416c0-17.7 14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM192 256a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm64-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM288 448a32 32 0 1 1 0-64 32 32 0 1 1 0 64z"/></svg>
            </a>
        </div>
        <div class="header__nav">
            <button class="header__burger">
                <svg width="64" height="64" viewBox="0 0 32 32">
                    <path fill="#fff" d="M5.333 22.667h21.333v-2.667h-21.333v2.667zM5.333 17.333h21.333v-2.667h-21.333v2.667zM5.333 9.333v2.667h21.333v-2.667h-21.333z"></path>
                </svg>
            </button>
        </div>
    </div>
    </div>
    <x-header.aside/>
</header>
