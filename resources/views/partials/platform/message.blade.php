@if (Session::has('message'))
    <div class="row">
        <div class="col-xs-12">
            <section class="item message col-xs-12">
                <div class="padding">
                    <div>{{ Session::get('message') }}</div>
                </div>
            </section>
        </div>
    </div>
@endif
