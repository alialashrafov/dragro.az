<div class="form-list-part">
    <h4>Addresses</h4>
    <div class="additional-block">
        <div class="row">
            <div class="col-sm-4">
                <p class="input-title">Country</p>
                <div class="input-group">
                    <input type="text" name="address[country]" @if($address) value="{{$address->country}}" @endif class="form-control input-border" placeholder="Enter county name" >
                </div>
            </div>
            <div class="col-sm-4">
                <p class="input-title">City</p>
                <div class="input-group">
                    <input type="text" name="address[city]" @if($address) value="{{$address->city}}" @endif class="form-control input-border" placeholder="Enter city name" >
                </div>
            </div>
            <div class="col-sm-4">
                <p class="input-title">Street</p>
                <div class="input-group">
                    <input type="text" name="address[street]" @if($address) value="{{$address->street}}" @endif  class="form-control input-border" placeholder="Enter street address" >
                </div>
            </div>
            <div class="col-sm-4">
                <p class="input-title">Phone</p>
                <div class="input-group">
                    <input type="number" name="address[phone]" @if($address) value="{{$address->phone}}" @endif class="form-control input-border" placeholder="Enter phone">
                </div>
            </div>
            <div class="col-sm-4">
                <p class="input-title">Email</p>
                <div class="input-group">
                    <input type="text" name="address[email]" @if($address) value="{{$address->email}}" @endif class="form-control input-border" placeholder="Enter email" >
                </div>
            </div>
        </div>
    </div>
</div>