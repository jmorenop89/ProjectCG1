<div class="sidebar" data-background-color="tk" data-active-color="danger">
    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->
    <div class="logo">
        <a href="" class="simple-text">
            TaxiMetro
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="" class="simple-text">
            TM
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="/assets/img/icon_tax.svg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    ADMIN
                </a>
            </div>
        </div>
        @include('admin.layout.nav')
    </div>
</div>
