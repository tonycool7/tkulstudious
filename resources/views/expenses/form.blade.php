<div class="form-group">
    <label  class="control-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{(isset($expenses)) ? $expenses->name : ""}}" placeholder="Expense name" required>
</div>

<div class="form-group">
    <label  class="control-label">Category</label>
    <select name="category_id" class="form-control" required>
    @foreach($expensesCategories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
    </select>
</div>

<div class="form-group">
    <label class="control-label">Cost</label>
    <input type="text" name="cost" class="form-control" value="{{(isset($expenses)) ? $expenses->cost : ""}}" placeholder="Expense cost" required>
</div>

<div class="form-group">
    <label class="control-label">Unit</label>
    <input type="text" name="unit" class="form-control" value="{{(isset($expenses)) ? $expenses->unit : ""}}" placeholder="Unit of measurement">
</div>

<div class="form-group">
    <label class="control-label">Quantity</label>
    <input type="number" name="qty" class="form-control" value="{{(isset($expenses)) ? $expenses->qty : ""}}" placeholder="Quantity">
</div>

<div class="form-group">
    <input type="submit" class="btn btn-dark" value="Create">
</div>
