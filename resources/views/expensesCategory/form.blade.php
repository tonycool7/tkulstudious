
<div class="form-group">
    <label  class="control-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{(isset($expensesCategory)) ? $expensesCategory->name : ""}}" placeholder="category name" required>
</div>
<div class="form-group">
    <label class="control-label">Description</label>
    <textarea name="description" placeholder="Category decription" class="form-control" style="width: 100%; height: 200pt; resize: none;" required>{{(isset($expensesCategory)) ? $expensesCategory->description : ""}}
    </textarea>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-dark" value="Create">
</div>
