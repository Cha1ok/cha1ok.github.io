<form class="popup" action="" method="post">
        <label>
            <input type="text" name="name">
            <div class="label__text">
                Ваше имя
            </div>
        </label>
        <label>
            <input type="tel" name="tel">
            <div class="label__text">
                Ваш телефон
            </div>
        </label>
        <label>
            <textarea name="message"></textarea>
            <div class="label__text">
                Ваше сообщение
            </div>
        </label>
        <label>
            <input type="email" name="email">
            <div class="label__text">
                Ваша поча
            </div>
        </label>
        <label>
            <input type="text" name="organization">
            <div class="label__text">
                Ваша организация
            </div>
        </label>
        <label>
            <input type="date" name="data">
            <div class="'label__text">
                Ваша дата
            </div>
        </label>
        <label>
            <label><input type="radio" checked="checked"
                name="radio-group-1" value="Значение1" />
                Мужской</label>
              <label><input type="radio"
                name="radio-group-1" value="Значение2" />
                Женский</label>
            <div class="label__text">ваш пол</div>
        </label>
        <label>
            <select name="programm">
                <option value="Значение1">Java</option>
                <option value="Значение2" selected="selected">C++</option>
                <option value="Значение3" selected="selected">HTML</option>
                <option value="Значение4" selected="selected">C</option>
                <option value="Значение5" selected="select">Js</option>
            </select>
            <div class="label__text">Любимый язык програмирования</div>
        </label>
        <label>
            <input type="checkbox" required
            name="check-1" /> 
            <div class="label__text">
                Ознакомлен
            </div>
            </label>
        <button type="submit">Сохранить</button>
    </form>
