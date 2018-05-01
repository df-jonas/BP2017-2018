@if (Session::has('message'))
    <div class="item message col-xs-12">
        <div class="padding">
            <div>{{ Session::get('message') }}</div>
        </div>
    </div>
@endif
