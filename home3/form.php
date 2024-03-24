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
        <label class="input">
            <select name="lang[]" id="lang" multiple="multiple">
            <option value="Pascal">Pascal</option>
              <option value="C">C</option>
              <option value="C++">C++</option>
              <option value="JavaScript">JavaScript</option>
              <option value="PHP">PHP</option>
              <option value="Python">Python</option>
              <option value="Java">Java</option>
              <option value="Haskel">Haskel</option>
              <option value="Clojure">Clojure</option>
              <option value="Scala">Scala</option>
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
