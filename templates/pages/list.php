<div>
    <section>
        <div class="message">
            <?php
            if (!empty($params['error'])) {

                switch ($params['error']) {
                    case 'noteNotFound':
                        echo 'Notatka nie zostala utworzona!';
                        break;
                    case 'missingNoteId':
                        echo 'Niepoprawny identyfikator noitatki';
                        break;
                }
            }
            ?>
        </div>
        <div class="message">
            <?php
            if (!empty($params['before'])) {

                switch ($params['before']) {
                    case 'created':
                        echo 'Notatka zostala utworzona!';
                        break;
                }
            }
            ?>
        </div>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tytul</th>
                        <th>Data</th>
                        <th>Opcje</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php foreach ($params['notes'] ?? [] as $note) : ?>
                        <tr>
                            <td><?php echo (int)$note['id'] ?></td>
                            <td><?php echo htmlentities($note['title']) ?></td>
                            <td><?php echo $note['created'] ?></td>
                            <td><a href="/?action=show&id=<?php echo (int) $note['id'] ?>">Pokaz</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>