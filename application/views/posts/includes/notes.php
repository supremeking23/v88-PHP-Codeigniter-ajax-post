<?php foreach($notes as $note): ?>
    <div class="col-md-4 mt-4">
        <div class="note">
            <?= $note["description"];?>
        </div>
    </div>

<?php endforeach; ?>