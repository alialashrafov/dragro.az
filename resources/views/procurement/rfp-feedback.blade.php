<table class="table products-table">
    <thead>
    <tr>
        <th>Description</th>
        <th class="th-quantity">Quantity</th>
        <th>Manufacturer name</th>
        <th>Part number</th>
        <th class="th-price">Price</th>
        <th>Delivery Date</th>
        <th style="max-width: 100px;">Image</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tenderProducts as $key=>$product)
        <?php $price = 0; $delivery_days = '' ?>
        @if(isset($answers[$product->id]))
            <?php
            $price = $answers[$product->id]->price;
            $delivery_days = $answers[$product->id]->delivery_days;
            ?>
        @endif
    <tr>
        <td>{{$product->description}}</td>
        <td>{{$product->quantity}}</td>
        <td>
            <div class="input-group">
                <input type="hidden" name="product[{{$key}}][tender_product_id]" value="{{$product->id}}" />
                <input type="text" name="product[{{$key}}][manufacturer]" class="form-control input-border" placeholder=" Add manufacturer name" >
            </div>
        </td>
        <td>
            <div class="input-group">
                <input type="text" name="product[{{$key}}][part_number]"  class="form-control input-border" placeholder=" Add part number" >
            </div>
        </td>
        <td>
            <div class="input-group">
                <input type="text" name="product[{{$key}}][price]" class="form-control input-border" placeholder=" Add Price" >
            </div>
        </td>
        <td>
            <div class="input-group">
                <input type="text"  name="product[{{$key}}][delivery_days] placeholder="mm.dd.yyyy" class="form-control input-border" id='datetimepicker1'>
                <span class="calendar">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15.556" viewBox="0 0 14 15.556">
                                                                        <path id="calendar-range-outline" fill="#3f4254" d="M6.111 9.778h1.556v1.556H6.111V9.778M17 5.111V16a1.556 1.556 0 0 1-1.556 1.556H4.556A1.555 1.555 0 0 1 3 16V5.111a1.556 1.556 0 0 1 1.556-1.555h.778V2h1.555v1.556h6.222V2h1.556v1.556h.778A1.556 1.556 0 0 1 17 5.111M4.556 6.667h10.888V5.111H4.556v1.556M15.444 16V8.222H4.556V16h10.888m-3.111-4.667h1.556V9.778h-1.556v1.556m-3.111 0h1.556V9.778H9.222z" transform="translate(-3 -2)"/>
                                                                    </svg>
                                                                </span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input type="file" name="product[{{$key}}][iamge]" class="form-control input-border" >
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>