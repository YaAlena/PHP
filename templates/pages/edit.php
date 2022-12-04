<h3>Edycja notatki</h3>
<div>
    <?php if (!empty($params['note'])) : ?>
        <?php dump($params);
        $note = $params['note'] ?>
        <form action="/?action=edit" class="note-form" method="post">
            <input type="text" name="id" value="<?php echo $note['id'] ?>" />
            <ul>
                <li>
                    <label for="title">Tytul <span class="required">*</span></label>
                    <input value="<?php echo $note['title'] ?>" type="text" name="title" id="title" class="filed-long">
                </li>
                <li>
                    <label for="field5">Tresc</label>
                    <textarea name="description" id="field5" class="field-long field-textarea"><?php echo $note['description'] ?></textarea>
                </li>
                <li>
                    <input type="submit" value=Submit">
                </li>
            </ul>
        </form>
    <?php else : ?>
        <div>
            Brak danych do wyswietlenia
            <a href="/"><button>Powrot do listy notatek</button></a>
        </div>
    <?php endif; ?>
</div>