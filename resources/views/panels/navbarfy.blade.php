<nav class="primary-menu hidden-print" >
<style>
    .menu-link {
        font-size: 16px !important;
    }

</style>

    <ul class="menu-container">


        <li class="menu-item">
            <?php
{{--           $data = session()->get('locale');--}}
{{--            print_r($data)?> --}}
            ?>
            <a class="menu-link" href="{{ url('/about') }}"><div>{{ trans('message.EventList') }}</div></a>

        </li>



        <li class="menu-item">
            <a class="menu-link" href="{{ url('/productview/'.encrypt(1)) }}"><div>{{ trans('message.StudentServices') }}</div></a>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="{{ url('/productview/'.encrypt(2)) }}"><div>{{ trans('message.Orientation') }}</div></a>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="{{ url('/productview/'.encrypt(3)) }}"><div>{{ trans('message.SDAcademy') }}</div></a>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="{{ url('/productview/'.encrypt(3)) }}"><div>{{ trans('message.SDOneStopService') }}</div></a>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="{{ url('/productview/'.encrypt(3)) }}"><div>{{ trans('message.Game') }}</div></a>
        </li>


        <li class="menu-item">
            <a class="menu-link" href="{{ url('/productview/'.encrypt(3)) }}"><div>{{ trans('message.GameVideo') }}</div></a>
        </li>

        <li class="menu-item">
            <a class="menu-link" href="{{ url('/productview/'.encrypt(3)) }}"><div>{{ trans('message.Contact') }}</div></a>
        </li>



        <li class="menu-item">
            <a href="{{ URL::to('change/th') }}">TH</a>/
            <a href="{{ URL::to('change/en') }}">EN</a>
        </li>


    </ul>



</nav><!-- #primary-menu end -->
