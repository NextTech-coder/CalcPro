
class Widget {
    constructor() {
        this.#style();
    }
    static  render(classes) {
        switch (classes) {
            case "Brok":
                return new Brok();
            default:
                throw new Error(`Нет такого калькулятора ${classes}`)
        }
    }

    #style() {
        const style = document.createElement("style");
        style.textContent = `
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            .hide-w {
                display: none !important;
            }
            .show-w {
                display: flex !important;
            }
            .show-active {
                display: block !important;
            }

            input[type=number] {
                -moz-appearance:textfield;
            }

            .calculator {
                padding: var(--fs-30);
            }

            .calculator__container {
                max-width: 400px;
            }

            .calculator__form {
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 10px;
            }

            .calculator__form label {
                display: flex;
                flex-direction: column;
                font-weight: 700;
                gap: 8px;
            }

            .calculator__form label input {
                padding: 10px;
                border-radius: 12px;
                outline: none;
                border: 1px solid #4a5568;
            }

            .calculator__form label select {
                padding: 10px;
                border-radius: 12px;
                outline: none;
                border: 1px solid #4a5568;
                background-color: inherit;
            }

            .calculator__form button.submit {
                width: 100%;
                max-width: 300px;
                padding: 10px;
                border-radius: 12px;
                background-color: #4361ee;
                color: #fff;
                font-weight: 700;
                margin: 0 auto;
                transition: all 0.4s ease;
                text-transform: uppercase;
            }
            .calculator__form div.time {
                width: 32px;
                height: 32px;
                cursor: pointer;
            }
            .calculator__form button:hover {
                background-color: rgba(67, 97, 238, 0.4);
            }

            .calculator__form label input:focus, .calculator__form label select:focus {
                border: 1px solid #6930c3;
            }

            select[name="decimals"] {
                width: 100px;
            }

           .calculator__form-wrap {
               display: flex;
                gap: 20px;
                align-items: center;
           }

            .calculator__form-wrap input {
               width: 100px;
           }

           .calculator__result {
            display: none;
            border-top: 2px solid silver;
            border-bottom: 2px solid silver;
            }
            .calculator__result p {
                white-space: nowrap;
            }

            .calculator__result img {
                display: block;
                margin: 0 auto;
            }

            .button__wrap {
                display: flex;
                align-items: center;
            }

            .dropdown {
                width: 32px;
                height: 32px;
                cursor: pointer;
            }

            .dropdown__item {
            position: absolute;
            inset: auto auto 30px 30px;
            display: flex;
            flex-direction: column;
            gap: 5px;
            border: 1px solid silver;
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #fff;
        }

        .dropdown__item li a {
            display: block;
            color: var(--color-text);
            white-space: nowrap;
            padding-top: 10px;
            padding-bottom: 10px;

        }
        .dropdown__item li {
            padding-left: 21px;
            padding-right: 21px;
            position: relative;
        }

        .dropdown__item li:hover {
            background-color: rgba(33, 37, 41, 0.1);
        }
        .dropdown__item li:hover:before {
            content: ""; /* Добавляемый контент */
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 2px;
            background-color: #fb8500;
        }

        .button__wrap > div {
            position: relative;
        }
        `;

        document.head.appendChild(style);
    }
}

class Brok extends Widget{
    #parent;
    #form;
    #calcResult;
    #object;
    constructor() {
        super();
        this.#parent = document.querySelector(".calculator__container");
        this.#renderForm()
            .then(() => {
                this.#form =  document.querySelector(".calculator__form");
                this.#calcResult = document.querySelector(".calculator__result");
                if (document.getElementById("resCalcul").value !== "") {
                    const jsonRes = JSON.parse(document.getElementById("resCalcul").value);
                    const height = document.getElementById('height');
                    const gender = document.querySelector("select[name='gender']");
                    const optionGender = gender.querySelector(`option[value='${jsonRes.form.gender}']`)
                    const age = document.querySelector("select[name='age']");
                    const optionAge = age.querySelector(`option[value='${jsonRes.form.age}']`)
                    const wrist = document.getElementById('wrist');
                    height.value = jsonRes.form.height;
                    optionGender.selected = true;
                    optionAge.selected = true;
                    wrist.value = jsonRes.form.wrist;
                    console.log(jsonRes.form);
                    this.#calcul(jsonRes, false);
                }
            } )
            .then(() =>this.#show() );

        window.addEventListener('beforeunload', function (event) {

            window.location.href = "https://www.example.com";

        });

        if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
            const url = JSON.parse(localStorage.getItem("history_brok")).pop();
           window.location = `http://calcus.loc/calculator-vesa/${url.url}`;
        } else {
            console.info( "This page is not reloaded");
        }

    }

