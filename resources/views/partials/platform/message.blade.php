@if (Session::has('message'))
    <div class="item message row">
        <div class="padding">
            <div>{{ Session::get('message') }}</div>
        </div>
    </div>
@endif
