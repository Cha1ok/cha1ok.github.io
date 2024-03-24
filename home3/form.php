<form class="popup" action="" method="post">
        <label>
            <input type="text" name="name" class="input">
            <div class="label__text">
                Ваше имя
            </div>
        </label>
        <label>
            <input type="tel" name="number" class="input">
            <div class="label__text">
                Ваш телефон
            </div>
        </label>
        <label>
            <textarea name="biography" class="input"></textarea>
            <div class="label__text">
                биография
            </div>
        </label>
        <label>
            <input type="email" name="email" class="input">
            <div class="label__text">
                Ваша поча
            </div>
        </label>
        <label>
            <input type="date" name="data" class="input">
            <div class="'label__text">
                Ваша дата
            </div>
        </label>
        <label>
            <label><input type="radio"
                name="radio" value="m" />
                Мужской</label>
              <label><input type="radio"
                name="radio" value="f" />
                Женский</label>
            <div class="label__text">ваш пол</div>
        </label>
        <label>
            <select name="lang[]" id="lang" multiple="multiple">
                <option value="Значение1">Java</option>
                <option value="Значение2" selected="selected">C++</option>
                <option value="Значение3" selected="selected">HTML</option>
                <option value="Значение4" selected="selected">C</option>
                <option value="Значение5" selected="select">Js</option>
            </select>
            <div class="label__text">Любимый язык програмирования</div>
        </label>
        <label>
            <input type="checkbox"
            name="check_mark" id="oznakomlen" /> 
            <div class="label__text">
                Ознакомлен
            </div>
            </label>
        <button type="submit">Сохранить</button>
    </form>