    #calcul(object, flag) {
        const {height, gender, age, wrist} = object.form ? object.form : object;

        console.log(height);
        let resGender;
        let resPercent;
        let resHeight;
        let resIndex;
        switch (gender) {
            case "м":
                resGender = 100;
                break;
            case "ж":
                resGender = 110;
                break;
            default:
                console.log("Чо мутишь?");
                break;
        }

        switch (+age) {
            case 1:
                resPercent = 0.89;
                break;
            case 2:
                resPercent = 1;
                break;
            case 3:
                resPercent = 1.06;
                break;
            default:
                console.log("Чо мутишь?");
                break;
        }

        if (height < 165) {
            resHeight =  height - 100;
        } else if (height >= 165 && height < 175) {
            resHeight = height - 105;
        } else {
            resHeight = height - 110;
        }

        let result= resHeight * resPercent;

        if ((gender === "м" && wrist >= 21) || (gender === "ж" && wrist >= 18) ) {
            result *= 1.1;
            resIndex = "Эндоморфный (Гиперстенический)";
        }

        if ((gender === "м" && (wrist >= 18 && wrist <= 20 )) || (gender === "ж" && (wrist >= 15 && wrist <= 17))) {
            result *= 1;
            resIndex = "Мезоморфный (Нормостенический)";
        }

        if ((gender === "м" && wrist <= 17) || (gender === "ж" && wrist <= 14) ) {
            result *= 0.9;
            resIndex = "Эктоморфный (Астенический)";
        }

        let resultData = {
            form: this.#object,
            result: Math.round(result),
            resIndex
        }

        this.#getResult(resultData, flag);
    }
    #show() {
        this.#form.addEventListener("submit",  (e) => {
            e.preventDefault();

            const formdata = new FormData(this.#form);
            this.#object = {};

            formdata.forEach((value, key) => {
                this.#object[key] = value;
            })

            this.#calcul(this.#object, true);
        });
    }

    async #renderForm() {
        const div = document.createElement("div");
        div.innerHTML = `
                    <form class="calculator__form" method="POST">
                    <label for="height">
                        Рост (сантиметры)
                        <input type="number" id="height" name="height" value="" required>
                    </label>
                    <label for="gender">
                        Пол
                        <select name="gender" required>
                            <option value="м">Мужчина</option>
                            <option value="ж">Женщина</option>
                        </select>
                    </label>
                    <label for="age">
                        Возраст
                        <select name="age" required>
                            <option value="1" selected>20-30 лет</option>
                            <option value="2">30-50 лет</option>
                            <option value="3">Старше 50 лет</option>
                        </select>
                    </label>
                    <label for="wrist">
                        Обхват запястья
                        <input type="number" name="wrist" id="wrist" value="" required>
                    </label>
                    <div class="calculator__result"></div>
                 <div class="button__wrap">
                    <button class="submit" type="submit">Рассчитать</button>
                    <div>
                        <div class="dropdown">
                         <svg viewBox="0 0 32 32" ><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M16,29A13,13,0,1,1,29,16,13,13,0,0,1,16,29ZM16,5A11,11,0,1,0,27,16,11,11,0,0,0,16,5Z"/><path d="M21.5,22.5a1,1,0,0,1-.71-.29l-5.5-5.5A1,1,0,0,1,15,16V8a1,1,0,0,1,2,0v7.59l5.21,5.2a1,1,0,0,1,0,1.42A1,1,0,0,1,21.5,22.5Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg>
                        </div>
                        <ul class="dropdown__item hide-w"></ul>
                    </div>
                    </div>
                </form>
        `;

        this.#parent.append(div);

        this.#renderHistory();
        const dropdownItem = document.querySelector(".dropdown__item");
        const dropdown = document.querySelector(".dropdown");
        const calcBlock = document.querySelector(".calculator__block");
        dropdown.addEventListener("click", function (e) {
            dropdownItem.classList.toggle("hide-w");
        })
    }

    #renderHistory() {
        const dropdownItem = document.querySelector(".dropdown__item");
        const item = JSON.parse(localStorage.getItem("history_brok"));
        function zero(num) {
            return num < 10 ? `0${num}`:num;
        }


        item?.forEach(item => {
            const li = document.createElement("li");
            const day = new Date(item.data);
            li.innerHTML = `
                 <a href="/calculator-vesa/${item.url}">${zero(day.getDate())}-${zero(day.getMonth() + 1)}-${day.getFullYear()}</a>
              `;
            dropdownItem.append(li);
        });
    }

    #getResult(resultData, flag) {
        const div = document.createElement("div");
        this.#calcResult.classList.add("show-active");
        this.#calcResult.innerHTML = "<img src='images/spinner.svg'></img>";
        setTimeout(() => {
            this.#calcResult.innerHTML = "";
            div.innerHTML = `
           <p>Ваш тип телосложения: <b>${resultData.resIndex}</b></p>
           <p>Ваш идеальный вес: <b>${resultData.result}</b>  кг.</p>
        `;
            this.#calcResult.append(div);
        }, 500);

        if (flag) {
            axios.post("/calculator-url", {
                headers: {
                    "Content-type": "application/json"
                },
                data: JSON.stringify(resultData)
            })
                .then(response => {
                    let existingData = localStorage.getItem("history_brok");
                    let parseData = existingData ? JSON.parse(existingData) : [];

                    if (parseData.length >= 10) {
                        parseData.splice(-1, 1);
                    }

                    const newItem = {
                        name: "Brok",
                        url: response.data.url,
                        data: Date.now()
                    };
                    parseData.push(newItem);

                    localStorage.setItem("history_brok", JSON.stringify(parseData));
                    const dropdownItem = document.querySelector(".dropdown__item");
                    dropdownItem.innerHTML = "";
                    this.#renderHistory();

                })
        }
    }
}

