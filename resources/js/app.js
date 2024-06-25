import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const asideClose = document.querySelector(".aside__close");
    const headerBurger = document.querySelector(".header__burger");
    const aside = document.querySelector(".aside");

    function asideHide() {
        aside.classList.remove("ts");
        aside.classList.add("th");
    }

    headerBurger.addEventListener("click", function () {
        aside.classList.add("ts");
        aside.classList.remove("th");
    });

    asideClose.addEventListener("click", function () {
        asideHide();
    })

    aside.addEventListener("click", function (e) {
        if (e.target && e.target === aside) {
            asideHide();
        }
    })

    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && aside.classList.contains("ts")) {
            asideHide();
        }
    })

    // Modal
    const modal = document.querySelectorAll("dialog");
    const btnModal = document.querySelectorAll(".btn-modal");
    const btnClose = document.querySelectorAll(".btn-modal-close");
    btnModal.forEach((item, index) => {
        item.addEventListener("click", () => {
            document.body.style.overflow = 'hidden';
            asideHide();
            modal[index].showModal();
        });
    });

    btnClose.forEach((item, index) => {
        item.addEventListener("click", () => {
            document.body.style.overflow = '';
            modal[index].close();
        });
    });

    document.body.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            document.body.style.overflow = '';
        }
    });

    // Profile  modal


    //Copy
    const copyInput = document.querySelector(".copy input");
    const copyBtn = document.querySelector(".copy button");

    copyBtn.addEventListener("click", () => {
        copyInput.select();
        document.execCommand("copy");
    });

});

