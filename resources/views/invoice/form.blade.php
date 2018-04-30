
<div class="form-group">
    <label  class="control-label">Client name</label>
    <input type="text" name="client_name" class="form-control" value="{{(isset($invoice)) ? $invoice->client_name : ""}}" placeholder="service name">
</div>
<div class="form-group">
    <label class="control-label">Address</label>
    <textarea name="address" placeholder="Client's address" class="form-control" style="width: 100%; height: 200pt; resize: none;">{{(isset($invoice)) ? $invoice->address : ""}}
    </textarea>
</div>

<div class="form-group">
    <label class="control-label">city</label>
    <input type="text" name="city" class="form-control" value="{{(isset($invoice)) ? $invoice->city : ""}}" placeholder="client's city">
</div>

<div class="form-group">
    <label class="control-label">Country</label>
    <input type="text" name="country" class="form-control" value="{{(isset($invoice)) ? $invoice->country : ""}}" placeholder="client's country">
</div>

<div class="form-group">
    <label class="control-label">Zip</label>
    <input type="text" name="zip" class="form-control" value="{{(isset($invoice)) ? $invoice->zip : ""}}" placeholder="client's zip code">
</div>

@foreach($services as $item)
    <div class="checkbox-div {{$item->name}}" v-on:click="checkCheckbox('.{{$item->name}}')">
        <p>{{$item->question}} <i class="fa fa-plus"></i></p>
        <input type="checkbox" value="{{$item->id}}" name="{{$item->name}}" style="visibility: hidden;">
    </div>
@endforeach

<div class="form-group">
    <input type="submit" class="btn btn-dark" value="Create">
</div>