class Percent extends Widget {
    render() {
        const parent = document.querySelector(".calculator__container");
        const div = document.createElement("div");
        div.innerHTML = `
                    <form class="calculator__form" method="POST">
                    <label for="operation">
                        Что вычисляем
                        <select name="operation" required>
                            <option value="1" data-placeholder1="процент" data-placeholder2="числа" data-description="от" selected>Найти процент от числа</option>
                            <option value="2" data-placeholder1="число 1" data-placeholder2="число 2" data-description="от">Сколько процентов составляет число от числа</option>
                            <option value="3" data-placeholder1="число" data-placeholder2="процент" data-description="+">Прибавить процент к числу</option>
                            <option value="3" data-placeholder1="число" data-placeholder2="процент" data-description="-">Вычесть процент из числа</option>
                            <option value="4" data-placeholder1="число1" data-placeholder2="число 2" data-description=">">На сколько процентов одно число больше другого</option>
                            <option value="4" data-placeholder1="число1" data-placeholder2="число 2" data-description="<">На сколько процентов одно число меньше другого</option>
                            <option value="3" data-placeholder1="число" data-placeholder2="процент" data-description="составляет">Найти 100 процентов</option>
                        </select>
                    </label>

                    <label for="meaning">
                        Значения
                        <div class="calculator__form-wrap">
                        <input type="number" name="meaning_one" id="meaning_one" required placeholder="процент">
                            <p id="meaning_text">от</p>
                        <input type="number" name="meaning_two" id="meaning_two" required placeholder="числа">
                         </div>
                    </label>

                    <label for="decimals">
                        Округлять до n числа после запятой
                        <select name="decimals" required>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                 <option value="10">10</option>
                        </select>
                    </label>
                    <button type="submit">Рассчитать</button>
                </form>
        `;

        parent.append(div);

        const operation = document.querySelector("select[name='operation']");
        const decimals = document.querySelector("select[name='decimals']")
        const meaningOne = document.getElementById("meaning_one");
        const meaningTwo = document.getElementById("meaning_two");
        const meaningText = document.getElementById("meaning_text");
        const form = document.querySelector(".calculator__form");

        const obj = {
            operation: 1,
            decimals: 2,
            meaningOne: null,
            meaningTwo: null
        }

        meaningOne.addEventListener("input", function (e) {
            obj.meaningOne = Number(e.target.value);
        });

        meaningTwo.addEventListener("input", function (e) {
            obj.meaningTwo = Number(e.target.value);
        });

        operation.addEventListener("change", function (e) {
            const selectIndex = e.target.options[e.target.selectedIndex];
            meaningText.textContent = selectIndex.dataset.description;
            meaningOne.placeholder = selectIndex.dataset.placeholder1;
            meaningTwo.placeholder = selectIndex.dataset.placeholder2;
            obj.operation = Number(selectIndex.value);
        });

        decimals.addEventListener("change", function (e) {
            const selectIndex = e.target.options[e.target.selectedIndex];
            obj.decimals = Number(selectIndex.value);
        });

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            console.log(obj);

        });

    }
}

export {Widget};
