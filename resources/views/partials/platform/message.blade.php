@if (Session::has('message'))
    <section class="item message col-xs-12">
        <div class="padding">
            <div>{{ Session::get('message') }}</div>
        </div>
    </section>
@endif
