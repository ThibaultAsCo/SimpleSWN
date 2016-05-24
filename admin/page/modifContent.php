<?php var_dump($_POST); ?>
<form action="#" method="post" novalidate>
    <div class="form-group">
        <label for="input">Text</label>
        <input type="text" class="form-input" id="input" value="Title">
    </div>
    <div class="form-group">
        <label for="contents">Contents</label>
        <textarea name="text" class="summernote" id="contents" title="Contents"></textarea>
    </div>
    <button type="submit" class="btn btn-default">submit</button>
</form>