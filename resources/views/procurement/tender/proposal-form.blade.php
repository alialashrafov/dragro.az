<p class="input-title">Choose category</p>
<div class="input-group">
    <select class="selectpicker form-control" name="vendor_category_id">
        @foreach($vendorCategories as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
</div>
<table class="table">
    <thead>
    <tr>
        <th>Product description</th>
        <th class="th-quantity">Quantity</th>
    </tr>
    </thead>
    <tbody>
    <tr class="product-row" no="0">
        <td>
            <div class="input-group">
                <input type="text" name="product[0][description]" class="form-control input-border" placeholder="Enter product description" >
            </div>
        </td>
        <td>
            <div class="input-group half-right-radius">
                <input type="text" name="product[0][quantity]" class="form-control input-border" placeholder="Enter">
                <div class="input-group-btn">
                    <select name="product[0][uom]" class="selectpicker form-control">
                        <option value="unit">Unit</option>
                        <option value="kg">Kg</option>
                        <option value="litr">Litr</option>
                        <option value="pallet">Palet</option>
                        <option value="ton">Ton</option>
                    </select>
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>