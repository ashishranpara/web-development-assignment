@include('header')
<div class="container">
<div class="row">
    <div class="col-md-11"><h1>Items Management Page</h1></div>
</div>

<div class="row">
    <div class="col-md-3">
        <input type="text" class="form-control" name="item_name" id="item_name" value="" placeholder="Enter Item Name and Click Add">
        <div class="itemname_error"></div>
    </div>
    <div class="col-md-2">
        <button name="add_item" id="add_item">Add Item</button>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-4"><h3>Selected Items:</h3></div>
</div>
<div class="row">
    <div class="col-md-5">
        <select name="listitems" id="listitems" class="form-control" size="8">
            @foreach($items ?? '' as $item)
                @if($item->onlist=='0')
                <option value="{{$item->id}}" data-position="{{$item->id}}"><span>{{$item->item_name}}</span></option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="col-md-2" style="margin-top: 60px;">
        <button type="button" id="search_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
        <button type="button" id="search_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
    </div>
    <div class="col-md-5">
        <select name="selecteditems" id="selecteditems" class="form-control" size="8">
            @foreach($items ?? '' as $item)
                @if($item->onlist=='1')
                    <option value="{{$item->id}}" data-position="{{$item->id}}"><span>{{$item->item_name}}</span></option>
                @endif
            @endforeach
        </select>
    </div>
</div>
</div>

@include('footer')
