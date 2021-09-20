@extends('layouts.master')
@section('content')

    @if(isset($page))

        @include('partials.boxes', ['competences' => $page->competences])

        @include('partials.services', ['services' => $page->services])

        @include('partials.team', ['teams' => $page->teams])

        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="dt-sc-title with-two-border aligncenter">
                        <h2>Nos partenaires</h2>
                    </div>
                    <div class="wpb_text_column wpb_content_element  vc_custom_1476695778051">
                        <div class="wpb_wrapper">
                            <p style="text-align: center;">

                            </p>
                        </div>
                    </div>
                    <div class="slider-clients">
                        <div><img src="https://2kshsc4aimaz13nsj91wgxce-wpengine.netdna-ssl.com/wp-content/uploads/2016/08/c6.jpg" alt=""  width="119" height="108"></div>
                        <div><img src="https://2kshsc4aimaz13nsj91wgxce-wpengine.netdna-ssl.com/wp-content/uploads/2016/08/c5.jpg" alt=""  width="119" height="108"></div>
                        <div><img src="https://2kshsc4aimaz13nsj91wgxce-wpengine.netdna-ssl.com/wp-content/uploads/2016/08/c4.jpg" alt=""  width="119" height="108"></div>
                        <div><img src="https://2kshsc4aimaz13nsj91wgxce-wpengine.netdna-ssl.com/wp-content/uploads/2016/08/c3.jpg" alt=""  width="119" height="108"></div>
                        <div><img src="https://2kshsc4aimaz13nsj91wgxce-wpengine.netdna-ssl.com/wp-content/uploads/2016/08/c2.jpg" alt=""  width="119" height="108"></div>
                        <div><img src="https://2kshsc4aimaz13nsj91wgxce-wpengine.netdna-ssl.com/wp-content/uploads/2016/08/c1.jpg" alt=""  width="119" height="108"></div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
