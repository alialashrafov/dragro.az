<div class="block-list flex-wrap association-contact">
    <form action="/{{$lang}}/association/contact/{{$association->id}}" method="post" class="m-0">
        <div class="form-list block-shadow">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <label for="name">
                            <span class="input-title">@lang('vendor.name')</span>
                            <input type="text" name="name" class="form-control" id="name">
                        </label>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <label for="surname">
                            <span class="input-title">@lang('vendor.surname')</span>
                            <input type="text" name="surname" class="form-control" id="surname">
                        </label>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <label for="email">
                            <span class="input-title">@lang('vendor.email')</span>
                            <input type="text" name="email" class="form-control" id="email">
                            <p class="validation">test</p>
                        </label>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <label for="phone">
                            <span class="input-title">@lang('vendor.phone')</span>
                            <input type="text" name="phone" class="form-control" id="phone">
                            <p class="validation">test</p>
                        </label>
                    </div>
                    <div class="col-xs-12">
                        <label for="message">
                            <span class="input-title">@lang('vendor.message')</span>
                            <textarea name="message" class="form-control" id="message"></textarea>
                        </label>
                    </div>
                </div>
                {!! csrf_field() !!}
                <div class="flex-center">
                    <button type="submit" class="btn-effect flex-center">@lang('vendor.send')</button>
                </div>
            </div>
    </form>
</div>

