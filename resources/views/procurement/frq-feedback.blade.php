<table class="table products-table">
    <thead>
    <tr>
        <th>Material code</th>
        <th>Product name</th>
        <th>Manufacturer name</th>
        <th>Part number</th>
        <th class="th-quantity">Quantity</th>
        <th class="th-price">Price</th>
        <th class="th-price">Delivery in days </th>
        <th class="th-price">Your rank </th>
    </tr>
    </thead>
    <tbody>
    @foreach($tenderProducts as $key=>$product)
        <?php $price = 0; $delivery_days = ''; $rank = 0; ?>
        @if(isset($answers[$product->id]))
            <?php
            $price = $answers[$product->id]->price;
            $rank = $answers[$product->id]->ranking;
            $delivery_days = $answers[$product->id]->delivery_days;
            ?>
        @endif
        <tr>
            <td>
                <input type="hidden" name="product[{{$key}}][tender_product_id]" value="{{$product->id}}" />
                {{$product->material_code}}
                <input type="hidden" name="product[{{$key}}][material_code]" value="{{$product->material_code}}" />
            </td>
            <td>
                {{$product->name}}
                <input type="hidden" name="product[{{$key}}][product_name]" value="{{$product->name}}" />
            </td>
            <td>
                {{$product->manufacturer}}
                <input type="hidden" name="product[{{$key}}][manufacturer]" value="{{$product->manufacturer}}" />
            </td>
            <td>
                {{$product->part_number}}
                <input type="hidden" name="product[{{$key}}][part_number]" value="{{$product->part_number}}" />
            </td>
            <td>
                {{$product->quantity}} {{$product->uom}}
                @if(isset($answers[$product->id]))
                    <input type="hidden" name="id" value="{{$answers[$product->id]->id}}" />
                @endif
            </td>
            <td>
                <div class="input-group">
                    <input type="number" name="product[{{$key}}][price]" value="{{$price}}" class="form-control input-border" placeholder=" Add Price" >
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input type="number"  name="product[{{$key}}][delivery_days]" value="{{$delivery_days}}" placeholder="Enter a day" class="form-control input-border">
                    <span class="calendar">
                                                                </span>
                </div>
            </td>
            <td>{{$rank}}</td>
        </tr>
    @endforeach
    </tbody>
</table>