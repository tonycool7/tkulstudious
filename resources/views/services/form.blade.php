
<div class="form-group">
    <label  class="control-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{(isset($service)) ? $service->name : ""}}" placeholder="service name">
</div>
<div class="form-group">
    <label class="control-label">Description</label>
    <textarea name="description" placeholder="service name" class="form-control" style="width: 100%; height: 200pt; resize: none;">{{(isset($service)) ? $service->description : ""}}
    </textarea>
</div>

<div class="form-group">
    <label class="control-label">Question</label>
    <textarea name="question" placeholder="Question for clients" class="form-control" style="width: 100%; height: 200pt; resize: none;">{{(isset($service)) ? $service->question : ""}}
    </textarea>
</div>

<div class="form-group">
    <label class="control-label">Cost in Naira</label>
    <input type="text" name="cost_ng" class="form-control" value="{{(isset($service)) ? $service->cost_ng : ""}}" placeholder="service cost">
</div>

<div class="form-group">
    <label class="control-label">Cost in Dollars</label>
    <input type="text" name="cost_usd" class="form-control" value="{{(isset($service)) ? $service->cost_usd : ""}}" placeholder="service cost">
</div>

<div class="form-group">
    <label class="control-label">Cost in Rubles</label>
    <input type="text" name="cost_rub" class="form-control" value="{{(isset($service)) ? $service->cost_rub : ""}}" placeholder="service cost">
</div>

<div class="form-group">
    <label class="control-label">Duration</label>
    <input type="text" name="duration" class="form-control" value="{{(isset($service)) ? $service->duration : ""}}" placeholder="service duration">
</div>

<div class="form-group">
    <input type="submit" class="btn btn-dark" value="Create">
</div>
