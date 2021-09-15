{{--<p class="input-title">category</p>
<div class="input-group">
    <select class="selectpicker form-control rfq-category" name="category" disabled>
        <option value="0">Please add material code</option>
        @foreach($vendorCategories as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
</div>--}}
<table class="table">
    <thead>
    <tr>
        <th>Material code</th>
        <th>Product name</th>
        <th>Manufacturer</th>
        <th>Part number</th>
        <th>Pr number</th>
        <th class="th-quantity">Quantity</th>
    </tr>
    </thead>
    <tbody>
    <tr class="product-row" no="0">
        <td>
            <div class="input-group">
                <input type="text" name="product[0][material_code]" class="form-control input-border material-code" placeholder="Material code" >
            </div>
        </td>
        <td>
            <div class="input-group">
                <input type="text" name="product[0][name]" class="form-control input-border" placeholder="Product name" >
            </div>
        </td>
        <td>
            <div class="input-group">
                <input type="text" name="product[0][manufacturer]" class="form-control input-border" placeholder="Manufacturer name" >
            </div>
        </td>
        <td>
            <div class="input-group">
                <input type="text" name="product[0][part_number]" class="form-control input-border" placeholder="Part number" >
            </div>
        </td>
        <td>
            <div class="input-group">
                <input type="text" name="product[0][pr_number]" class="form-control input-border" placeholder="PR number" >
            </div>
        </td>
        <td>
            <div class="input-group half-right-radius">
                <input type="text" name="product[0][quantity]" class="form-control input-border" placeholder="Enter">
                <div class="input-group-btn">
                    <select name="product[0][uom]" class="selectpicker form-control category-list">
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